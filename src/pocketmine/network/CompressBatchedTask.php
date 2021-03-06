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

namespace pocketmine\network;

use pocketmine\scheduler\AsyncTask;
use pocketmine\Server;

class CompressBatchedTask extends AsyncTask{

	public $level = 7;
	public $data;
	public $final;
	public $channel = 0;
	public $targets = [];

	public function __construct($data, array $targets, $level = 7, $channel = 0){
		$this->data = $data;
		$this->targets = $targets;
		$this->level = $level;
		$this->channel = $channel;
	}

	public function onRun(){
		try{
			$this->final = \zlib_encode($this->data, ZLIB_ENCODING_DEFLATE, $this->level);
			$this->data = \null;
		}catch(\Exception $e){

		}
	}

	public function onCompletion(Server $server){
		$server->broadcastPacketsCallback($this->final, $this->targets, $this->channel);
	}
}