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











class LoginPacket extends DataPacket{
	const NETWORK_ID = Info::LOGIN_PACKET;

	public $username;
	public $protocol1;
	public $protocol2;
	public $clientId;

	public $clientUUID;
	public $serverAddress;
	public $clientSecret;

	public $skinName;
	public $skin = \null;

	public function decode(){
		$this->username = $this->getString();
		$this->protocol1 = (\PHP_INT_SIZE === 8 ? \unpack("N", $this->get(4))[1] << 32 >> 32 : \unpack("N", $this->get(4))[1]);
		$this->protocol2 = (\PHP_INT_SIZE === 8 ? \unpack("N", $this->get(4))[1] << 32 >> 32 : \unpack("N", $this->get(4))[1]);
		if($this->protocol1 < Info::CURRENT_PROTOCOL){ //New fields!
			$this->setBuffer(\null, 0); //Skip batch packet handling
			return;
		}
		$this->clientId = Binary::readLong($this->get(8));
		$this->clientUUID = $this->getUUID();
		$this->serverAddress = $this->getString();
		$this->clientSecret = $this->getString();

		$this->skinName = $this->getString();
		$this->skin = $this->getString();
	}

	public function encode(){

	}

}
