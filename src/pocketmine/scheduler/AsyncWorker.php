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

namespace pocketmine\scheduler;

use pocketmine\Worker;

class AsyncWorker extends Worker{

	public function run(){
		$this->registerClassLoader();
		\gc_enable();
		\ini_set("memory_limit", -1);

		global $store;
		$store = [];

	}

	public function start($options = PTHREADS_INHERIT_NONE){
		parent::start(PTHREADS_INHERIT_CONSTANTS | PTHREADS_INHERIT_FUNCTIONS);
	}

	public function getThreadName(){
		return "Asynchronous Worker";
	}
}
