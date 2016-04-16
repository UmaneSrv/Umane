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

interface TransactionGroup{

	/**
	 * @return float
	 */
	function getCreationTime();

	/**
	 * @return Transaction[]
	 */
	function getTransactions();

	/**
	 * @return Inventory[]
	 */
	function getInventories();

	/**
	 * @param Transaction $transaction
	 */
	function addTransaction(Transaction $transaction);

	/**
	 * @return bool
	 */
	function canExecute();

	/**
	 * @return bool
	 */
	function execute();

	/**
	 * @return bool
	 */
	function hasExecuted();

}