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

namespace pocketmine\event\player;

use pocketmine\event\Cancellable;
use pocketmine\Player;

/**
 * Called when a player has its gamemode changed
 */
class PlayerGameModeChangeEvent extends PlayerEvent implements Cancellable{
	public static $handlerList = \null;

	/** @var int */
	protected $gamemode;

	public function __construct(Player $player, $newGamemode){
		$this->player = $player;
		$this->gamemode = (int) $newGamemode;
	}

	public function getNewGamemode(){
		return $this->gamemode;
	}

}