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


interface CommandMap{

	/**
	 * @param string    $fallbackPrefix
	 * @param Command[] $commands
	 */
	public function registerAll($fallbackPrefix, array $commands);

	/**
	 * @param string  $fallbackPrefix
	 * @param Command $command
	 * @param string  $label
	 */
	public function register($fallbackPrefix, Command $command, $label = \null);

	/**
	 * @param CommandSender $sender
	 * @param string        $cmdLine
	 *
	 * @return boolean
	 */
	public function dispatch(CommandSender $sender, $cmdLine);

	/**
	 * @return void
	 */
	public function clearCommands();

	/**
	 * @param string $name
	 *
	 * @return Command
	 */
	public function getCommand($name);


}