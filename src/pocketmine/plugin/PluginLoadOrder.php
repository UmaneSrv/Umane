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

namespace pocketmine\plugin;


abstract class PluginLoadOrder{
	/*
	 * The plugin will be loaded at startup
	 */
	const STARTUP = 0;

	/*
	 * The plugin will be loaded after the first world has been loaded/created.
	 */
	const POSTWORLD = 1;
}