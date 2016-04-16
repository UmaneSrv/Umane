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











class PlayerActionPacket extends DataPacket{
	const NETWORK_ID = Info::PLAYER_ACTION_PACKET;

	const ACTION_START_BREAK = 0;
	const ACTION_ABORT_BREAK = 1;
	const ACTION_STOP_BREAK = 2;


	const ACTION_RELEASE_ITEM = 5;
	const ACTION_STOP_SLEEPING = 6;
	const ACTION_RESPAWN = 7;
	const ACTION_JUMP = 8;
	const ACTION_START_SPRINT = 9;
	const ACTION_STOP_SPRINT = 10;
	const ACTION_START_SNEAK = 11;
	const ACTION_STOP_SNEAK = 12;
	const ACTION_DIMENSION_CHANGE = 13;

	public $eid;
	public $action;
	public $x;
	public $y;
	public $z;
	public $face;

	public function decode(){
		$this->eid = Binary::readLong($this->get(8));
		$this->action = \unpack("N", $this->get(4))[1];
		$this->x = \unpack("N", $this->get(4))[1];
		$this->y = \unpack("N", $this->get(4))[1];
		$this->z = \unpack("N", $this->get(4))[1];
		$this->face = \unpack("N", $this->get(4))[1];
	}

	public function encode(){
		$this->buffer = \chr(self::NETWORK_ID); $this->offset = 0;;
		$this->buffer .= Binary::writeLong($this->eid);
		$this->buffer .= \pack("N", $this->action);
		$this->buffer .= \pack("N", $this->x);
		$this->buffer .= \pack("N", $this->y);
		$this->buffer .= \pack("N", $this->z);
		$this->buffer .= \pack("N", $this->face);
	}

}
