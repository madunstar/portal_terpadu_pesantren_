<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class M_infaq extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function lihatdatasatu($nis)
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran_spp');
        $this->db->join('tb_santri', 'tb_pembayaran_spp.nis_santri = tb_santri.nis_lokal');
        $this->db->where('tb_santri.nis_lokal', $nis);
        return $this->db->get();
    }


      //////////////////////////////////

}
