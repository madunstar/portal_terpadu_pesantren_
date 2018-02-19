<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pendaftaran extends CI_Controller {
function __construct()
{
  parent::__construct();

  $this->load->model('back-end/pendaftaran/m_santri');
  $this->load->model('back-end/pendaftaran/m_pembayaran');
  $this->load->model('back-end/pendaftaran/m_berkas');
  $this->load->model('back-end/pendaftaran/m_akunsantri');
  $this->load->model('back-end/pendaftaran/m_pengumuman');
  $this->load->library('layout_pendaftaran');

}
/**
* Index Page for this controller.
*
* Maps to the following URL
*    http://example.com/index.php/welcome
*  - or -
*    http://example.com/index.php/welcome/index
*  - or -
* Since this controller is set as the default controller in
* config/routes.php, it's displayed at http://example.com/
*
* So any other public methods not prefixed with an underscore will
* map to /index.php/welcome/<method_name>
* @see https://codeigniter.com/user_guide/general/urls.html
*/

//fungtion halaman

function index()
{
    $aktif = $this->m_akunsantri->get_pengaturan();
    if ($aktif == 0) {
      $this->load->view('pendaftarannotfound');
    } else if ($aktif == 1) {
        $this->layout_pendaftaran->renderregister('calonsantri/register');
      }
}

function login()
{
  $aktif = $this->m_akunsantri->get_pengaturan();
  if ($aktif == 0) {
    $this->load->view('pendaftarannotfound');
  } else if ($aktif == 1) {
    $this->layout_pendaftaran->renderregister('calonsantri/login');
  }
}

function dashboard()
{
    $this->layout_pendaftaran->renderfront('calonsantri/dashboard');

}
// Nikman
function datakotakab()
{
  $id=$this->input->post('provinsi');
  $data=$this->m_santri->datakotaajax($id);
  echo json_encode($data);
}

function datakecamatan()
{
  $id=$this->input->post('kecamatan');
  $data=$this->m_santri->datakecamatanajax($id);
  echo json_encode($data);
}

function datadesa()
{
  $id=$this->input->post('desa');
  $data=$this->m_santri->datadesaajax($id);
  echo json_encode($data);
}

function biodata()
{
    // $email = $this->session->userdata("email");
    if ($this->input->post()) {
      $array=array(
          'nis_lokal'=> $this->input->post('nis_lokal'),
          'nisn'=> $this->input->post('nisn'),
          'nik'=> $this->input->post('nik'),
          'nama_lengkap'=>$this->input->post('nama_lengkap'),
          'tempat_lahir'=>$this->input->post('tempat_lahir'),
          'tgl_lahir'=>tanggalawal($this->input->post('tgl_lahir')),
          'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
          'alamat_lengkap'=>$this->input->post('alamat_lengkap'),
          'provinsi'=>$this->input->post('provinsi'),
          'kabupaten_kota'=>$this->input->post('kabupaten_kota'),
          'kecamatan'=>$this->input->post('kecamatan'),
          'desa_kelurahan'=>$this->input->post('desa_kelurahan'),
          'kode_pos'=>$this->input->post('kode_pos'),
          'hobi'=>$this->input->post('hobi'),
          'cita_cita'=>$this->input->post('cita_cita'),
          'jenis_sekolah_asal'=>$this->input->post('jenis_sekolah_asal'),
          'status_sekolah_asal'=>$this->input->post('status_sekolah_asal'),
          'nomor_peserta_ujian'=>$this->input->post('nomor_peserta_ujian'),
          'jarak_ke_sekolah'=>$this->input->post('jarak_ke_sekolah'),
          'alat_transportasi'=>$this->input->post('alat_transportasi'),
          'status_tempat_tinggal'=>$this->input->post('status_tempat_tinggal'),
          'no_kk'=>$this->input->post('no_kk'),
          'nik_ayah'=>$this->input->post('nik_ayah'),
          'nama_lengkap_ayah'=>$this->input->post('nama_lengkap_ayah'),
          'pendidikan_terakhir_ayah'=>$this->input->post('pendidikan_terakhir_ayah'),
          'pekerjaan_ayah'=>$this->input->post('pekerjaan_ayah'),
          'nik_ibu'=>$this->input->post('nik_ibu'),
          'nama_lengkap_ibu'=>$this->input->post('nama_lengkap_ibu'),
          'pendidikan_terakhir_ibu'=>$this->input->post('pendidikan_terakhir_ibu'),
          'pekerjaan_ibu'=>$this->input->post('pekerjaan_ibu'),
          'penghasilan_orang_tua'=>$this->input->post('penghasilan_orang_tua'),
          'nik_wali'=>$this->input->post('nik_wali'),
          'nama_lengkap_wali'=>$this->input->post('nama_lengkap_wali'),
          'pendidikan_terakhir_wali'=>$this->input->post('pendidikan_terakhir_wali'),
          'pekerjaan_wali'=>$this->input->post('pekerjaan_wali'),
          'penghasilan_wali'=>$this->input->post('penghasilan_wali'),
          'jumlah_saudara_kandung'=>$this->input->post('jumlah_saudara_kandung'),
          'hp'=>$this->input->post('hp'),
          'hpayah'=>$this->input->post('hpayah'),
          'hpibu'=>$this->input->post('hpibu'),
          'hpwali'=>$this->input->post('hpwali')
          );
       $email = "1@edd.com";

      $exec = $this->m_santri->editdatasantri($email,$array);

      if ($exec){
        $array2 = array (
          "status_biodata"=>"menunggu"
          );
        $exec2 = $this->m_santri->editakun($email,$array2);
        redirect(base_url("santri/pendaftaran/biodata?msg=1"));
      }

    } else {
      $email = "1@edd.com";
      $exec=$this->m_santri->lihatbiodata($email)->row_array();
      $variabel['data']=$exec;

      $variabel['provinsi']=$this->m_santri->ambilprovinsi();
      $variabel['kabupaten']=$this->m_santri->ambilkabupaten($exec['provinsi']);
      $variabel['kecamatan']=$this->m_santri->ambilkecamatan($exec['kabupaten_kota']);
      $variabel['desa']=$this->m_santri->ambildesa($exec['kecamatan']);

      $variabel['transportasi']=$this->m_santri->ambiltransportasi();
      $variabel['pekerjaan']=$this->m_santri->ambilpekerjaan();
      $variabel['pendidikan']=$this->m_santri->ambilpendidikan();

      $this->layout_pendaftaran->renderfront('calonsantri/v_biodata', $variabel,'calonsantri/v_biodata_js');
    }
}

//berkas dari madan
function berkas(){
  // $email = $this->session->userdata("email");
  $email = "1@edd.com";
  $nama_berkas = $this->input->post('namaberkas');
  if ($this->input->post()) {
    $data=array(
      'nama_berkas'=> $this->input->post('namaberkas'),
      'email_pendaftar' => $email
     );
    $config['upload_path'] = './assets/images/berkas';
    $config['allowed_types'] = 'jpg|png|gif|jpeg|JPG|JPEG';
    $this->load->library('upload', $config);
    if ($this->upload->do_upload("file_berkas"))
    {
      $upload = $this->upload->data();
      $file_berkas = $upload["raw_name"].$upload["file_ext"];
      $data['file_berkas'] = $file_berkas;
      $config2['image_library'] = 'gd2';
      $config2['create_thumb'] = FALSE;
      $config2['maintain_ratio'] = TRUE;
      $config2['width']= 500;
      $config2['height']= 500;
      $config2['source_image'] = "./assets/images/berkas/$file_berkas";
      $this->load->library('image_lib');
      $this->image_lib->clear();
      $this->image_lib->initialize($config2);
      $this->image_lib->resize();

      $query2 = $this->m_berkas->ambilberkas($email);
      $row2 = $query2->row_array();
      $foto1temp = $row2['file_berkas'];
      $path1 ="./assets/images/berkas/".$foto1temp."";
      if(is_file($path1)) {
          unlink($path1); //menghapus gambar di folder produk
      }
    }
    if ($this->m_berkas->cekberkas($email,$nama_berkas)==0){
        $this->m_berkas->addberkas($data);
        $array2 = array (
          "status_berkas"=>"menunggu"
         );
        $exec2 = $this->m_santri->editakun($email,$array2);
        redirect(base_url("santri/pendaftaran/berkas?msg=1"));
    } else{
      $this->m_berkas->editberkas($email,$nama_berkas,$data);
      redirect(base_url("santri/pendaftaran/berkas?msg=2"));
    }

  } else {
    $variabel['datapiagam2']=$this->m_berkas->ambilberkaspiagam2($email)->row_array();
    $variabel['datapiagam1']=$this->m_berkas->ambilberkaspiagam1($email)->row_array();
    $variabel['datakk']=$this->m_berkas->ambilberkaskk($email)->row_array();
  $variabel['datapoto']=$this->m_berkas->ambilberkaspoto($email)->row_array();
  $variabel['dataijazah']=$this->m_berkas->ambilberkasijazah($email)->row_array();
  $this->layout_pendaftaran->renderfront('calonsantri/v_berkas',$variabel);
}
}

//akhir gawian madan

function pembayaran()
{
    // $email = $this->session->userdata("email");
    $email = "1@edd.com";
    if ($this->input->post()) {
      $data=array(
        'besar_pembayaran'=> $this->input->post('besar_pembayaran'),
        'keterangan'=> $this->input->post('keterangan'),
        'tanggal_pembayaran'=> tanggalawal($this->input->post('tanggal_pembayaran'))
       );
      $config['upload_path'] = './assets/images/berkas';
      $config['allowed_types'] = 'jpg|png|gif|jpeg|JPG|JPEG';
      $this->load->library('upload', $config);
      if ($this->upload->do_upload("bukti_pembayaran"))
      {
        $upload = $this->upload->data();
        $bukti_pembayaran = $upload["raw_name"].$upload["file_ext"];
        $data['bukti_pembayaran'] = $bukti_pembayaran;
        $config2['image_library'] = 'gd2';
        $config2['create_thumb'] = FALSE;
        $config2['maintain_ratio'] = TRUE;
        $config2['width']= 500;
        $config2['height']= 500;
        $config2['source_image'] = "./assets/images/berkas/$bukti_pembayaran";
        $this->load->library('image_lib');
        $this->image_lib->clear();
        $this->image_lib->initialize($config2);
        $this->image_lib->resize();

        $query2 = $this->m_pembayaran->ambilpembayaran($email);
        $row2 = $query2->row_array();
        $foto1temp = $row2['bukti_pembayaran'];
        $path1 ="./assets/images/berkas/".$foto1temp."";
        if(is_file($path1)) {
            unlink($path1); //menghapus gambar di folder produk
        }
      }
      $this->m_pembayaran->edit($email,$data);
      $array2 = array (
        "status_pembayaran"=>"menunggu"
       );
      $exec2 = $this->m_santri->editakun($email,$array2);
      redirect(base_url("santri/pendaftaran/pembayaran?msg=1"));
    } else {
    $variabel['data']=$this->m_pembayaran->ambilpembayaran($email)->row_array();
    $this->layout_pendaftaran->renderfront('calonsantri/v_pembayaran',$variabel,'calonsantri/v_pembayaran_js');
    }

}
function pengumuman()
{
  $variabel['data'] = $this->m_pengumuman->lihatpengumuman();
  $this->layout_pendaftaran->renderfront('calonsantri/v_pengumuman',$variabel,'calonsantri/calonsantri_js');
}
// akhir function halaman



// end nikman
//membuat akun santri//
function addakun()
{
  $kata_sandi = $this->input->post('sandi');
  $encrypt_sandi = $this->encrypt->encode($kata_sandi);
  $tahun_ajaran = $this->m_akunsantri->get_tahun_ajaran();
  $tgl_daftar = date('Y-m-d');
  $today = date('Ymd').'0000';
  $cur_row = $this->m_akunsantri->get_count_biodata();
  if($cur_row > 0){
    $last_bio = $this->m_akunsantri->get_last_biodata();
    $next =  $last_bio + 1;

    $id_pendaftar = $today + $next;
  } else {

    $id_pendaftar = $today + 1;
  }
    if ($this->input->post()){
      $array=array(
        'email_pendaftar'=> $this->input->post('email'),
        'kata_sandi'=> $encrypt_sandi,
        'status_pendaftaran'=> ('tidak lengkap'),
        'status_biodata'=> ('tidak lengkap'),
        'status_berkas'=> ('tidak lengkap'),
        'status_pembayaran'=> ('tidak lengkap'),
        'jenis_pendaftaran'=> $this->input->post('tingkat'),
        'tanggal_daftar'=> $tgl_daftar,
        'status_akun'=>('tidak aktif'),
        'tahun_ajaran'=> $tahun_ajaran
      );
      if ($this->m_akunsantri->cekdata($this->input->post('email'))==0) {
        $exec = $this->m_akunsantri->tambahakun($array);
        if ($exec) {
          $email = $this->input->post('email');
          $array_bio = array(
            'id_biodata' => $id_pendaftar,
            'email_pendaftar' => $email
          );
          $array_bayar = array(
            'id_pembayaran' => $id_pendaftar,
            'email_pendaftar' => $email
          );
          $this->m_akunsantri->tambahbio($array_bio);
          $this->m_akunsantri->tambahbayar($array_bayar);
          redirect(base_url("santri/pendaftaran/index?msg=1"));

        }
        else {
          redirect(base_url("santri/pendaftaran/index?msg=0"));
        }

      } else {
        redirect(base_url("santri/pendaftaran/index?msg=0"));
      }
    } else
      redirect(base_url("santri/pendaftaran/index"));
}
//akhir add akun santri

//kartu pendaftaran sementara
function kartupendaftaran(){
  $this->layout_pendaftaran->renderfront('calonsantri/v_kartupendaftaran');
}




}
