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

use pocketmine\item\Item;

interface Transaction{

	/**
	 * @return Inventory
	 */
	public function getInventory();

	/**
	 * @return int
	 */
	public function getSlot();

	/**
	 * @return Item
	 */
	public function getSourceItem();

	/**
	 * @return Item
	 */
	public function getTargetItem();

	/**
	 * @return float
	 */
	public function getCreationTime();
}