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

namespace pocketmine\item;

use pocketmine\block\Block;

class FlowerPot extends Item{
	public function __construct($meta = 0, $count = 1){
		$this->block = Block::get(Item::FLOWER_POT_BLOCK);
		parent::__construct(self::FLOWER_POT, 0, $count, "Flower Pot");
	}
}