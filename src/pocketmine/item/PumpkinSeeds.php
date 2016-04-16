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

class PumpkinSeeds extends Item{
	public function __construct($meta = 0, $count = 1){
		$this->block = Block::get(Item::PUMPKIN_STEM);
		parent::__construct(self::PUMPKIN_SEEDS, 0, $count, "Pumpkin Seeds");
	}
}