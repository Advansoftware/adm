<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

class Partidos extends Geral
{
    public function __construct()
    {
        parent::__construct();
        /*$this->load->model('Account_model');
		if($this->Account_model->session_is_valid()['status'] != "ok")
            redirect('account/');
        */
        $this->load->model('Partidos_model');
    }

    public function index()
    {
        $data['partidos'] = $this->Partidos_model->get_partidos();
        $data['title'] = "Partidos";
        $this->inicio($data);
        $this->load->view('partido/create_edit');
        $this->load->view('partido/partidos');
    }
    public  function  createPartido()
    {
        $nome = $this->input->post('nome');
        //upload file
        $config['upload_path'] = '../camara/content/imagens/partidos/';
        $config['allowed_types'] = '*';
        $config['file_name'] = $nome.'.'.pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
        $config['max_filename'] = '255';
        $config['max_size'] = '51200'; //50 MB
        if(isset($_FILES['arquivo']['name']))
        {
        if(0 < $_FILES['arquivo']['error'])
        {
            echo 'Erro ao enviar o arquivo';
        }
        else
        {
            if(file_exists("../camara/content/imagens/partidos/".$config['file_name']))
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
                        $this->Partidos_model->set_partidos($nome,$arquivo);
                        echo "enviado com sucesso.";
                    }
                }
            }
        }
        else {
            echo 'Por Favor escolha um arquivo';
        }
    }
    public function deletaPartido($id){
        $arquivo = $this->Partidos_model->getArquivoById($id);
        $caminho = "..\camara\content\imagens\partidos\\".$arquivo["arquivo"];
        if(unlink("$caminho")){
            $this->Partidos_model->delById($id);
            redirect('/partidos');
        }
        else{
            echo "Arquivo Nao Apagado";
        }
    }
}
?>
