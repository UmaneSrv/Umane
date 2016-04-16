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

namespace pocketmine\permission;


interface PermissionRemovedExecutor{

	/**
	 * @param PermissionAttachment $attachment
	 *
	 * @return void
	 */
	public function attachmentRemoved(PermissionAttachment $attachment);
}