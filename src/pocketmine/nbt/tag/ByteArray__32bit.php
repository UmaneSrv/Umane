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















class ByteArray extends NamedTag{

	public function getType(){
		return NBT::TAG_ByteArray;
	}

	public function read(NBT $nbt){
		$this->value = $nbt->get($nbt->endianness === 1 ? \unpack("N", $nbt->get(4))[1] : \unpack("V", $nbt->get(4))[1]);
	}

	public function write(NBT $nbt){
		$nbt->buffer .= $nbt->endianness === 1 ? \pack("N", \strlen($this->value)) : \pack("V", \strlen($this->value));
		$nbt->buffer .= $this->value;
	}
}
