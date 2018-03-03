<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Perizinan extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('back-end/pendaftaran/m_dashboard');
    $this->load->model('back-end/pendaftaran/m_pengaturan');
    $this->load->model('back-end/pendaftaran/m_pendaftaran');
    $this->load->model('back-end/pendaftaran/m_pembayaran');
    $this->load->model('back-end/pendaftaran/m_pengumuman');
    $this->load->model('back-end/pendaftaran/m_berkas');
    $this->load->library('layout_pendaftaran');
    if ($this->session->userdata('nama_akun')=="") {
        redirect('admin/login/loginhalaman');
    }
    if ($this->session->userdata('kode_role_admin') != 'adm_prz') {
        redirect('admin/pendaftaran');
    }
    $this->load->helper('text');
  }

  function index()
  {
      $variabel = '';
      $this->layout->renderizin('back-end/perizinan/dashboard',$variabel);
  }

  function keluarpondok()
  {
      $variabel = '';
      $this->layout->renderizin('back-end/perizinan/keluarpondok',$variabel);
  }
}
?>