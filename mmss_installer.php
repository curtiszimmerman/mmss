<?php
/*
 *  mmss_installer.php -- v0.1.0
 *  Copyright(C)2013 mediamoat.com
 *  contact@mediamoat.com (MediaMoat.com)
 */

class Installer {
	// generate random IDs
	public $hostID;
	public $apiKey;
	public $mainFileName;
	
	public function __contruct() {
		$this->hostID = $this->keyGen();
		//fix -- we get this from the fucking (l)user on install
		$this->apiKey = 0;
	}
	
	public function __destruct() {
	}
	
  /* keyGen - generate random alphanumeric keys
   * $length in blocks of 13 between one and fifty inclusive (default 1)
   * $type is alphanumeric (default -- 0), alpha (1), or numeric (2)
   * -- bonus charset is crazy (3) for request or other high-volume IDs
   */
  public function keyGen($length=1, $type=0) {
		// necessary? no. good practice? you bet.
		if(($length < 1) || ($length > 50)) {
			$length = 1;
		}
		if(($type < 0) || ($type > 3)) {
			$type = 0;
		}
		$charset = array(
			'abcdefghijklmnopqrstuvwxyz0123456789',
			'abcdefghijklmnopqrstuvwxyz',
			'0123456789',
			'ABCDEFGHJIKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789_');
    $key = '';
    $rand = 0;
    for($i=0; $i<$length; $i++) {
      $block = '';
      for($j=0; $j<13; $j++) {
        $rand = mt_rand(0,62);
        $block .= substr($this->_charset, $rand, 1);
      }
      $key .= $block;
      unset($block);
    }
    return $key;
  }
  
  ////
  ////
  //  contains ALL necesary shit to write out files to disk on install
  ////
  ////
  //todo/should-do
  // installation page
  //// requires registration at mediamoat.com
  //// input email address / API key
  //// TESTS user setup (sorta PHP makefile) to determine if runnable
  // generates host ID, host "word"
  // 
}

$mmss_installer = new Installer();
?>
