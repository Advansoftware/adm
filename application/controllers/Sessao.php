<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

class Sessao extends Geral {
	public function __construct()
	{
		parent::__construct();
        /*$this->load->model('Account_model');
		if($this->Account_model->session_is_valid()['status'] != "ok")
            redirect('account/');
        */
		//$this->load->model('Vereador_model');
		$this->load->model('Sessoes_camara_model');
	}
	public function index(){
		$data['pedidos'] = $this->Sessoes_camara_model->get_sessao();
		$data['lista_categoria'] = $this->Sessoes_camara_model->get_categoria();
		$data['controller'] = 'pedidos';
		$data['title'] = "Pedidos";
		$this->inicio($data);
		$this->load->view('sessao/create_edit');
		$this->load->view('sessao/sessao');
	}
	public function cria_sessao(){
		$numero = $this->input->post('numero');
		$nome = $this->input->post('sessao');
		$data = $this->convert_date($this->input->post('data'), "en");
        $categoria = $this->input->post('categoria');
        $nomearquivo = $numero."_".$categoria."_".$nome.".pdf";
        //upload file
        $config['upload_path'] = '../camara/content/sessoes/';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['file_name'] = $nomearquivo;
        $config['max_size'] = '51200'; //50 MB
        if(isset($_FILES['arquivo']['name']))
        {
            if(0 < $_FILES['arquivo']['error'])
            {
                echo 'Erro ao enviar o arquivo';
            }
            else
            {
                if(file_exists("../camara/content/sessoes/".$nomearquivo))
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
                        $this->Sessoes_camara_model->set_sessao($nome,$data,$arquivo,$categoria,$numero);
                        $get_id_arquivo = $this->Sessoes_camara_model->get_id_arquivo($arquivo);
                        echo "enviado com sucesso.";
                    }
                }
            }
        }
        else {
            echo 'Por Favor escolha um arquivo';
        }
    }

}
?>
