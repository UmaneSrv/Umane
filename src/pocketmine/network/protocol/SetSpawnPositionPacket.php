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











class SetSpawnPositionPacket extends DataPacket{
	const NETWORK_ID = Info::SET_SPAWN_POSITION_PACKET;

	public $x;
	public $y;
	public $z;

	public function decode(){

	}

	public function encode(){
		$this->buffer = \chr(self::NETWORK_ID); $this->offset = 0;;
		$this->buffer .= \pack("N", $this->x);
		$this->buffer .= \pack("N", $this->y);
		$this->buffer .= \pack("N", $this->z);
	}

}
