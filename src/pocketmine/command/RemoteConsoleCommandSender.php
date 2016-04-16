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

namespace pocketmine\command;


use pocketmine\event\TextContainer;

class RemoteConsoleCommandSender extends ConsoleCommandSender{

	/** @var string */
	private $messages = "";

	public function sendMessage($message){
		if($message instanceof TextContainer){
			$message = $this->getServer()->getLanguage()->translate($message);
		}else{
			$message = $this->getServer()->getLanguage()->translateString($message);
		}

		$this->messages .= \trim($message, "\r\n") . "\n";
	}

	public function getMessage(){
		return $this->messages;
	}

	public function getName(){
		return "Rcon";
	}


}