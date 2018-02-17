<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends CI_Controller{
    function __construct(){
		parent::__construct();
		$this->load->model('back-end/M_login');
		$this->load->library(array('form_validation','session'));
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->database();
	}

	function index(){
		//$this->layout->render('back-end/v_login');
		$this->load->view('back-end/v_login');
    }   

	function loginhalaman(){
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run()==FALSE){
			$this->layout->render('back-end/v_login');
		}else{
			$data = array('username' => $this->input->post('username', TRUE),
						  'password' => $this->input->post('password', TRUE));
			$passenkrip = base64_encode($data['password']);	
			$cek = $this->M_login->mloginaksi($data);
			if ($cek->num_rows() == 1) {
				foreach ($cek->result() as $sess) {
					$sess_data['logged_in'] = TRUE; //'Sudah Login'
					$sess_data['username'] = $sess->username;
					$sess_data['kode_role'] = $sess->kode_role;
					$this->session->set_userdata($sess_data);
					//return TRUE;
				}
				if ($this->session->userdata('kode_role')=='adm_pd') {
					redirect('admin/Pendaftaran');
				}
				else if ($this->session->userdata('kode_role')=='akd') {
					redirect('admin/Datamaster');
				}
				elseif ($this->session->userdata('kode_role')=='keu') {
					redirect('admin/Pendaftaran');
				}
			}
			else {
				echo "<script>
						alert('Gagal Login :  Cek username  dan password anda!');
						history.go(-1);
			 		  </script>";
			}
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/Login/loginhalaman');
	}
}
?>