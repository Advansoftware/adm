<?php
	class Pedidos_model extends CI_Model {
		
		public function __construct()
			{
				$this->load->database();
			}
		public function get_vereador_pedidos(){
			$query = $this->db->query("SELECT p.nome as nome_pedido, p.data_publicacao as data_pedido, v.nome as nome_vereador
				from pedidos p INNER JOIN vereador_pedido vp on p.id = vp.id_pedido
				INNER JOIN vereadores v on v.id = vp.id_vereador order by p.id desc");
			return $query->result_array();
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