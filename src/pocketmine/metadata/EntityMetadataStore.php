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

use pocketmine\entity\Entity;

class EntityMetadataStore extends MetadataStore{

	public function disambiguate(Metadatable $entity, $metadataKey){
		if(!($entity instanceof Entity)){
			throw new \InvalidArgumentException("Argument must be an Entity instance");
		}

		return $entity->getId() . ":" . $metadataKey;
	}
}