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

namespace pocketmine\metadata;

use pocketmine\level\Level;

class LevelMetadataStore extends MetadataStore{

	public function disambiguate(Metadatable $level, $metadataKey){
		if(!($level instanceof Level)){
			throw new \InvalidArgumentException("Argument must be a Level instance");
		}

		return \strtolower($level->getName()) . ":" . $metadataKey;
	}
}