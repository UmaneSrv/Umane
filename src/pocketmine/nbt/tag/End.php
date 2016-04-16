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

namespace pocketmine\nbt\tag;

use pocketmine\nbt\NBT;

class End extends Tag{

	public function getType(){
		return NBT::TAG_End;
	}

	public function read(NBT $nbt){

	}

	public function write(NBT $nbt){

	}
}