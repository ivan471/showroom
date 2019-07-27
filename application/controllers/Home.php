<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->library('pagination');
    $this->load->model('model_mobil');
  }
  //
  public function index()
  {
    $this->session->sess_destroy();
    $config['base_url'] = 'http://localhost/showroom/home/index'; //site url
    $config['total_rows'] = $this->db->count_all('tb_mobil'); //total row
    $config['per_page'] = 10;  //show record per halaman
    $config["uri_segment"] = 3;  // uri parameter
    $choice = $config["total_rows"] / $config["per_page"];
    $config["num_links"] = floor($choice);

    $config['first_link']       = 'First';
    $config['last_link']        = 'Last';
    $config['next_link']        = 'Next';
    $config['prev_link']        = 'Prev';
    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul></nav></div>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tagl_close']  = '</span>Next</li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tagl_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tagl_close']  = '</span></li>';
    $this->pagination->initialize($config);
    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model.
    $data['data'] = $this->model_mobil->tampilterbaru($config["per_page"], $data['page']);
    $data['terbaru'] = $this->model_mobil->terbaru();
    $data['terbaru2'] = $this->model_mobil->terbaru2();
    $data['pagination'] = $this->pagination->create_links();
    $this->load->template( 'halamanutama', $data );
    //$this->load->view('halamanutama');
  }
  public function detail( $link )
  {
    $this->session->sess_destroy();
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
    $this->session->sess_destroy();
    $this->load->template('profil');
  }
  public function keunggulan()
  {
    $this->session->sess_destroy();
    $this->load->template('keunggulan');
  }

}
