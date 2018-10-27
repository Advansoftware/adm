<?php
	class Geral extends CI_Controller 
	{
		protected $data;
		// Include Composer autoloader if not already done.
		

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url_helper');
			$this->load->helper('url');
			$this->load->helper('html');
			$this->load->helper('form');
			$this->load->helper('file');
			$this->load->library('session');
			$this->load->helper('cookie');
			$this->data['url'] = base_url();
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
		public function inicio($dados=null){
			$this->load->view('template/head', $dados);
			$this->load->view('template/menu');
		}
	}
?>
