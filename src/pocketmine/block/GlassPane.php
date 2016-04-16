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

class GlassPane extends Thin{

	protected $id = self::GLASS_PANE;

	public function __construct(){

	}

	public function getName(){
		return "Glass Pane";
	}

	public function getHardness(){
		return 0.3;
	}

	public function getDrops(Item $item){
		return [];
	}
}