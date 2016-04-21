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

use pocketmine\item\Item;
use pocketmine\item\Tool;
use pocketmine\math\AxisAlignedBB;
use pocketmine\level\sound\DoorSound;
use pocketmine\Player;

class Trapdoor extends Transparent{

	protected $id = self::TRAPDOOR;

	public function __construct($meta = 0){
		$this->meta = $meta;
	}

	public function getName(){
		return "Wooden Trapdoor";
	}

	public function getHardness(){
		return 3;
	}

	public function canBeActivated(){
		return \true;
	}

	protected function recalculateBoundingBox(){

		$damage = $this->getDamage();

		$f = 0.1875;

		if(($damage & 0x08) > 0){
			$bb = new AxisAlignedBB(
				$this->x,
				$this->y + 1 - $f,
				$this->z,
				$this->x + 1,
				$this->y + 1,
				$this->z + 1
			);
		}else{
			$bb = new AxisAlignedBB(
				$this->x,
				$this->y,
				$this->z,
				$this->x + 1,
				$this->y + $f,
				$this->z + 1
			);
		}

		if(($damage & 0x04) > 0){
			if(($damage & 0x03) === 0){
				$bb->setBounds(
					$this->x,
					$this->y,
					$this->z + 1 - $f,
					$this->x + 1,
					$this->y + 1,
					$this->z + 1
				);
			}elseif(($damage & 0x03) === 1){
				$bb->setBounds(
					$this->x,
					$this->y,
					$this->z,
					$this->x + 1,
					$this->y + 1,
					$this->z + $f
				);
			}
			if(($damage & 0x03) === 2){
				$bb->setBounds(
					$this->x + 1 - $f,
					$this->y,
					$this->z,
					$this->x + 1,
					$this->y + 1,
					$this->z + 1
				);
			}
			if(($damage & 0x03) === 3){
				$bb->setBounds(
					$this->x,
					$this->y,
					$this->z,
					$this->x + $f,
					$this->y + 1,
					$this->z + 1
				);
			}
		}

		return $bb;
	}

	public function place(Item $item, Block $block, Block $target, $face, $fx, $fy, $fz, Player $player = \null){
		if(($target->isTransparent() === \false or $target->getId() === self::SLAB) and $face !== 0 and $face !== 1){
			$faces = [
				2 => 0,
				3 => 1,
				4 => 2,
				5 => 3,
			];
			$this->meta = $faces[$face] & 0x03;
			if($fy > 0.5){
				$this->meta |= 0x08;
			}
			$this->getLevel()->setBlock($block, $this, \true, \true);

			return \true;
		}

		return \false;
	}

	public function getDrops(Item $item){
		return [
			[$this->id, 0, 1],
		];
	}

	public function onActivate(Item $item, Player $player = \null){
		$this->meta ^= 0x04;
		$this->getLevel()->setBlock($this, $this, \true);
		$this->level->addSound(new DoorSound($this));
		return \true;
	}

	public function getToolType(){
		return Tool::TYPE_AXE;
	}
}