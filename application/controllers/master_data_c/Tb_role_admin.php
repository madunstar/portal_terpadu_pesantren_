<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class Tb_role_admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('master_data_m/Tb_role_admin_model');
    }
    /*
     * Listing of tb_role_admin
     */
    function index()
    {
        $data['t_row'] = $this->Tb_role_admin_model->get_all_tb_role_admin_count();
        $data['tb_role_admin'] = $this->Tb_role_admin_model->get_all_tb_role_admin();
        $data['_view'] = 'master_data_v/tb_role_admin_v';
        $this->load->view('layouts/content',$data);
    }
    /*
     * Adding a new tb_role_admin
     */

     public function Tb_role_admin_page()
       {

            // Datatables Variables
            $draw = intval($this->input->get("draw"));
            $start = intval($this->input->get("start"));
            $length = intval($this->input->get("length"));


            $role_admin = $this->Tb_role_admin_model->get_all_tb_role_admin();

            $data = array();

            foreach($role_admin->result() as $r) {

                 $data[] = array(
                      $r->kode_role,
                      $r->nama_role


                 );
            }

            $output = array(
                 "draw" => $draw,
                   "recordsTotal" => $role_admin->num_rows(),
                   "recordsFiltered" => $role_admin->num_rows(),
                   "data" => $data
              );
            echo json_encode($output);
            exit();
       }

   function add()
    {
    $this->load->library('form_validation');
    $post_kode = $this->input->post('kode_role');
		$this->form_validation->set_rules('nama_role','Nama Role','required|max_length[25]');
    $this->form_validation->set_rules('kode_role','Kode Role','required|max_length[25]|callback_cek_duplikasi[' . $post_kode . ']');
    $this->form_validation->set_message('cek_duplikasi',
    ' <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Ooopps!</strong> Kode Role ini Sudah Ada <span class="fa fa-warning"></span>
      </div>
    ');
		if($this->form_validation->run())
        {
            $params = array(
				'nama_role' => $this->input->post('nama_role'),
        'kode_role' => $this->input->post('kode_role'),
            );
            $tb_role_admin_id = $this->Tb_role_admin_model->add_tb_role_admin($params);
            redirect('master_data_c/Tb_role_admin/index');
        }
        else
        {
            $data['_view'] = 'master_data_v/add_role_admin_v';
            $this->load->view('layouts/content',$data);
        }
    }

    function cek_duplikasi($post_kode) {

      return $this->Tb_role_admin_model->cek_duplikat($post_kode);

  }
    /*
     * Editing a tb_role_admin
     */
   function edit($kode_role)
    {
        // check if the tb_role_admin exists before trying to edit it
        $data['tb_role_admin'] = $this->Tb_role_admin_model->get_tb_role_admin($kode_role);
        if(isset($data['tb_role_admin']['kode_role']))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('kode_role','Kode Role','required|max_length[25]');
			      $this->form_validation->set_rules('nama_role','Nama Role','required|max_length[25]');
			if($this->form_validation->run())
            {
                $params = array(
					'nama_role' => $this->input->post('nama_role'),
          'kode_role' => $this->input->post('kode_role'),
                );
                $this->Tb_role_admin_model->update_tb_role_admin($kode_role,$params);
                redirect('master_data_c/Tb_role_admin/index');
            }
            else
            {
                $data['_view'] = 'master_data_v/edit_role_admin_v';
                $this->load->view('layouts/content',$data);
            }
        }
        else
            show_error('The tb_role_admin you are trying to edit does not exist.');
    }
    /*
     * Deleting tb_role_admin
     */
   function remove($kode_role)
    {
        $tb_role_admin = $this->Tb_role_admin_model->get_tb_role_admin($kode_role);
        // check if the tb_role_admin exists before trying to delete it
        if(isset($tb_role_admin['kode_role']))
        {
            $this->Tb_role_admin_model->delete_tb_role_admin($kode_role);
            redirect('master_data_c/tb_role_admin/index');
        }
        else
            show_error('The tb_role_admin you are trying to delete does not exist.');
    }


}
