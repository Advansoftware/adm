<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

class Vereadores extends Geral {
	public function __construct()
	{
		parent::__construct();
        /*$this->load->model('Account_model');
		if($this->Account_model->session_is_valid()['status'] != "ok")
            redirect('account/');
        */
		$this->load->model('Vereador_model');
        $this->load->model('Partidos_model');
	}
	public function index(){
        $data['partidos'] = $this->Partidos_model->get_partidos();
        $data['vereador'] = $this->Vereador_model->get_vereadores();
        $this->inicio($data);
        $this->load->view('vereadores/vereadores');
	}
    public function create(){
        $data['partidos'] = $this->Partidos_model->get_partidos();
        //$data['controller'] = 'pedidos';
        $data['title'] = "Criar Vereador";
        $this->inicio($data);
        $this->load->view('vereadores/create');
    }
    public function edit($id){
        $data['partidos'] = $this->Partidos_model->get_partidos();
        $data['vereador'] = $this->Vereador_model->get_vereadorByid($id);
        //$data['controller'] = 'pedidos';
        $data['title'] = "Alterar Vereador";
        $this->inicio($data);
        $this->load->view('vereadores/edit');
    }
	public function altera_vereador(){
		$nome = $this->input->post('nome');
		$email = $this->input->post('email');
		$partido = $this->input->post('partido');
		$id = $this->input->post('id');
        $nomearquivo = strtolower (str_replace(" ", "_", "$nome"));
        //upload file
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['max_size'] = '51200'; //50 MB
        $config['file_name'] = $nomearquivo;
        if(isset($_FILES['arquivo']['name']))
        {
            if(0 < $_FILES['arquivo']['error'])
            {
                echo 'Erro ao enviar o arquivo';
            }
            else
            {
                $config['upload_path'] = '../camara/content/imagens/vereadores/';
                if(file_exists("../camara/content/imagens/vereadores/".$config['file_name']))
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
                        //salva o arquivo no banco de dados em pdf
                        $arquivo = $nomearquivo;
                        echo $arquivo;
                        $this->Vereador_model->set_vereador($id, $nome, $email, $partido, $arquivo);
                        echo "Enviado com sucesso.";
                    }
                }
            }
        }
        else {
            echo 'Por Favor escolha um arquivo';
            $this->Vereador_model->set_vereador($id, $nome, $email, $partido);
        }
    }
    public function desativaVereador($id){
        $this->Vereador_model->desativaVereador($id);
        redirect("/vereadores");
    }
    public function deletaSessao($id){
        $arquivo = str_replace(" ", "_",  $this->Sessoes_camara_model->getArquivoById($id));
        $caminho = "..\camara\content\sessoes\\".$arquivo["arquivo"];
        if(unlink("$caminho")){
            $this->Sessoes_camara_model->delById($id);
            redirect('/sessao');
        }
        else{
            echo "Arquivo Nao Apagado";
        }
    }

}
?>
