<?php
		class Noticias_model extends CI_Model {
		
		public function __construct()
			{
				$this->load->database();
			}

		public function get_noticias($limite = null, $offset = null)
		{
			if($limite){
				$this->db->limit($limite, $offset);
			}
			$this->db->select('*');
			$this->db->order_by("data", "desc");
			return $this->db->get('noticias')->result();
		}	
		public function countAll(){
			return $this->db->count_all('noticias');
		}
	}
?>
