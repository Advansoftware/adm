<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

class Home extends Geral {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("climatempo");
	}
	public function index(){
		$this->inicio();
	}

}
?>
