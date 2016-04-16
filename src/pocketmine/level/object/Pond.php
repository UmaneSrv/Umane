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

namespace pocketmine\level\generator\object;

use pocketmine\block\Block;
use pocketmine\level\ChunkManager;
use pocketmine\math\Vector3 as Vector3;
use pocketmine\utils\Random;

class Pond{
	private $random;
	public $type;

	public function __construct(Random $random, Block $type){
		$this->type = $type;
		$this->random = $random;
	}

	public function canPlaceObject(ChunkManager $level, Vector3 $pos){
	}

	public function placeObject(ChunkManager $level, Vector3 $pos){
	}

}