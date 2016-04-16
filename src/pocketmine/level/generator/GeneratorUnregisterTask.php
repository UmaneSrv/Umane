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

namespace pocketmine\level\generator;


use pocketmine\level\Level;

use pocketmine\scheduler\AsyncTask;


class GeneratorUnregisterTask extends AsyncTask{

	public $levelId;

	public function __construct(Level $level){
		$this->levelId = $level->getId();
	}

	public function onRun(){
		$this->saveToThreadStore("generation.level{$this->levelId}.manager", \null);
		$this->saveToThreadStore("generation.level{$this->levelId}.generator", \null);
	}
}
