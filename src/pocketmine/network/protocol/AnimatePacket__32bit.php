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











class AnimatePacket extends DataPacket{
	const NETWORK_ID = Info::ANIMATE_PACKET;

	public $action;
	public $eid;

	public function decode(){
		$this->action = \ord($this->get(1));
		$this->eid = Binary::readLong($this->get(8));
	}

	public function encode(){
		$this->buffer = \chr(self::NETWORK_ID); $this->offset = 0;;
		$this->buffer .= \chr($this->action);
		$this->buffer .= Binary::writeLong($this->eid);
	}

}
