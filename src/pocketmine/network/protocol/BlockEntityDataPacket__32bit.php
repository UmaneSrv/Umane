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











class BlockEntityDataPacket extends DataPacket{
	const NETWORK_ID = Info::BLOCK_ENTITY_DATA_PACKET;

	public $x;
	public $y;
	public $z;
	public $namedtag;

	public function decode(){
		$this->x = \unpack("N", $this->get(4))[1];
		$this->y = \unpack("N", $this->get(4))[1];
		$this->z = \unpack("N", $this->get(4))[1];
		$this->namedtag = $this->get(\true);
	}

	public function encode(){
		$this->buffer = \chr(self::NETWORK_ID); $this->offset = 0;;
		$this->buffer .= \pack("N", $this->x);
		$this->buffer .= \pack("N", $this->y);
		$this->buffer .= \pack("N", $this->z);
		$this->buffer .= $this->namedtag;
	}

}
