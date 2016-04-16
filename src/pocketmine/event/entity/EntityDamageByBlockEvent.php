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

namespace pocketmine\event\entity;

use pocketmine\block\Block;
use pocketmine\entity\Entity;

class EntityDamageByBlockEvent extends EntityDamageEvent{

	/** @var Block */
	private $damager;


	/**
	 * @param Block     $damager
	 * @param Entity    $entity
	 * @param int       $cause
	 * @param int|int[] $damage
	 */
	public function __construct(Block $damager, Entity $entity, $cause, $damage){
		$this->damager = $damager;
		parent::__construct($entity, $cause, $damage);
	}

	/**
	 * @return Block
	 */
	public function getDamager(){
		return $this->damager;
	}


}