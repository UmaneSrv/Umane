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

class Cake extends Item{
	public function __construct($meta = 0, $count = 1){
		$this->block = Block::get(Item::CAKE_BLOCK);
		parent::__construct(self::CAKE, 0, $count, "Cake");
	}

	public function getMaxStackSize(){
		return 1;
	}
}