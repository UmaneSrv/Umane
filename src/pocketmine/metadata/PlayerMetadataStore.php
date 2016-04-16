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

use pocketmine\IPlayer;

class PlayerMetadataStore extends MetadataStore{

	public function disambiguate(Metadatable $player, $metadataKey){
		if(!($player instanceof IPlayer)){
			throw new \InvalidArgumentException("Argument must be an IPlayer instance");
		}

		return \strtolower($player->getName()) . ":" . $metadataKey;
	}
}
