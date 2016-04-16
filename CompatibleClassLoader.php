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

namespace pocketmine;

class CompatibleClassLoader extends \BaseClassLoader{

	/**
	 * @deprecated
	 */
	public function add($namespace, $paths){
		$this->addPath(\array_shift($paths));
	}
}