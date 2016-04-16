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

namespace pocketmine\block;


class Sponge extends Solid{

	protected $id = self::SPONGE;

	public function __construct(){

	}

	public function getHardness(){
		return 0.6;
	}

	public function getName(){
		return "Sponge";
	}

}