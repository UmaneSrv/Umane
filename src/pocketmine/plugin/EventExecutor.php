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

namespace pocketmine\plugin;

use pocketmine\event\Event;
use pocketmine\event\Listener;

interface EventExecutor{

	/**
	 * @param Listener $listener
	 * @param Event    $event
	 *
	 * @return void
	 */
	public function execute(Listener $listener, Event $event);
}