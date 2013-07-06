<?php
/*
 *  mmss_hash.php -- v0.1.0
 *  -- file-hashing engine
 *  Copyright(C)2013 mediamoat.com
 *  contact@mediamoat.com (MediaMoat.com)
 */

class Hash {
	// filelist hash array
	$fileList = array();
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
	
	// run hashing algorithms on filelist
	// compare unsafe hash array to safe hash array
	foreach($fileList as $fileName => $fileHash) {
		// check if file exists
		if() {
			// md5 the file
			$newHash = 0;
			if($newHash == $fileHash) {
			} else {
				$error = true;
				$errorType = 1;
				$errorLevel = 1;
			}
		} else {
			$error = true;
			$errorType = 2;
			$errorLevel = 2;
		}
	}
	
	// check alarm level if-else
	if($error) {
		// phone home about error
		
	} else {
		// hibernate
	}
}

$mmss_hash = new Hash();
?>
