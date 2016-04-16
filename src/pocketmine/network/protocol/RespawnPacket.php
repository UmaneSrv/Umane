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

namespace pocketmine\network\protocol;

use pocketmine\utils\Binary;











class RespawnPacket extends DataPacket{
	const NETWORK_ID = Info::RESPAWN_PACKET;

	public $x;
	public $y;
	public $z;

	public function decode(){
		$this->x = (\ENDIANNESS === 0 ? \unpack("f", $this->get(4))[1] : \unpack("f", \strrev($this->get(4)))[1]);
		$this->y = (\ENDIANNESS === 0 ? \unpack("f", $this->get(4))[1] : \unpack("f", \strrev($this->get(4)))[1]);
		$this->z = (\ENDIANNESS === 0 ? \unpack("f", $this->get(4))[1] : \unpack("f", \strrev($this->get(4)))[1]);
	}

	public function encode(){
		$this->buffer = \chr(self::NETWORK_ID); $this->offset = 0;;
		$this->buffer .= (\ENDIANNESS === 0 ? \pack("f", $this->x) : \strrev(\pack("f", $this->x)));
		$this->buffer .= (\ENDIANNESS === 0 ? \pack("f", $this->y) : \strrev(\pack("f", $this->y)));
		$this->buffer .= (\ENDIANNESS === 0 ? \pack("f", $this->z) : \strrev(\pack("f", $this->z)));
	}

}
