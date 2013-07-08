<?php
/*
 *  mmss_vox.php -- v0.1.0
 *  -- communication module ("phone home")
 *  Copyright(C)2013 mediamoat.com
 *  contact@mediamoat.com (MediaMoat.com)
 */

class Vox {
	// initialize error variables
	private $_hostName;
	private $_hostPort;
	private $_hostProto;
	private $_isLoaded;

//fix -- change this to api.mediamoat.com for production
	public function __construct() {
		$this->_isLoaded = false;
	}
	
	public function load($proto, $hostname, $port) {
		$this->_hostProto = $proto;
		$this->_hostName = $hostname;
		$this->_hostPort = $port;
		$this->_isLoaded = true;
	}
	
	public function isLoaded() {
		return $this->_isLoaded;
	}
	
	public function receive() {
		return null;
	}
	
	public function send($data) {
		return true;
	}
}

$mmss_vox = new Vox();
?>
