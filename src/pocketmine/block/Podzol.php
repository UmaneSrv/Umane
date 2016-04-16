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

use pocketmine\item\Tool;

class Podzol extends Solid{

	protected $id = self::PODZOL;

	public function __construct(){

	}

	public function getToolType(){
		return Tool::TYPE_SHOVEL;
	}

	public function getName(){
		return "Podzol";
	}

	public function getHardness(){
		return 2.5;
	}
}