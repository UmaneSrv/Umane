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











class SetDifficultyPacket extends DataPacket{
	const NETWORK_ID = Info::SET_DIFFICULTY_PACKET;

	public $difficulty;

	public function decode(){
		$this->difficulty = (\PHP_INT_SIZE === 8 ? \unpack("N", $this->get(4))[1] << 32 >> 32 : \unpack("N", $this->get(4))[1]);
	}

	public function encode(){
		$this->buffer = \chr(self::NETWORK_ID); $this->offset = 0;;
		$this->buffer .= \pack("N", $this->difficulty);
	}

}
