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

namespace pocketmine\inventory;

use pocketmine\utils\UUID;

interface Recipe{

	/**
	 * @return \pocketmine\item\Item
	 */
	public function getResult();

	public function registerToCraftingManager();

	/**
	 * @return UUID
	 */
	public function getId();
}