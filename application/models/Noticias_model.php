<?php
		class Noticias_model extends CI_Model {
		
		public function __construct()
			{
				$this->load->database();
			}

		public function set_noticias($titulo, $texto, $data, $foto)
		{
			$this->db->query("INSERT INTO noticias (titulo, texto, data, foto)values(".$this->db->escape($titulo).",". $this->db->escape($texto).",". $this->db->escape($data).",". $this->db->escape($foto).")");
		}
		public function get_noticiaById($id){
		    $query = $this->db->query("SELECT * FROM noticias WHERE id = '".$id."'");
		    return $query->result_array();
        }
	}
?>
