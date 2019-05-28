<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed'); 
require_once APPPATH."/libraries/Phpexcel/PHPExcel.php"; 
//$this->load->library('Phpexcel/PHPExcel.php');
class Excel extends PHPExcel {
 public function __construct() {
    parent::__construct();
 }
}