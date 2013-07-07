<?php
/*
 *  mmss_installer.php -- v0.1.1
 *  -- my big, fat, geek installer for mediamoat siteseal
 *  Copyright(C)2013 mediamoat.com
 *  contact@mediamoat.com (MediaMoat.com)
 */

class Installer {
	// generate random IDs
	private $_apiKey;
	private $_hostID;
	private $_mainFileName;
	
	public function __contruct() {
		$this->_hostID = $this->_keyGen();
		$this->_installID = $this->_keyGenPlus();
		//fix -- we get this from the fucking (l)user on install
		$this->_apiKey = 0;
	}
	
	public function __destruct() {
	}
	
  /* keyGen - generate random alphanumeric keys
   * $length in blocks of 13 between one and fifty inclusive (default 1)
   * $type is alphanumeric (default -- 0), alpha (1), or numeric (2)
   * -- bonus charset is crazy (3) for request or other high-volume IDs
   */
  public function _keyGen($length=1, $type=0) {
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
        $block .= substr($charset[$type], $rand, 1);
      }
      $key .= $block;
      unset($block);
    }
    return $key;
  }
  
  /* keyGenPlus - generate random client/request key 
   * in format xAAAAAyBBBBBz per RDD design doc for installation key
   * $length in blocks of 13
   */
  private function _keyGenPlus($length) {
		$charset = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $chk_a = 0;
    $chk_b = 0;
    $key = '';
    $rand = 0;
    for($i=0; $i<$length; $i++) {
      $block = '';
      for($j=0; $j<13; $j++) {
        $rand = mt_rand(0,62);
        if($j == 0) { $chk_a = $rand; }
        if($j == 6) { $chk_b = $rand; }
        if($j != 12) { 
          $block .= substr($charset, $rand, 1);
        } else {
          $block .= substr($charset,(($chk_a+$chk_b)%63), 1);
        }
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
  // installs the file tree
  // gives the user option to automatically install the code snippet
  // -- or gives instructions on how to add the snippet
  /* -- <?php include('mmss_abcdef_starter.php');?> */
}

$mmss_installer = new Installer();
?>
