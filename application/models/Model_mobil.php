<?php

class model_mobil extends CI_Model {

	public function tampil( $link ){
		$query = $this->db->query("SELECT * from tb_mobil where link='".$link."' ");
		return $query->row_array();

	}
	public function listpencarian($limit, $start ){
		$cari = $this->input->GET('cari', TRUE);
		$query = $this->db->query("SELECT * FROM tb_mobil where nama like '%$cari%' limit $start, $limit");
		return $query->result_array();
			//return $this->db->get('tb_mobil', $limit, $start);
	}
	public function tampilsama( $var1 ){
		$query = $this->db->query("SELECT * FROM tb_mobil WHERE model='".$var1."' limit 5");
		return $query->result_array();
	}
	public function terbaru(){
		$query = $this->db->query("SELECT * FROM tb_mobil order by tanggal_input desc limit 10");
		return $query->result_array();
	}
}
