<?php
	class Vereador_model extends CI_Model {
		
		public function __construct()
			{
				$this->load->database();
			}

		    public function get_vereador(){
		      $query = $this->db->query("select * from vereadores v where v.ativo = 1 order by nome asc");
		      return $query->result_array();
		    }  

		public function get_providencia($Ids){
			$query = $this->db->query("SELECT 
				p.nome as nome_pedido, p.data_publicacao, year(p.data_publicacao) as ano, p.arquivo, v.nome as nome_vereador  FROM pedidos p 
 					INNER JOIN vereadores v ON p.Id_candidato = v.id
					WHERE p.Id_candidato = ".$Ids." ORDER by data_postagem DESC");
			return $query->result_array();

		}

		public function get_vereadores($page = false)
		{
			$limit = $page * ITENS_POR_PAGINA;
			$inicio = $limit - ITENS_POR_PAGINA;
			$step = ITENS_POR_PAGINA;

			$pagination = " LIMIT ".$inicio.",".$step;
			if ($page === false) {
				$pagination = "";
			}

		    $query = $this->db->query("
		    	select COUNT(*) OVER() AS Size, id, foto, nome, partido, email, biografia, imagem, partidoNome 
		    	from partidovereador v where v.ativo = 1 ".$pagination."");

		    return $query->result_array();
        }
 		public function get_vereadorByid($id1){
 			$this->db->select("*");
 			$this->db->where("id", $id1);
 			return $this->db->get("partidovereador")->result();
 		}
 		//para os pedidos por vereadores

 		public function get_ano()
        {
            $query = $this->db->query("SELECT YEAR(p.data_publicacao) as ano FROM pedidos p GROUP BY 1 ORDER by 1 desc");
            return $query->result_array();
        }
        public function set_vereador($id, $nome, $email, $partido, $arquivo=null){
            $this->db->set('nome', $nome);
            $this->db->set('email', $email);
            $this->db->set('partido', $partido);
            if (isset($arquivo)) $this->db->set('foto', $arquivo);
            $this->db->where('id', $id);
            $this->db->update('vereadores');
		   }
		   public function set_NewVereador($nome, $email, $partido, $arquivo=null){
			if (isset($arquivo)) {
				$fotos = ", foto";
				$arquivos = ", '$arquivo'";
			}
			else{
				$fotos = '';
				$arquivos = '';
			}
			$this->db->query("insert into vereadores (nome, email, partido$fotos) values ('$nome', '$email', '$partido' $arquivos)"); 

           }
           public function desativaVereador($id){
		    $this->db->query("update vereadores set ativo = 0 where id = $id");
           }
	}

?>