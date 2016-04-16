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

use pocketmine\utils\Binary;















class Short extends NamedTag{

	public function getType(){
		return NBT::TAG_Short;
	}

	public function read(NBT $nbt){
		$this->value = $nbt->endianness === 1 ? \unpack("n", $nbt->get(2))[1] : \unpack("v", $nbt->get(2))[1];
	}

	public function write(NBT $nbt){
		$nbt->buffer .= $nbt->endianness === 1 ? \pack("n", $this->value) : \pack("v", $this->value);
	}
}
