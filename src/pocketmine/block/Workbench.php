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

namespace pocketmine\block;

use pocketmine\item\Item;
use pocketmine\item\Tool;
use pocketmine\Player;

//TODO: check orientation
class Workbench extends Solid{

	protected $id = self::WORKBENCH;

	public function __construct($meta = 0){
		$this->meta = $meta;
	}

	public function canBeActivated(){
		return \true;
	}

	public function getHardness(){
		return 2.5;
	}

	public function getName(){
		return "Crafting Table";
	}

	public function getToolType(){
		return Tool::TYPE_AXE;
	}

	public function onActivate(Item $item, Player $player = \null){
		if($player instanceof Player){
			$player->craftingType = 1;
		}

		return \true;
	}

	public function getDrops(Item $item){
		return [
			[$this->id, 0, 1],
		];
	}
}