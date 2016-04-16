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
 * Network-related classes
 */
namespace pocketmine\network;

interface AdvancedSourceInterface extends SourceInterface{

	/**
	 * @param string $address
	 * @param int    $timeout Seconds
	 */
	public function blockAddress($address, $timeout = 300);

	/**
	 * @param Network $network
	 */
	public function setNetwork(Network $network);

	/**
	 * @param string $address
	 * @param int    $port
	 * @param string $payload
	 */
	public function sendRawPacket($address, $port, $payload);

}