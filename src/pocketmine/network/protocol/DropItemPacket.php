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











class DropItemPacket extends DataPacket{
	const NETWORK_ID = Info::DROP_ITEM_PACKET;

	public $type;
	public $item;

	public function decode(){
		$this->type = \ord($this->get(1));
		$this->item = $this->getSlot();
	}

	public function encode(){

	}

}
