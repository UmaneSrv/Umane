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

namespace pocketmine\metadata;

use pocketmine\plugin\Plugin;

abstract class MetadataValue{
	/** @var \WeakRef<Plugin> */
	protected $owningPlugin;

	protected function __construct(Plugin $owningPlugin){
		$this->owningPlugin = new \WeakRef($owningPlugin);
	}

	/**
	 * @return Plugin
	 */
	public function getOwningPlugin(){
		return $this->owningPlugin->get();
	}

	/**
	 * Fetches the value of this metadata item.
	 *
	 * @return mixed
	 */
	public abstract function value();

	/**
	 * Invalidates this metadata item, forcing it to recompute when next
	 * accessed.
	 */
	public abstract function invalidate();
}