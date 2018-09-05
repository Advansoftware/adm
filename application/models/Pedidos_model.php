<?php
	class Pedidos_model extends CI_Model {
		
		public function __construct()
			{
				$this->load->database();
			}
		public function get_vereador_pedidos(){
			$query = $this->db->query("SELECT p.nome as nome_pedido, p.data_publicacao as data_pedido, v.nome as nome_vereador
				from pedidos p INNER JOIN vereador_pedido vp on p.id = vp.id_pedido
				INNER JOIN vereadores v on v.id = vp.id_vereador order by p.id desc limit 10");
			return $query->result_array();
		}/*
		public function set_pedido($vereadores,$arquivo,$nome,$data){
			$data = Array(

			);
			foreach ($vereadores as $vereador) {

				$this->db->insert('',$data)
			}
		}*/
	}
?>