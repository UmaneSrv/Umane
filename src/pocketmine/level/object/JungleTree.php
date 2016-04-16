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
use pocketmine\block\Wood;

class JungleTree extends Tree{

	public function __construct(){
		$this->trunkBlock = Block::LOG;
		$this->leafBlock = Block::LEAVES;
		$this->type = Wood::JUNGLE;
		$this->treeHeight = 8;
	}
}