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

class MethodEventExecutor implements EventExecutor{

	private $method;

	public function __construct($method){
		$this->method = $method;
	}

	public function execute(Listener $listener, Event $event){
		$listener->{$this->getMethod()}($event);
	}

	public function getMethod(){
		return $this->method;
	}
}