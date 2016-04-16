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

/**
 * Level related events
 */
namespace pocketmine\event\level;

use pocketmine\level\format\FullChunk;

abstract class ChunkEvent extends LevelEvent{
	/** @var FullChunk */
	private $chunk;

	/**
	 * @param FullChunk $chunk
	 */
	public function __construct(FullChunk $chunk){
		parent::__construct($chunk->getProvider()->getLevel());
		$this->chunk = $chunk;
	}

	/**
	 * @return FullChunk
	 */
	public function getChunk(){
		return $this->chunk;
	}
}