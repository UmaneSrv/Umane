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















class Float extends NamedTag{

	public function getType(){
		return NBT::TAG_Float;
	}

	public function read(NBT $nbt){
		$this->value = $nbt->endianness === 1 ? (\ENDIANNESS === 0 ? \unpack("f", $nbt->get(4))[1] : \unpack("f", \strrev($nbt->get(4)))[1]) : (\ENDIANNESS === 0 ? \unpack("f", \strrev($nbt->get(4)))[1] : \unpack("f", $nbt->get(4))[1]);
	}

	public function write(NBT $nbt){
		$nbt->buffer .= $nbt->endianness === 1 ? (\ENDIANNESS === 0 ? \pack("f", $this->value) : \strrev(\pack("f", $this->value))) : (\ENDIANNESS === 0 ? \strrev(\pack("f", $this->value)) : \pack("f", $this->value));
	}
}
