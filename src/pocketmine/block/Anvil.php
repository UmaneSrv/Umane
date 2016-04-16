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

use pocketmine\inventory\AnvilInventory;
use pocketmine\item\Item;
use pocketmine\item\Tool;
use pocketmine\Player;

class Anvil extends Fallable{

	protected $id = self::ANVIL;

	public function isSolid(){
		return \false;
	}

	public function __construct($meta = 0){
		$this->meta = $meta;
	}

	public function canBeActivated(){
		return \true;
	}

	public function getHardness(){
		return 5;
	}

	public function getResistance(){
		return 6000;
	}

	public function getName(){
		return "Anvil";
	}

	public function getToolType(){
		return Tool::TYPE_PICKAXE;
	}

	public function onActivate(Item $item, Player $player = \null){
		if($player instanceof Player){
			if($player->isCreative()){
				return \true;
			}

			$player->addWindow(new AnvilInventory($this));
		}

		return \true;
	}

	public function getDrops(Item $item){
		if($item->isPickaxe() >= Tool::TIER_WOODEN){
			return [
				[$this->id, 0, 1], //TODO break level
			];
		}else{
			return [];
		}
	}
}