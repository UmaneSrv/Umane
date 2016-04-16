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


class GlowingObsidian extends Solid{

	protected $id = self::GLOWING_OBSIDIAN;

	public function __construct($meta = 0){
		$this->meta = $meta;
	}

	public function getName(){
		return "Glowing Obsidian";
	}

	public function getLightLevel(){
		return 12;
	}

}