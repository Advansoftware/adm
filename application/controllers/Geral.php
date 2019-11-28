<?php
const URLCAMARA = "http://localhost/git/camara";
	class Geral extends CI_Controller 
	{
		protected $data;
		// Include Composer autoloader if not already done.
		

		public function __construct()
		{
			parent::__construct();
			define("ITENS_POR_PAGINA", 10);
			$this->load->model('Account_model');
			$this->load->helper('url_helper');
			$this->load->helper('url');
			$this->load->helper('html');
			$this->load->helper('form');
			$this->load->helper('file');
			$this->load->library('session');
			$this->load->helper('cookie');
			$this->data['url'] = base_url();
			$this->data['paginacao']['url'] = base_url();
			$this->data['paginacao']['itens_por_pagina'] = ITENS_POR_PAGINA;
		}
		/*!
		*	RESPONSÁVEL POR CONVERTER UMA DATA DE UM FORMATO PARA OUTRO.
		*
		*	$data -> Data que se deseja converter.
		*	$region -> Indica a região para se saber para qual formato converter.
		*/
		public function convert_date($data, $region)
		{
			$dataTemp = "";
			if(!empty($data) && $region == "en")
			{
				$dataTemp = str_replace("/", "-", $data);

				$dataTemp = explode("-", $dataTemp);

				$dataTemp = $dataTemp[2]."-".$dataTemp[1]."-".$dataTemp[0];
			}
			else if(!empty($data) && $region == "pt")
			{
				$dataTemp = str_replace("-", "/", $data);

				$dataTemp = explode("/", $dataTemp);

				$dataTemp = $dataTemp[2]."/".$dataTemp[1]."/".$dataTemp[0];	
			}
			return $dataTemp;
		}
		public function inicio()
		{
			$this->load->view('template/head', $this->data);
			$this->load->view('template/menu');
		}
        public function hashing($data)
        {
            return password_hash($data, PASSWORD_DEFAULT);
        }
        /*!
        *	RESPONSÁVEL POR VALIDAR SE UMA STRING CORRESPONDE A UMA HASH.
        *
        *	$hash -> Contém a hash.
        *	$data -> Contém uma string que será verificada se corresponde a hash informada.
        */
        public function valida_data_hashing($hash, $data)
        {
            if (password_verify($data, $hash))
                return 1;
            else
                return 0;
        }
	}
?>
