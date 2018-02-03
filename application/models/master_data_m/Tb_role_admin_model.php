<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class Tb_role_admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    /*
     * Get tb_role_admin by kode_role
     */
    function get_tb_role_admin($kode_role)
    {
        return $this->db->get_where('tb_role_admin',array('kode_role'=>$kode_role))->row_array();
    }
    /*
     * Get all tb_role_admin count
     */
    function get_all_tb_role_admin_count()
    {
        $this->db->from('tb_role_admin');
        return $this->db->count_all_results();
    }
    /*
     * Get all tb_role_admin
     */
    function get_all_tb_role_admin($params = array())
    {
        $this->db->order_by('kode_role', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tb_role_admin')->result_array();
    }
    /*
     * function to add new tb_role_admin
     */
    function add_tb_role_admin($params)
    {
        $this->db->insert('tb_role_admin',$params);
        return $this->db->insert_id();
    }
    /*
     * function to update tb_role_admin
     */
    function update_tb_role_admin($kode_role,$params)
    {
        $this->db->where('kode_role',$kode_role);
        return $this->db->update('tb_role_admin',$params);
    }
    /*
     * function to delete tb_role_admin
     */
    function delete_tb_role_admin($kode_role)
    {
        return $this->db->delete('tb_role_admin',array('kode_role'=>$kode_role));
    }
}
