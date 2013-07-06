<?php
/*
 *  mmss_vox.php -- v0.1.0
 *  Copyright(C)2013 mediamoat.com
 *  contact@mediamoat.com (MediaMoat.com)
 */

class Vox {
	// initialize error variables
	private $_error;
	private $_errorType;
	private $_errorLevel;

	public function __construct() {
		$this->_error = false;
		$this->_errorType = 0;
		$this->_errorLevel = 0;
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
