<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('model_mobil');
  }
	//
	public function index()
	{
    $data['terbaru'] = $this->model_mobil->terbaru();
		$this->load->template( 'halamanutama', $data );
		//$this->load->view('halamanutama');
	}
  public function detail( $link )
  {
    $data_link =$this->model_mobil->tampil( $link );
    $query = $this->db->query("SELECT * from tb_mobil where link='".$link."' ");
    $row = $query->row();
    $var1 = $row->model;
    $var2 = $row->nama;
    $data_link2 =$this->model_mobil->tampilsama( $var1, $var2 );
    $data['mobil'] = $data_link;
    $data['model'] = $data_link2;
    $this->load->template('detail', $data);
  }
  public function profil()
	{
		$this->load->template('profil');
	}

}
