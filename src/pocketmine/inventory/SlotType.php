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

/**
 * Saves all the information regarding default inventory sizes and types
 */
interface SlotType{
	const RESULT = 0;

	const CRAFTING = 1; //Not used in Minecraft: PE yet

	const ARMOR = 2;

	const CONTAINER = 3;

	const HOTBAR = 4;

	const FUEL = 5;
}