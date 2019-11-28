<?php
	class Partidos_model extends CI_Model {
		
		public function __construct()
        {
            $this->load->database();
        }
        public function get_partidos($page = false)
        {
            $limit = $page * ITENS_POR_PAGINA;
            $inicio = $limit - ITENS_POR_PAGINA;
            $step = ITENS_POR_PAGINA;

            $pagination = " LIMIT ".$inicio.",".$step;
            if ($page === false) {
                $pagination = "";
            }

            $query = $this->db->query("
                SELECT COUNT(*) OVER() AS Size, id, nome, imagem
                from partidos
                ".$pagination."
            ");

            return $query->result_array();
        }
        public  function  set_partidos($nome,$imagem)
        {
		    $this->db->query("INSERT INTO partidos (nome,imagem) VALUES ({$this->db->escape($nome)},{$this->db->escape($imagem)})");
        }
        public function delById($id){

            return $this->db->query("DELETE FROM partidos WHERE partidos.id = $id");
        }
        public  function getArquivoById($id){

            return $this->db->query("SELECT * FROM partidos WHERE id = $id")->row_array();

        }
	}

?>