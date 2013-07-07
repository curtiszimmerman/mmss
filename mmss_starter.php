<?php
/*
 *  mmss_starter.php -- v0.1.2
 *  Copyright(C)2013 mediamoat.com
 *  contact@mediamoat.com (MediaMoat.com)
 */

class Starter {
	// configuration settings array
	private $_config;
	// is all of our startup data properly initialized?
	private $_configDbInit;
	// file database settings
	private $_fileDbName;
	private $_fileDbTable;
	private $_fileDbType;
	// key generated during installation
	private $_hostWord;
	private $_moduleCore;
	private $_moduleData;
	private $_moduleError;
	private $_moduleHash;
	private $_moduleInstaller;
	private $_moduleInterface;
	private $_phoneHomeUrl;
	
	public function __construct() {
		$this->_config = array();
		$this->_configDbInit = false;
		if($this->_configData('sqlite', 'mmss_config', 'config')) {
			$this->_configDbInit = true;
		} else {
			// error '0001' == Starter::_configData()
			$this->_error('Something went wrong. Please report error 0001 to MediaMoat.');
		}
		// fire away!
		$this->_initialize();
	}
	
	private function _configData($dbType, $dbName, $dbTable) {
		// initialize sqlite3 database connection
		$database = $dbType.':'.$dbName.'_PDO.db';
		try {
			$db = new PDO($database);
			$stmt = $db->prepare('SELECT * FROM :dbTable');
			$stmt->bindValue(':dbTable', $dbTable);
			$result = $stmt->execute();
			foreach($result as $row) {
				$this->_config[row['setting']] = $row['value'];
			}
			$db = NULL;
		} catch(PDOException $e) {
			// uh oh!
			$this->_error($e->getMessage());
		}
		// key generated during installation
		$this->_hostWord = 'abcde';
		$this->_moduleCore = 'mmss_'.$this->_config['hostWord'].'_core.php';
		$this->_moduleData = 'mmss_'.$this->_config['hostWord'].'_data.php';
		$this->_moduleError = 'mmss_'.$this->_config['hostWord'].'_error.php';
		$this->_moduleHash = 'mmss_'.$this->_config['hostWord'].'_hash.php';
		$this->_moduleInstaller = 'mmss_'.$this->_config['hostWord'].'_installer.php';
		$this->_moduleInterface = 'mmss_'.$this->_config['hostWord'].'_interface.php';
		$this->_phoneHomeUrl = $this->_config['hostProto'];
		$this->_phoneHomeUrl .= '://';
		$this->_phoneHomeUrl .= $this->_config['hostName'];
		$this->_phoneHomeUrl .= ':';
		$this->_phoneHomeUrl .= $this->_config['hostPort'];
		$this->_phoneHomeUrl .= '/';
		$this->_phoneHomeUrl .= $this->_config['hostFile'];
		// all of our data is configured for startup, so off we go!
		return true;
	}
	
	private function _error($message) {
		if($this->_configDbInit) {
		} else {
		}
	}
	
	private function _initialize() {
	}
}

$mmss_starter = new Starter();
?>
