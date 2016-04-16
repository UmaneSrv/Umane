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















class Int extends NamedTag{

	public function getType(){
		return NBT::TAG_Int;
	}

	public function read(NBT $nbt){
		$this->value = $nbt->endianness === 1 ? \unpack("N", $nbt->get(4))[1] : \unpack("V", $nbt->get(4))[1];
	}

	public function write(NBT $nbt){
		$nbt->buffer .= $nbt->endianness === 1 ? \pack("N", $this->value) : \pack("V", $this->value);
	}
}
