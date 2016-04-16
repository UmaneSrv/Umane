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











class AddPaintingPacket extends DataPacket{
	const NETWORK_ID = Info::ADD_PAINTING_PACKET;

	public $eid;
	public $x;
	public $y;
	public $z;
	public $direction;
	public $title;

	public function decode(){

	}

	public function encode(){
		$this->buffer = \chr(self::NETWORK_ID); $this->offset = 0;;
		$this->buffer .= \pack("NN", $this->eid >> 32, $this->eid & 0xFFFFFFFF);
		$this->buffer .= \pack("N", $this->x);
		$this->buffer .= \pack("N", $this->y);
		$this->buffer .= \pack("N", $this->z);
		$this->buffer .= \pack("N", $this->direction);
		$this->putString($this->title);
	}

}
