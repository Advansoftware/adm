<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

class Pedidos extends Geral {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Vereador_model');
		$this->load->model('Pedidos_model');
	}
	public function index(){
		$data['pedidos'] = $this->Pedidos_model->get_vereador_pedidos();
		$data['lista_vereador'] = $this->Vereador_model->get_vereador();
		$this->inicio($data);
		$this->load->view('pedidos/create_edit');
		$this->load->view('pedidos/pedidos');
		$this->load->view('pedidos/float_button');
	}
	public function cria_pedido(){
		$vereador = $this->input->post('vereador');
		$arquivo = $this->input->post('arquivo');
		$nome = $this->input->post('nome');
		$data = $this->convert_date($this->input->post('data'), "en");
		$this->Pedidos_model->set_pedido($vereador,$arquivo,$nome,$data);
		
	}
}
?>
