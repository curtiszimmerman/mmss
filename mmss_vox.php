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

	public function __construct() {
		$this->_hostName = 'localhost';
		$this->_hostPort = 80;
		$this->_hostProto = 'http';
	}
	
	public function exists() {
		return $this->_error;
	}

  public function setError($type=0, $level=0) {
	}
	
	// check alarm level if-else
	if($error) {
		// phone home about error
		
	} else {
		// hibernate
	}
}

$vox = new Vox();
?>
