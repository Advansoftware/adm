<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 09/10/2018
 * Time: 02:08
 */

class Account_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    /*!
    *	RESPONSÁVEL POR VALIDAR SE O USUÁRIO E A SENHA É UMA CONTA VÁLIDA PARA PERMITIR ACESSO AO SISTEMA.
    *
    *	$email -> E-mail de usuário.
    */
    public function valida_login($email)
    {
        $query = $this->db->query("
				SELECT u.id, u.senha, u.nome AS nome_usuario, u.email   
				FROM usuario u  
				WHERE email = ".$this->db->escape($email)."");

        $data = $query->row_array();
        $data['rows'] =  $query->num_rows();
        return $data;
    }
    /*!
    *	RESPONSÁVEL POR VERIFICAR SE EXISTE COOKIE OU SESSÃO, VALIDAR ESSES DADOS NO BANCO E RETORNAR OS DADOS DA SESSÃO OU DO COOKIE SE
    *	OS MESMO FOREM VÁLIDOS.
    */
    public function session_is_valid()
    {
        $id = "";
        $token = "";

        //verificar se existe uma sessao ou cookie
        if(!empty($this->session->id))
        {
            if(!empty($this->session->token))
            {
                $id = $this->session->id;
                $token = $this->session->token;
            }
        }
        else if(!empty($this->input->cookie('id')))
        {
            if(!empty($this->input->cookie('token')))
            {
                $id = $this->input->cookie('id');
                $token = $this->input->cookie('token');
            }
        }

        $sessao = "";

        if($id != "")
        {
            $query = $this->db->query("
					SELECT u.id, u.senha  
						FROM usuario u 
					WHERE u.id = ".$this->db->escape($id)." AND 
					u.senha = ".$this->db->escape($token)."");

            if($query->num_rows() > 0)
            {
                $sessao = array(
                    'status' => 'ok',
                    'id' => $query->row_array()['Id'],
                    'token' => $query->row_array()['Valor']
                );
                return $sessao;
            }
            $sessao = array(
                'status' => 'invalido',
                'id' => '0',
                'token' => '0'
            );
            return $sessao;
        }

        $sessao = array(
            'status' => 'inexistente',
            'id' => '0',
            'token' => '0'
        );
        return $sessao;
    }
}
?>