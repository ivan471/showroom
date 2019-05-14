<?php

class model_mobil extends CI_Model {

	public function tampil( $link ){
		$query = $this->db->query("SELECT * from tb_mobil where link='".$link."' ");
		return $query->row_array();

	}
	public function listpencarian($limit, $start ){
	//	$var1 = $this->input->get('var', true);
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
			$query = $this->db->query("SELECT * FROM tb_mobil where nama like '$cari%' limit $start, $limit");
			return $query->result_array();
		}
			//return $this->db->get('tb_mobil', $limit, $start);
	}
	public function total_toyota(){
		$cari = 'Toyota';
		$query = $this->db->query("SELECT count(id) as jmlh FROM tb_mobil where nama like '$cari%'");
		return $query->row_array();
	}
	public function total_honda(){
		$cari = 'Honda';
		$query = $this->db->query("SELECT count(id) as jmlh FROM tb_mobil where nama like '$cari%'");
		return $query->row_array();
	}
	public function total_suzuki(){
		$cari = 'Suzuki';
		$query = $this->db->query("SELECT count(id) as jmlh FROM tb_mobil where nama like '$cari%'");
		return $query->row_array();
	}
	public function total_nissan(){
		$cari = 'Nissan';
		$query = $this->db->query("SELECT count(id) as jmlh FROM tb_mobil where nama like '$cari%'");
		return $query->row_array();
	}
	public function total_mitsubishi(){
		$cari = 'Mitsubishi';
		$query = $this->db->query("SELECT count(id) as jmlh FROM tb_mobil where nama like '$cari%'");
		return $query->row_array();
	}
	public function total_daihatsu(){
		$cari = 'Daihatsu';
		$query = $this->db->query("SELECT count(id) as jmlh FROM tb_mobil where nama like '$cari%'");
		return $query->row_array();
	}
	public function total_mazda(){
		$cari = 'Mazda';
		$query = $this->db->query("SELECT count(id) as jmlh FROM tb_mobil where nama like '$cari%'");
		return $query->row_array();
	}
	public function total_hino(){
		$cari = 'Hino';
		$query = $this->db->query("SELECT count(id) as jmlh FROM tb_mobil where nama like '$cari%'");
		return $query->row_array();
	}
	public function tampilsama( $var1, $var2 ){
		$query = $this->db->query("SELECT * FROM tb_mobil WHERE model='".$var1."' and nama not like '$var2' limit 5");
		return $query->result_array();
	}
	public function terbaru(){
		$query = $this->db->query("SELECT * FROM tb_mobil order by tanggal_input desc limit 10");
		return $query->result_array();
	}
}
