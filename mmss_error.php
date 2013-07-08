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
	private $_errorMessage;

	public function __construct($type, $level, $message) {
		$this->_error = true;
		$this->_errorLevel = $level;
		$this->_errorMessage = $message;
		$this->_errorType = $type;
	}
	
	public function getLevel() {
		return $this->_errorLevel;
	}
	
	public function getMessage() {
		return $this->_errorMessage;
	}

	public function getType() {
		return $this->_errorType;
	}
	
  public function report() {
	}
}
?>
