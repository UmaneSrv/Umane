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











class AddEntityPacket extends DataPacket{
	const NETWORK_ID = Info::ADD_ENTITY_PACKET;

	public $eid;
	public $type;
	public $x;
	public $y;
	public $z;
	public $speedX;
	public $speedY;
	public $speedZ;
	public $yaw;
	public $pitch;
	public $metadata;
	public $links = [];

	public function decode(){

	}

	public function encode(){
		$this->buffer = \chr(self::NETWORK_ID); $this->offset = 0;;
		$this->buffer .= \pack("NN", $this->eid >> 32, $this->eid & 0xFFFFFFFF);
		$this->buffer .= \pack("N", $this->type);
		$this->buffer .= (\ENDIANNESS === 0 ? \pack("f", $this->x) : \strrev(\pack("f", $this->x)));
		$this->buffer .= (\ENDIANNESS === 0 ? \pack("f", $this->y) : \strrev(\pack("f", $this->y)));
		$this->buffer .= (\ENDIANNESS === 0 ? \pack("f", $this->z) : \strrev(\pack("f", $this->z)));
		$this->buffer .= (\ENDIANNESS === 0 ? \pack("f", $this->speedX) : \strrev(\pack("f", $this->speedX)));
		$this->buffer .= (\ENDIANNESS === 0 ? \pack("f", $this->speedY) : \strrev(\pack("f", $this->speedY)));
		$this->buffer .= (\ENDIANNESS === 0 ? \pack("f", $this->speedZ) : \strrev(\pack("f", $this->speedZ)));
		$this->buffer .= (\ENDIANNESS === 0 ? \pack("f", $this->yaw) : \strrev(\pack("f", $this->yaw)));
		$this->buffer .= (\ENDIANNESS === 0 ? \pack("f", $this->pitch) : \strrev(\pack("f", $this->pitch)));
		$meta = Binary::writeMetadata($this->metadata);
		$this->buffer .= $meta;
		$this->buffer .= \pack("n", \count($this->links));
		foreach($this->links as $link){
			$this->buffer .= \pack("NN", $link[0] >> 32, $link[0] & 0xFFFFFFFF);
			$this->buffer .= \pack("NN", $link[1] >> 32, $link[1] & 0xFFFFFFFF);
			$this->buffer .= \chr($link[2]);
		}
	}

}
