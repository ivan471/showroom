<?php

class model_mobil extends CI_Model {

	public function tampil( $id ){
		//$query = $this->db->query("SELECT * FROM tb_mobil WHERE id='".$id."'");
		return $this->db->get_where('tb_mobil',['id'=> $id])->row_array();
	}
	public function listpencarian(){
		return $this->db->get('tb_mobil')->result_array();
	}
}
