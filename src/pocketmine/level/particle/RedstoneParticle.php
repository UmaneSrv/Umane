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

namespace pocketmine\level\particle;

use pocketmine\math\Vector3;

class RedstoneParticle extends GenericParticle{
	public function __construct(Vector3 $pos, $lifetime = 1){
		parent::__construct($pos, Particle::TYPE_REDSTONE, $lifetime);
	}
}
