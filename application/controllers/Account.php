<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

class Account extends Geral {
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->load->view('account/login');
    }

}
?>
