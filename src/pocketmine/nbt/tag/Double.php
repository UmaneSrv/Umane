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















class Double extends NamedTag{

	public function getType(){
		return NBT::TAG_Double;
	}

	public function read(NBT $nbt){
		$this->value = $nbt->endianness === 1 ? (\ENDIANNESS === 0 ? \unpack("d", $nbt->get(8))[1] : \unpack("d", \strrev($nbt->get(8)))[1]) : (\ENDIANNESS === 0 ? \unpack("d", \strrev($nbt->get(8)))[1] : \unpack("d", $nbt->get(8))[1]);
	}

	public function write(NBT $nbt){
		$nbt->buffer .= $nbt->endianness === 1 ? (\ENDIANNESS === 0 ? \pack("d", $this->value) : \strrev(\pack("d", $this->value))) : (\ENDIANNESS === 0 ? \strrev(\pack("d", $this->value)) : \pack("d", $this->value));
	}
}
