<?php
/*
 *  mmss_error.php -- v0.1.0
 *  Copyright(C)2013 mediamoat.com
 *  contact@mediamoat.com (MediaMoat.com)
 */

class Error implements ErrorInterface {
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

  public function report() {
	}
}
?>
