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

namespace pocketmine\event\player;

use pocketmine\block\Block;
use pocketmine\item\Item;
use pocketmine\Player;

class PlayerBucketFillEvent extends PlayerBucketEvent{
	public static $handlerList = \null;

	public function __construct(Player $who, Block $blockClicked, $blockFace, Item $bucket, Item $itemInHand){
		parent::__construct($who, $blockClicked, $blockFace, $bucket, $itemInHand);
	}
}