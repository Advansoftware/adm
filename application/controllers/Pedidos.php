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
		$vereador = $this->input->post('vereadores');
		$nome = $this->input->post('nome');
		$data = $this->convert_date($this->input->post('data'), "en");
        $ver = explode(',', $vereador);
        $nomearquivo = str_replace("/", "-", $nome);
        //upload file
        $config['upload_path'] = '../camara/content/pedidos_de_providencia/';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['file_name'] = $vereador."_".$nomearquivo.".pdf";
        $config['max_size'] = '51200'; //50 MB
        if(isset($_FILES['arquivo']['name']))
        {
            if(0 < $_FILES['arquivo']['error'])
            {
                echo 'Erro ao enviar o arquivo';
            }
            else
            {
                if(file_exists("../camara/content/pedidos_de_providencia/".$config['file_name']))
                {
                    echo "Arquivo Ja Existe.";
                }
                else
                {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('arquivo'))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $arquivo = $config['file_name'];
                        echo $arquivo;
                        $this->Pedidos_model->set_pedido("Pedido de Providência: ".$nome,$data,$arquivo);
                        $get_id_arquivo = $this->Pedidos_model->get_id_arquivo($arquivo);
                        foreach ($ver as $vereadores) {
                            $this->Pedidos_model->set_vereador_pedidosByid($vereadores, $get_id_arquivo['id']);
                            echo "enviado com sucesso.";
                        }
                    }
                }
            }
        } else {
            echo 'Por Favor escolha um arquivo';
        }
    }

}
?>
