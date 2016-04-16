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

class HardenedClay extends Solid{

	protected $id = self::HARDENED_CLAY;

	public function __construct(){

	}

	public function getName(){
		return "Hardened Clay";
	}

	public function getToolType(){
		return Tool::TYPE_PICKAXE;
	}

	public function getHardness(){
		return 1.25;
	}
}