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


class GoldAxe extends Tool{
	public function __construct($meta = 0, $count = 1){
		parent::__construct(self::GOLD_AXE, $meta, $count, "Gold Axe");
	}

	public function isAxe(){
		return Tool::TIER_GOLD;
	}
}