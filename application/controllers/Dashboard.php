<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    // is_logged_in();
    if (!$this->session->userdata('email')) {
      redirect('auth');
    }
    $this->load->model('Website_model', 'Website');
  }

  public function index()
  {
    $debet = $this->db->select_sum('debet')->get('kas')->row()->debet;
    $kredit = $this->db->select_sum('kredit')->get('kas')->row()->kredit;
    $total_saldo = $debet - $kredit;
    $title = 'Dashboard';
    $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $karyawan = $this->db->get('user')->num_rows();
    $masjid = $this->db->get('masjid')->row_array();
    $data = [
      'title' => $title,
      'user' => $user,
      'karyawan' => $karyawan,
      'masjid' => $masjid,
      'debet' => $debet,
      'kredit' => $kredit,
      'total_saldo' => $total_saldo
    ];

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('dashboard/index', $data);
    $this->load->view('templates/footer');
  }
}
