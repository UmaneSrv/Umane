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

namespace pocketmine\entity;

abstract class WaterAnimal extends Creature implements Ageable{
	public function initEntity(){
		parent::initEntity();
		if($this->getDataProperty(self::DATA_AGEABLE_FLAGS) === \null){
			$this->setDataProperty(self::DATA_AGEABLE_FLAGS, self::DATA_TYPE_BYTE, 0);
		}
	}

	public function isBaby(){
		return $this->getDataFlag(self::DATA_AGEABLE_FLAGS, self::DATA_FLAG_BABY);
	}
}
