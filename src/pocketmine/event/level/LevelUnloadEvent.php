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

namespace pocketmine\event\level;

use pocketmine\event\Cancellable;

/**
 * Called when a Level is unloaded
 */
class LevelUnloadEvent extends LevelEvent implements Cancellable{
	public static $handlerList = \null;
}