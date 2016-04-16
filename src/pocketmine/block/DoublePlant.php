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
use pocketmine\level\Level;

class DoublePlant extends Flowable{

	protected $id = self::DOUBLE_PLANT;

	public function __construct($meta = 0){
		$this->meta = $meta;
	}

	public function canBeReplaced(){
		return \true;
	}

	public function getName(){
		static $names = [
			0 => "Sunflower",
			1 => "Lilac",
			2 => "Double Tallgrass",
			3 => "Large Fern",
			4 => "Rose Bush",
			5 => "Peony"
		];
		return $names[$this->meta & 0x07];
	}


	public function onUpdate($type){
		if($type === Level::BLOCK_UPDATE_NORMAL){
			if($this->getSide(0)->isTransparent() === \true){ //Replace with common break method
				$this->getLevel()->setBlock($this, new Air(), \false, \false, \true);

				return Level::BLOCK_UPDATE_NORMAL;
			}
		}

		return \false;
	}

	public function getDrops(Item $item){
		//TODO

		return [];
	}

}