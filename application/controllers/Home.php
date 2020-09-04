<?php
class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->db->get('masjid')->row_array();
    $this->load->model('Website_model', 'Website');
  }

  public function index()
  {
    $data['masjid'] = $this->db->get('masjid')->row_array();
    $data['program'] = $this->db->get('program')->result_array();
    $data['kajian'] = $this->db->get('kajian')->result_array();
    $data['partner'] = $this->db->get('partner')->result_array();
    $data['donate'] = $this->db->get('donate')->row_array();
    $this->load->view('home/index', $data);
  }

  public function detailkajian($id)
  {
    $data['kajian'] = $this->db->get('kajian')->row_array();
    $data['kajian'] = $this->Website->getKajianById($id);
    $this->load->view('home/detailkajian', $data);
  }

  public function detailprogram($id)
  {
    $data['program'] = $this->db->get('program')->row_array();
    $data['program'] = $this->Website->getProgramById($id);
    $this->load->view('home/detailprogram', $data);
  }
}
