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

namespace pocketmine\level\generator\hell;

use pocketmine\level\generator\biome\Biome;

class HellBiome extends Biome{

	public function getName(){
		return "Hell";
	}

	public function getColor(){
		return 0;
	}
}
