<?php
	class Executivos_model extends CI_Model {
		
		public function __construct()
		{
			$this->load->database();
		}
		public function get_projetos_executivos($page = false)
		{
			$limit = $page * ITENS_POR_PAGINA;
			$inicio = $limit - ITENS_POR_PAGINA;
			$step = ITENS_POR_PAGINA;

			$pagination = " LIMIT ".$inicio.",".$step;
			if ($page === false) {
				$pagination = "";
			}

			$query = $this->db->query("
				SELECT COUNT(*) OVER() AS Size,
				p.* from projeto_executivo p order by p.id asc 
				".$pagination."
				");

			return $query->result_array();
		}
		//Consulta que retorna quais vereadores estão ligados em cada pedido
		public  function  get_dados_ligados_vereador_pedidosById($id)
		{
		    $query = $this->query("SELECT * FROM vereador_pedido vp INNER JOIN vereadores v on v.id = vp.id_vereador WHERE vp.id_pedido = $id");
        }
		public function set_pedido($nome,$datas,$arquivo){
		    $data = array(
                'nome' => $nome,
                'data_publicacao' => $datas,
                'arquivo' => $arquivo
            );
		    $this->db->insert('pedidos',$data);
		}
		public function get_id_arquivo($arquivo){
        $query = $this->db->query("select id from pedidos where arquivo='".$arquivo."'");
		    return $query->row_array();
        }
        public function set_vereador_pedidosByid($idvereador, $idpedido){
		    $this->db->query("insert into vereador_pedido (id_vereador, id_pedido) values(".$this->db->escape($idvereador).",".$this->db->escape($idpedido).")");
        }


	}
?>