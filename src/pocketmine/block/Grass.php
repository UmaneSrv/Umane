<?php

/*
 *  ____ 
 * / ___|  ___ _ __ _ __  _   _ _   _ 
 * \___ \ / _ \ '__| '_ \| | | | | | |
 *  ___) |  __/ |  | | | | |_| | |_| |
 * |____/ \___|_|  |_| |_|\__, |\__,_|
 *                        |___/       
 * 
*/

namespace pocketmine\block;

use pocketmine\event\block\BlockSpreadEvent;
use pocketmine\item\Item;
use pocketmine\item\Tool;
use pocketmine\level\generator\object\TallGrass as TallGrassObject;
use pocketmine\level\Level;
use pocketmine\math\Vector3;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Random;

class Grass extends Solid{

	protected $id = self::GRASS;

	public function __construct(){

	}

	public function canBeActivated(){
		return \true;
	}

	public function getName(){
		return "Grass";
	}

	public function getHardness(){
		return 0.6;
	}

	public function getToolType(){
		return Tool::TYPE_SHOVEL;
	}

	public function getDrops(Item $item){
		return [
			[Item::DIRT, 0, 1],
		];
	}

	public function onUpdate($type){
		if($type === Level::BLOCK_UPDATE_RANDOM){
			//TODO: light levels
			$x = \mt_rand($this->x - 1, $this->x + 1);
			$y = \mt_rand($this->y - 2, $this->y + 2);
			$z = \mt_rand($this->z - 1, $this->z + 1);
			$block = $this->getLevel()->getBlock(new Vector3($x, $y, $z));
			if($block->getId() === Block::DIRT){
				if($block->getSide(1) instanceof Transparent){
					Server::getInstance()->getPluginManager()->callEvent($ev = new BlockSpreadEvent($block, $this, new Grass()));
					if(!$ev->isCancelled()){
						$this->getLevel()->setBlock($block, $ev->getNewState());
					}
				}
			}
		}
	}

	public function onActivate(Item $item, Player $player = \null){
		if($item->getId() === Item::DYE and $item->getDamage() === 0x0F){
			$item->count--;
			TallGrassObject::growGrass($this->getLevel(), $this, new Random(\mt_rand()), 8, 2);

			return \true;
		}elseif($item->isHoe()){
			$item->useOn($this);
			$this->getLevel()->setBlock($this, new Farmland());

			return \true;
		}elseif($item->isShovel() and $this->getSide(1)->getId() === Block::AIR){
			$item->useOn($this);
			$this->getLevel()->setBlock($this, new GrassPath());

			return \true;
		}

		return \false;
	}
}