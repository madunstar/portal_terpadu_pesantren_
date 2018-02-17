<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
//session_start();
class Pendaftaran extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('back-end/pendaftaran/M_dashboard');
    $this->load->model('back-end/pendaftaran/M_pengaturan');
    $this->load->library('layout_pendaftaran');
    if ($this->session->userdata('username')=="") {
        redirect('admin/Login/loginhalaman');
    }
    if ($this->session->userdata('kode_role') == 'akd') {
          redirect('admin/Datamaster');
    }
    $this->load->helper('text');
  }

  function index()
  {
      $variabel['username'] = $this->session->userdata('username');
      $variabel['total_tidak_lengkap'] = $this->M_dashboard->get_count_status_tidak_lengkap();
      $variabel['total_diverifikasi'] = $this->M_dashboard->get_count_status_diverifikasi();
      $variabel['total_menunggu'] = $this->M_dashboard->get_count_status_menunggu();
      $variabel['total_pendaftaran'] = $this->M_dashboard->get_count_pendaftaran();
      $this->layout_pendaftaran->render('adminpendaftaran/dashboard',$variabel);
  }

  function pengaturan()
  {
    $variabel['tb_pengaturan_pendaftaran'] = $this->M_pengaturan->get_tb_pengaturan();
    $this->layout_pendaftaran->render('adminpendaftaran/pengaturan',$variabel,'adminpendaftaran/pengaturan_js');
  }

  function edit_pengaturan(){

    $params = array(
      'pendaftaran_aktif' => $this->input->post('aktif'),
      'tahun_ajaran' => $this->input->post('tahun_ajaran'),
    );
    $this->M_pengaturan->update_tb_pengaturan_pendaftran($params);
    $this->session->set_flashdata('response',"
        <div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Selamat!</strong> Pengaturan Berhasil Dirubah <span class='fa fa-check'></span>
        </div>
    ");
    redirect('admin/pendaftaran/pengaturan');
  }

  function logout() {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('kode_role');
    session_destroy();
    redirect('admin/login/loginhalaman');
  }
}
