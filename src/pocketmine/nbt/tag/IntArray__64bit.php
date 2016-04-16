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















class IntArray extends NamedTag{

	public function getType(){
		return NBT::TAG_IntArray;
	}

	public function read(NBT $nbt){
		 [];
		$size = $nbt->endianness === 1 ? \unpack("N", $nbt->get(4))[1] << 32 >> 32 : \unpack("V", $nbt->get(4))[1] << 32 >> 32;
		$this->value = \array_values(\unpack($nbt->endianness === NBT::LITTLE_ENDIAN ? "V*" : "N*", $nbt->get($size * 4)));
	}

	public function write(NBT $nbt){
		$nbt->buffer .= $nbt->endianness === 1 ? \pack("N", \count($this->value)) : \pack("V", \count($this->value));
		$nbt->buffer .= \pack($nbt->endianness === NBT::LITTLE_ENDIAN ? "V*" : "N*", ...$this->value);
	}

	public function __toString(){
		$str = \get_class($this) . "{\n";
		$str .= \implode(", ", $this->value);
		return $str . "}";
	}
}
