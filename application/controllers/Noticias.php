<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

class Noticias extends Geral {
    public function __construct()
    {
        parent::__construct();
       $this->load->model('Noticias_model');
    }
    public function index(){
        $data["noticias"] = $this->Noticias_model->get_noticias();
        $data['controller'] = 'noticias';
        $data['title'] = "Criar Noticia";
        $this->inicio($data);
        $this->load->view('noticias/noticias');
    }
    public function create(){
        $data['controller'] = 'noticias';
        $data['title'] = "Criar Noticia";
        $this->inicio($data);
        $this->load->view('noticias/create');
        
    }
    public function edit($id = null){
        $data["noticia"] = $this->Noticias_model->get_noticiaById($id);
        $this->inicio($data);
        $data['controller'] = 'noticias';

        $this->load->view('noticias/edit');
        $this->load->view('pedidos/float_button');
    }
    public function insere_noticia(){
       $titulo = $this->input->post('titulo');
       $data = $this->convert_date($this->input->post('data'), "en");
       $texto = $this->input->post('texto');
        $facebook = $this->input->post('facebook');
        $config['upload_path'] = '../camara/content/noticias/destaque';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['file_name'] = $titulo."_".$_FILES['arquivo']['name'];
        $config['max_size'] = '51200'; //50 MB

        if(isset($_FILES['arquivo']['name']))
        {
            if(0 < $_FILES['arquivo']['error'])
            {
                echo 'Erro ao enviar o arquivo';
            }
            else
            {
                if(file_exists("../camara/content/noticias/destaque".$titulo."_".$_FILES['arquivo']['name']))
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
                        $arquivo = $titulo."_".$_FILES['arquivo']['name'];
                        echo $arquivo;
                        $this->Noticias_model->set_noticias($titulo, $texto, $data, $arquivo, $facebook);
                            echo "enviado com sucesso.";
                    }
                }
            }
        } else {
            echo 'Por Favor escolha um arquivo';
        }
    }
}
?>
