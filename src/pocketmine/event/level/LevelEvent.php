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

/**
 * Level related events
 */
namespace pocketmine\event\level;

use pocketmine\event\Event;
use pocketmine\level\Level;

abstract class LevelEvent extends Event{
	/** @var \pocketmine\level\Level */
	private $level;

	/**
	 * @param Level $level
	 */
	public function __construct(Level $level){
		$this->level = $level;
	}

	/**
	 * @return \pocketmine\level\Level
	 */
	public function getLevel(){
		return $this->level;
	}
}