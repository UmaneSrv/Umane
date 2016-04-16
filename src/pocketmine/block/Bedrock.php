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

class Bedrock extends Solid{

	protected $id = self::BEDROCK;

	public function __construct(){

	}

	public function getName(){
		return "Bedrock";
	}

	public function getHardness(){
		return -1;
	}

	public function getResistance(){
		return 18000000;
	}

	public function isBreakable(Item $item){
		return \false;
	}

}