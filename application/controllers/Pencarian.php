<?php
class Pencarian extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->library('pagination');
    $this->load->model('model_mobil');
  }
  public function cari()
  {
    //$config['base_url'] = site_url('pencarian'); //site url
    $config['base_url'] = 'http://localhost/showroom/pencarian/cari'; //site url
    $config['total_rows'] = $this->db->count_all('tb_mobil'); //total row
    $config['per_page'] = 3;  //show record per halaman
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
    $data['data'] = $this->model_mobil->listpencarian($config["per_page"], $data['page']);
    $mobil = array("Toyota","Honda","Suzuki","Nissan","Mitsubishi","Daihatsu","Mazda","Hino");
    $data['jmlhlist1'] = $this->model_mobil->total($mobil[0]);
    $data['jmlhlist2'] = $this->model_mobil->total($mobil[1]);
    $data['jmlhlist3'] = $this->model_mobil->total($mobil[2]);
    $data['jmlhlist4'] = $this->model_mobil->total($mobil[3]);
    $data['jmlhlist5'] = $this->model_mobil->total($mobil[4]);
    $data['jmlhlist6'] = $this->model_mobil->total($mobil[5]);
    $data['jmlhlist7'] = $this->model_mobil->total($mobil[6]);
    $data['jmlhlist8'] = $this->model_mobil->total($mobil[7]);

    $data['pagination'] = $this->pagination->create_links();
    $this->load->template('pencarian' , $data);
  }


}
