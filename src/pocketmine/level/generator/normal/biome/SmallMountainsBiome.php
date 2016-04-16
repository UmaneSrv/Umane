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

namespace pocketmine\level\generator\normal\biome;


class SmallMountainsBiome extends MountainsBiome{

	public function __construct(){
		parent::__construct();

		$this->setElevation(63, 97);
	}

	public function getName(){
		return "Small Mountains";
	}
}