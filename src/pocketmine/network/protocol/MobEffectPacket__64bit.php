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











class MobEffectPacket extends DataPacket{
	const NETWORK_ID = Info::MOB_EFFECT_PACKET;

	const EVENT_ADD = 1;
	const EVENT_MODIFY = 2;
	const EVENT_REMOVE = 3;

	public $eid;
	public $eventId;
	public $effectId;
	public $amplifier;
	public $particles = \true;
	public $duration;

	public function decode(){

	}

	public function encode(){
		$this->buffer = \chr(self::NETWORK_ID); $this->offset = 0;;
		$this->buffer .= \pack("NN", $this->eid >> 32, $this->eid & 0xFFFFFFFF);
		$this->buffer .= \chr($this->eventId);
		$this->buffer .= \chr($this->effectId);
		$this->buffer .= \chr($this->amplifier);
		$this->buffer .= \chr($this->particles ? 1 : 0);
		$this->buffer .= \pack("N", $this->duration);
	}

}
