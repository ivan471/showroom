<?php

class model_mobil extends CI_Model {

	public function tampil( $link ){
		$query = $this->db->query("SELECT * from tb_mobil where link='".$link."' ");
		return $query->row_array();

	}
	public function listpencarian( $limit, $start ){
		return $this->db->get('tb_mobil', $limit, $start);
	}
	public function tampilsama( $var1 ){
		$query = $this->db->query("SELECT * FROM tb_mobil WHERE model='".$var1."' limit 5");
		return $query->result_array();
	}
}
