<?php
	class model_mobil extends CI_Model {

	public function tampil( $link ){
		$query = $this->db->query("SELECT * from tb_mobil where link='".$link."' ");
		return $query->row_array();
	}
	public function tampilterbaru( $limit, $start ){
			$query = $this->db->query("SELECT * from tb_mobil order by tanggal_input desc limit $start, $limit");
			return $query->result_array();
	}
	public function listpencarian($limit, $start ){
		$link = $this->input->get('data');
		if ($link == "baru") {
			$query = $this->db->query("SELECT * FROM tb_mobil order by tanggal_input desc limit $start, $limit");
			return $query->result_array();
		}elseif ($link == "thn_baru") {
			$query = $this->db->query("SELECT * FROM tb_mobil order by tahun desc limit $start, $limit");
			return $query->result_array();
		}elseif ($link == "thn_lama") {
			$query = $this->db->query("SELECT * FROM tb_mobil order by tahun asc limit $start, $limit");
			return $query->result_array();
		}elseif ($link == "mahal") {
			$query = $this->db->query("SELECT * FROM tb_mobil order by harga desc limit $start, $limit");
			return $query->result_array();
		}elseif ($link == "murah") {
			$query = $this->db->query("SELECT * FROM tb_mobil order by harga asc limit $start, $limit");
			return $query->result_array();
		}elseif ($link == "cari") {
			$set = $this->input->get('nilai');
			$query = $this->db->query("SELECT * FROM tb_mobil where nama like '$set%' limit $start, $limit");
			return $query->result_array();
		}elseif ($link == "nama") {
			$cari = $this->input->post('nilai');
			$query = $this->db->query("SELECT * FROM tb_mobil where nama like '%$cari%' limit $start, $limit");
			return $query->result_array();
		}
		elseif ($link == "harga") {
			$min = $this->input->get('min');
			$max = $this->input->get('max');
			$query = $this->db->query("SELECT * FROM tb_mobil where harga between '$min' and '$max' limit $start, $limit");
			return $query->result_array();
		}
			else{
			$cari = $this->input->get('cari', TRUE);
			$query = $this->db->query("SELECT * FROM tb_mobil where nama like '%$cari%' limit $start, $limit");
			return $query->result_array();
		}
	}
	public function tampilsama( $var1, $var2 ){
		$query = $this->db->query("SELECT * FROM tb_mobil WHERE model='".$var1."' and nama not like '$var2' limit 5");
		return $query->result_array();
	}
	public function terbaru(){
		$query = $this->db->query("SELECT * FROM tb_mobil order by tanggal_input desc limit 5");
		return $query->result_array();
	}
	public function terbaru2(){
		$query = $this->db->query("SELECT * FROM tb_mobil order by tanggal_input desc limit 5,5");
		return $query->result_array();
	}
	public function total($mobil){
		$query = $this->db->query("SELECT count(id) as jmlh FROM tb_mobil where nama like '$mobil%'");
		return $query->row_array();
	}
}
