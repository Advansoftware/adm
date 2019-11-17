<?php
class Sessoes_camara_model extends CI_Model
{	
	public function __construct()
	{
		$this->load->database();
	}

	public function get_sessao($page = false)
	{
		$limit = $page * ITENS_POR_PAGINA;
		$inicio = $limit - ITENS_POR_PAGINA;
		$step = ITENS_POR_PAGINA;

		$pagination = " LIMIT ".$inicio.",".$step;
		if ($page === false) {
			$pagination = "";
		}

		$query = $this->db->query("
			select COUNT(*) OVER() AS Size, id, categoria, data, nome, arquivo, sessao
			from sessoes order by sessao asc ".$pagination."");
		return $query->result_array();
	}	

	public function get_ano()
	{
		$query = $this->db->query("SELECT YEAR(p.data) as ano FROM sessoes p GROUP BY 1 ORDER by 1 desc");
		return $query->result_array();
	}

	public function countAll(){
		return $this->db->count_all('sessoes');
	}
	public function get_categoria(){
		$query = $this->db->query("select * from sessao_categoria");
		return $query->result_array();
	}
	public function set_sessao($nome,$datas,$arquivo, $categoria, $numero){
		$data = array(
			'nome' => $nome,
			'data' => $datas,
			'arquivo' => $arquivo,
			'categoria' =>$categoria,
			'sessao' => $numero
		);
		$this->db->insert('sessoes',$data);
	}
	public function delById($id){

		return $this->db->query("DELETE FROM sessoes WHERE sessoes.id = $id");
	}
	public  function getArquivoById($id){

		return $this->db->query("SELECT * FROM sessoes WHERE id = $id")->row_array();

	}
}
?>
