<?php
/*
 *  mmss_interface.php -- v0.1.0
 *  -- declare interfaces for less sadness in dependencies
 *  Copyright(C)2013 mediamoat.com
 *  contact@mediamoat.com (MediaMoat.com)
 */

interface CoreInterface {
}

interface DataInterface {
}

interface ErrorInterface {
	public function exists();
  public function report();
}

interface HashInterface {
}

interface VoxInterface {
	public function load($name, $port, $proto);
	public function isLoaded();
	public function receive();
	public function send($url);
}
