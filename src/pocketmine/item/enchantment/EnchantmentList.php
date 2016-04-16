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

namespace pocketmine\item\enchantment;


class EnchantmentList{

	/** @var EnchantmentEntry[] */
	private $enchantments;

	public function __construct($size){
		$this->enchantments = new \SplFixedArray($size);
	}

	/**
	 * @param $slot
	 * @param EnchantmentEntry $entry
	 */
	public function setSlot($slot, EnchantmentEntry $entry){
		$this->enchantments[$slot] = $entry;
	}

	/**
	 * @param $slot
	 * @return EnchantmentEntry
	 */
	public function getSlot($slot){
		return $this->enchantments[$slot];
	}

	public function getSize(){
		return $this->enchantments->getSize();
	}

}