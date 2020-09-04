<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Management extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('Website_model', 'Website');
  }

  public function index()
  {
    $title = 'Laporan KAS';
    $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $kas = $this->db->get('kas')->result_array();
    $debet = $this->db->select_sum('debet')->get('kas')->row()->debet;
    $kredit = $this->db->select_sum('kredit')->get('kas')->row()->kredit;
    $total_saldo = $debet - $kredit;

    $data = [
      'title' => $title,
      'user' => $user,
      'kas' => $kas,
      'total_saldo' => $total_saldo
    ];


    $this->form_validation->set_rules('keterangan', 'Note', 'required|trim');
    $this->form_validation->set_rules('tgl', 'Date', 'required|trim');
    $this->form_validation->set_rules('method', 'Metode', 'required|trim');
    $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim|numeric');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('management/index', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $method = $this->input->post('method');
      if ($method == 'debet') {
        $data = [
          'kd_rek' => 'D' . date("ymd") . rand(),
          'keterangan' => $this->input->post('keterangan'),
          'tgl' => $this->input->post('tgl'),
          'debet' => $this->input->post('jumlah'),
          'kredit' => '-',
        ];
        $this->db->insert('kas', $data);
      } else {
        $data = [
          'kd_rek' => 'K' . date("ymd") . rand(),
          'keterangan' => $this->input->post('keterangan'),
          'tgl' => $this->input->post('tgl'),
          'debet' => '-',
          'kredit' => $this->input->post('jumlah'),
        ];
        $this->db->insert('kas', $data);
      }
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Laporan KAS berhasil ditambahkan!</div>');
      redirect('management');
    }
  }
}
