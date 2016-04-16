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

use pocketmine\entity\Entity;
use pocketmine\item\Item;
use pocketmine\nbt\tag\Byte;
use pocketmine\nbt\tag\Compound;
use pocketmine\nbt\tag\Double;
use pocketmine\nbt\tag\Enum;
use pocketmine\nbt\tag\Float;
use pocketmine\Player;
use pocketmine\utils\Random;

class TNT extends Solid{

	protected $id = self::TNT;

	public function __construct(){

	}

	public function getName(){
		return "TNT";
	}

	public function getHardness(){
		return 0;
	}

	public function canBeActivated(){
		return \true;
	}

	public function onActivate(Item $item, Player $player = \null){
		if($item->getId() === Item::FLINT_STEEL){
			$item->useOn($this);
			$this->getLevel()->setBlock($this, new Air(), \true);

			$mot = (new Random())->nextSignedFloat() * M_PI * 2;
			$tnt = Entity::createEntity("PrimedTNT", $this->getLevel()->getChunk($this->x >> 4, $this->z >> 4), new Compound("", [
				"Pos" => new Enum("Pos", [
					new Double("", $this->x + 0.5),
					new Double("", $this->y),
					new Double("", $this->z + 0.5)
				]),
				"Motion" => new Enum("Motion", [
					new Double("", -\sin($mot) * 0.02),
					new Double("", 0.2),
					new Double("", -\cos($mot) * 0.02)
				]),
				"Rotation" => new Enum("Rotation", [
					new Float("", 0),
					new Float("", 0)
				]),
				"Fuse" => new Byte("Fuse", 80)
			]));

			$tnt->spawnToAll();

			return \true;
		}

		return \false;
	}
}