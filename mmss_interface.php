<?php
/*
 *  mmss_interface.php -- v0.1.0
 *  -- declare interfaces for less sadness in dependencies
 *  Copyright(C)2013 mediamoat.com
 *  contact@mediamoat.com (MediaMoat.com)
 */

interface CoreInterface {
}

interface DataInterface {
}

interface ErrorInterface {
  public function report($type, $level, $message);
}

interface HashInterface {
}

interface VoxInterface {
}
