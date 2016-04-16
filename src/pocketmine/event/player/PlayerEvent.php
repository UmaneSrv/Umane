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
 * Player-only related events
 */
namespace pocketmine\event\player;

use pocketmine\event\Event;

abstract class PlayerEvent extends Event{
	/** @var \pocketmine\Player */
	protected $player;

	public function getPlayer(){
		return $this->player;
	}
}