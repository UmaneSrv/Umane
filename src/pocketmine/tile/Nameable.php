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

namespace pocketmine\tile;


interface Nameable{


	/**
	 * @return string
	 */
	public function getName();

	/**
	 * @param void $str
	 */
	public function setName($str);

	/**
	 * @return bool
	 */
	public function hasName();
}
