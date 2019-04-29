<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	//
	public function index()
	{
		$this->load->template( 'halamanutama' );
		//$this->load->view('halamanutama');
	}

	public function detail()
	{
		$this->load->template('detail');
	}
	public function profil()
	{
		$this->load->template('profil');
	}
	public function pencarian()
	{
		$this->load->template('pencarian');
	}
}
