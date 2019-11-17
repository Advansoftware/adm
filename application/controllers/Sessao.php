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
	public function index($page = 1)
    {
		$this->data['sessoes'] = $this->Sessoes_camara_model->get_sessao($page);
        $this->data['paginacao']['size'] = (!empty($this->data['sessoes']) ? $this->data['sessoes'][0]['Size'] : 0);
        $this->data['paginacao']['pg_atual'] = $page;

		$this->data['lista_categoria'] = $this->Sessoes_camara_model->get_categoria();
		$this->data['controller'] = 'sessao';
		$this->data['title'] = "Sessão";
		$this->inicio();
		$this->load->view('sessao/create_edit');
		$this->load->view('sessao/sessao');
	}
	public function cria_sessao(){
		$numero = $this->input->post('numero');
		$nome = $this->input->post('sessao');
		$data = $this->convert_date($this->input->post('data'), "en");
        $categoria = $this->input->post('categoria');
        $nomearquivo = $numero."_".$categoria."_".$nome;
        //upload file
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['max_size'] = '51200'; //50 MB

        //codigo que tem a função de abrir o conversor

        if(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION) == 'doc'
            || pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION) == 'docx'){
            $config['file_name'] = $nomearquivo.".doc";
            $config['upload_path'] = 'conversor/';
            echo "<script>window.open ('conversor/?caminho=../../camara/content/sessoes/', 'pagina', 'width=350 height=150, status=0 top=100, scrollbars=no, status=no, toolbar=no, location=no, menubar=no, resizable=no,toolbar=0 ');</script>";
        }
        else{
            $config['file_name'] = $nomearquivo.".pdf";
            $config['upload_path'] = '../camara/content/sessoes/';
        }

        //FIM
        if(isset($_FILES['arquivo']['name']))
        {
            if(0 < $_FILES['arquivo']['error'])
            {
                echo 'Erro ao enviar o arquivo';
            }
            else
            {
                if(file_exists("../camara/content/sessoes/".$config['file_name']))
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
                        $arquivo = $nomearquivo.".pdf";
                        echo $arquivo;
                        $this->Sessoes_camara_model->set_sessao($nome,$data,$arquivo,$categoria,$numero);

                        echo " enviado com sucesso.";
                    }
                }
            }
        }
        else {
            echo 'Por Favor escolha um arquivo';
        }
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
