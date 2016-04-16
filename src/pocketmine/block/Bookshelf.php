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


use pocketmine\item\Tool;

class Bookshelf extends Solid{

	protected $id = self::BOOKSHELF;

	public function __construct(){

	}

	public function getName(){
		return "Bookshelf";
	}

	public function getHardness(){
		return 1.5;
	}

	public function getToolType(){
		return Tool::TYPE_AXE;
	}

}