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
		$this->load->template( 'halamanutama' );
		//$this->load->view('halamanutama');
	}
  public function detail( $id )
  {
    $data['mobil'] = $this->model_mobil->tampil( $id );
    $this->load->template('detail', $data);
  }
  public function profil()
	{
		$this->load->template('profil');
	}
	public function pencarian()
	{
    $data['search']=$this->model_mobil->listpencarian();
		$this->load->template('pencarian' , $data);
	}
}
