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

//fix -- change this to api.mediamoat.com for production
	public function __construct($name='localhost', $port=80, $proto='http') {
		$this->_hostName = $name;
		$this->_hostPort = $port;
		$this->_hostProto = $proto;
	}
	
	public function receive() {
		return null;
	}
	
	public function send() {
		return null;
	}
	
	// check alarm level if-else
	if($error) {
		// phone home about error
		
	} else {
		// hibernate
	}
}

$mmss_vox = new Vox();
?>
