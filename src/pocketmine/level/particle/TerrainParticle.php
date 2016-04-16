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

use pocketmine\block\Block;
use pocketmine\math\Vector3;

class TerrainParticle extends GenericParticle{
	public function __construct(Vector3 $pos, Block $b){
		parent::__construct($pos, Particle::TYPE_TERRAIN, ($b->getDamage() << 8) | $b->getId());
	}
}
