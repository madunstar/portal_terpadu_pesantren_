<?php
class dt_pkj extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('master_data_m/dt_pkj_m');
    }
    /*
    * Fungsi mengurutkan data
    */
    function index(){
        $data['t_row'] = $this->dt_pkj_m->get_all_dt_count();
        $data['tb_pekerjaan'] = $this->dt_pkj_m->get_all_dt();
        $data['_view'] = 'master_data_v/dt_pkj_v';
        $this->load->view('layouts/content',$data);
    }
    /*
    * Fungsi page?
    */
    public function page(){
	    // Datatables Variables
	    $draw = intval($this->input->get("draw"));
	    $start = intval($this->input->get("start"));
	    $length = intval($this->input->get("length"));

	    $dt_pkj = $this->dt_pkj_m->get_all_dt();

	    $data = array();

	    foreach($dt_pkj->result() as $r){
	        $data[] = array(
	              $r->kd_pkj,
	              $r->nama_pkj
	        );
	    }

	    $output = array(
	        "draw" => $draw,
	        "recordsTotal" => $dt_pkj->num_rows(),
	        "recordsFiltered" => $dt_pkj->num_rows(),
	        "data" => $data
	    );
	    echo json_encode($output);
	    exit();
    }
    /*
    * Fungsi menambah (add)
    */
    function add(){
        $this->load->library('form_validation');
		$this->form_validation->set_rules('kd_pkj','Kode Pekerjaan','required|max_length[2]');
    	$this->form_validation->set_rules('nama_pkj','Nama Pekerjaan','required|max_length[20]');
		if($this->form_validation->run()){
            $params = array(
				'kd_pkj' => $this->input->post('kd_pkj'),
        		'nama_pkj' => $this->input->post('nama_pkj'),
            );
            $dt_pkj_id = $this->dt_pkj_m->add_dt($params);
            redirect('master_data_c/dt_pkj/index');
        }
        else
        {
            $data['_view'] = 'master_data_v/add_dt_pkj_v';
            $this->load->view('layouts/content',$data);
        }
    }
    /*
    * Fungsi mengubah (edit)
    */
    function edit($kd_pkj)
    {
        //Memeriksa apakah data ada sebelum diubah
        $data['tb_pekerjaan'] = $this->dt_pkj_m->get_dt($kd_pkj);
        if(isset($data['tb_pekerjaan']['kd_pkj'])){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('kd_pkj','Kode Pekerjaan','required|max_length[2]');
			$this->form_validation->set_rules('nama_pkj','Nama Pekerjaan','required|max_length[20]');
			if($this->form_validation->run()){
                $params = array(
				'kd_pkj' => $this->input->post('kd_pkj'),
				'nama_pkj' => $this->input->post('nama_pkj'),
                );
                $this->dt_pkj_m->update_dt($kd_pkj,$params);
                redirect('master_data_c/dt_pkj/index');
            }
            else{
                $data['_view'] = 'master_data_v/edit_dt_pkj_v';
                $this->load->view('layouts/content',$data);
            }
        }
        else
            show_error('The "Data Pekerjaan" you are trying to edit does not exist !');
    }
    /*
    * Fungsi Menghapus
    */
   function delete($kd_pkj){
        $dt_pkj = $this->dt_pkj_m->get_dt($kd_pkj);
        //Memeriksa apakah data ada sebelum dihapus
        if(isset($dt_pkj['kd_pkj'])){
            $this->dt_pkj_m->delete_dt($kd_pkj);
            redirect('master_data_c/dt_pkj/index');
        }
        else
            show_error('The "Data Pekerjaan" you are trying to delete does not exist.');
    }

    function modal_dt_pkj(){
      $this->load->view('layouts/modal_lockme.php');
    }
}