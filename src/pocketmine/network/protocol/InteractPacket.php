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











class InteractPacket extends DataPacket{
	const NETWORK_ID = Info::INTERACT_PACKET;

	public $action;
	public $eid;
	public $target;

	public function decode(){
		$this->action = \ord($this->get(1));
		$this->target = Binary::readLong($this->get(8));
	}

	public function encode(){
		$this->buffer = \chr(self::NETWORK_ID); $this->offset = 0;;
		$this->buffer .= \chr($this->action);
		$this->buffer .= Binary::writeLong($this->target);
	}

}
