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

namespace pocketmine\event\inventory;

use pocketmine\event\Cancellable;
use pocketmine\inventory\Inventory;
use pocketmine\Player;

class InventoryOpenEvent extends InventoryEvent implements Cancellable{
	public static $handlerList = \null;

	/** @var Player */
	private $who;

	/**
	 * @param Inventory $inventory
	 * @param Player    $who
	 */
	public function __construct(Inventory $inventory, Player $who){
		$this->who = $who;
		parent::__construct($inventory);
	}

	/**
	 * @return Player
	 */
	public function getPlayer(){
		return $this->who;
	}

}