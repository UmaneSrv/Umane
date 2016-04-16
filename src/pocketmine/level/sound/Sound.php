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

namespace pocketmine\level\sound;

use pocketmine\math\Vector3;
use pocketmine\network\protocol\DataPacket;

abstract class Sound extends Vector3{
	
	/**
	 * @return DataPacket|DataPacket[]
	 */
	abstract public function encode();

}
