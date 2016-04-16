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











class CraftingEventPacket extends DataPacket{
	const NETWORK_ID = Info::CRAFTING_EVENT_PACKET;

	public $windowId;
	public $type;
	public $id;
	public $input = [];
	public $output = [];

	public function clean(){
		$this->input = [];
		$this->output = [];
		return parent::clean();
	}

	public function decode(){
		$this->windowId = \ord($this->get(1));
		$this->type = \unpack("N", $this->get(4))[1] << 32 >> 32;
		$this->id = $this->getUUID();

		$size = \unpack("N", $this->get(4))[1] << 32 >> 32;
		for($i = 0; $i < $size and $i < 128; ++$i){
			$this->input[] = $this->getSlot();
		}

		$size = \unpack("N", $this->get(4))[1] << 32 >> 32;
		for($i = 0; $i < $size and $i < 128; ++$i){
			$this->output[] = $this->getSlot();
		}
	}

	public function encode(){

	}

}
