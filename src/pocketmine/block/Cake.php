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

use pocketmine\event\entity\EntityRegainHealthEvent;
use pocketmine\item\Item;
use pocketmine\level\Level;
use pocketmine\math\AxisAlignedBB;
use pocketmine\Player;


class Cake extends Transparent{

	protected $id = self::CAKE_BLOCK;

	public function __construct($meta = 0){
		$this->meta = $meta;
	}

	public function canBeActivated(){
		return \true;
	}

	public function getHardness(){
		return 0.5;
	}

	public function getName(){
		return "Cake Block";
	}

	protected function recalculateBoundingBox(){

		$f = (1 + $this->getDamage() * 2) / 16;

		return new AxisAlignedBB(
			$this->x + $f,
			$this->y,
			$this->z + 0.0625,
			$this->x + 1 - 0.0625,
			$this->y + 0.5,
			$this->z + 1 - 0.0625
		);
	}

	public function place(Item $item, Block $block, Block $target, $face, $fx, $fy, $fz, Player $player = \null){
		$down = $this->getSide(0);
		if($down->getId() !== self::AIR){
			$this->getLevel()->setBlock($block, $this, \true, \true);

			return \true;
		}

		return \false;
	}

	public function onUpdate($type){
		if($type === Level::BLOCK_UPDATE_NORMAL){
			if($this->getSide(0)->getId() === self::AIR){ //Replace with common break method
				$this->getLevel()->setBlock($this, new Air(), \true);

				return Level::BLOCK_UPDATE_NORMAL;
			}
		}

		return \false;
	}

	public function getDrops(Item $item){
		return [];
	}

	public function onActivate(Item $item, Player $player = \null){
		if($player instanceof Player and $player->getHealth() < $player->getMaxHealth()){
			++$this->meta;

			$ev = new EntityRegainHealthEvent($player, 3, EntityRegainHealthEvent::CAUSE_EATING);
			$player->heal($ev->getAmount(), $ev);

			if(!$ev->isCancelled()){
				if($this->meta >= 0x06){
					$this->getLevel()->setBlock($this, new Air(), \true);
				}else{
					$this->getLevel()->setBlock($this, $this, \true);
				}
				
				return \true;
			}
		}

		return \false;
	}

}
