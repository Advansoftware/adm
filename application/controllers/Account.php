<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

class Account extends Geral {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Account_model");
    }
    public function index(){
        if($this->Account_model->session_is_valid()['status'] == "ok")
            redirect('pedidos/');
        $this->load->view('account/login', $this->data);
    }
    /*!
    *	RESPONSÁVEL POR APAGAR TODAS AS SESSÕES ATIVAS NO COMPUTADOR DO CLIENTE.
    */
    public function logout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['token']);
        redirect("account/");
    }
    /*!
    *	REPONSÁVEL POR REALIZAR TODAS AS VALIDAÇÕES DO LOGIN.
    */
    public function validar()
    {
        $email = $this->input->post('email');
        $senha = $this->input->post('password');

        $login = $this->Account_model->valida_login($email);
        $data['title'] = 'Login';


        if($this->Account_model->session_is_valid()['status'] == "ok")//verifica se ja existe uma sessao, caso sim apenas ira recarregar a pagina
            $login = 'valido';
        else if($login['rows'] > 0 && $this->valida_data_hashing($login['senha'], $senha) == TRUE)
        {
            $this->set_sessao($login);
            $login = 'valido';
        }
        else
            $login = "Usuário e/ou senha inválidos.";
        $arr = array('response' => $login);
        header('Content-Type: application/json');
        echo json_encode($arr);
    }
    /*!
    *	RESPONSÁVEL POR CRIAR TODAS AS SESSÕES DO LOGIN.
    *
    *	$Usuario -> Objeto Usuário, este se refere ao usuário que está realizando seu login.
    *	$conecatdo -> Flag que pega o status do campo Manter conectado na View de login.
    */
    public function set_sessao($Usuario)
    {
        $login = array(
            'id'  => $Usuario['id'],
            'token'  => $Usuario['senha']
        );
        $this->session->set_userdata($login);
    }
}
?>
