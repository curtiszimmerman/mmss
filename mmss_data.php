<?php
/*
 *  mmss_data.php -- v0.1.0
 *  -- data access engine
 *  Copyright(C)2013 mediamoat.com
 *  contact@mediamoat.com (MediaMoat.com)
 */
 
//
////
//// FIX todo -- this needs to reflect the PDO structure
////
//

class Data extends PDO {
	private $_dbName;
	private $_dbType;
	
	public function __construct() {
		// possible future support for other db types
		$this->_dbType = 'sqlite';
		// we'll load mmss configuration information first
		$this->_dbName = 'config';
	}
	
	public function __destruct() {
	}
	
	public function connect($type='sqlite', $name='config') {
		// initialize sqlite3 database connection
		try {
			$db = new PDO('sqlite:dogsDb_PDO.sqlite');
			$result = $db->query('SELECT * FROM Files');
			foreach($result as $row) {
				$fileList[row['filename']] = $row['filehash'];
			}
			$db = NULL;
		} catch(PDOException $e) {
			// uh oh! spaghetti-ohs!
			print 'FUCKING EXCEPTION, BITCH: '.$e->getMessage();
		}
	}
}
?>
