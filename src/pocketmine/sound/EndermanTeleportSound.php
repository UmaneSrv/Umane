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
use pocketmine\network\protocol\LevelEventPacket;

class EndermanTeleportSound extends GenericSound{
	public function __construct(Vector3 $pos){
		parent::__construct($pos, LevelEventPacket::EVENT_SOUND_ENDERMAN_TELEPORT);
	}
}
