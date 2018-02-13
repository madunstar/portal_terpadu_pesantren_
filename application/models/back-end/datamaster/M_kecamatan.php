<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class M_kecamatan extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function lihatdata()
    {
        $this->db->select('*');
        $this->db->from('tb_kecamatan');
        $this->db->join('tb_kota_kab', 'tb_kecamatan.id_kota_kab=tb_kota_kab.id_kota_kab');
        $this->db->join('tb_provinsi','tb_kota_kab.id_provinsi=tb_provinsi.id_provinsi');
        return $this->db->get();
    }

    function lihatdatasatu($id_kecamatan)
    {
      $this->db->select('*');
      $this->db->from('tb_kecamatan');
      $this->db->join('tb_kota_kab', 'tb_kecamatan.id_kota_kab=tb_kota_kab.id_kota_kab');
      $this->db->join('tb_provinsi','tb_kota_kab.id_provinsi=tb_provinsi.id_provinsi');
      $this->db->where("id_kecamatan",$id_kecamatan);
      return $this->db->get();
    }

    function dataprovinsi()
    {
        return $this->db->get('tb_provinsi');
    }

    function datakota_kab($id)
    {
      $hasil=$this->db->query("SELECT * FROM tb_kota_kab WHERE id_provinsi='$id'");
  		return $hasil->result();

    }
    function datakotakab($id_provinsi)
    {
      $this->db->where("id_provinsi",$id_provinsi);
      return $this->db->get('tb_kota_kab');

    }
    function cekdata($id_kecamatan)
    {
        $this->db->where("id_kecamatan",$id_kecamatan);
        return $this->db->get('tb_kecamatan')->num_rows();
    }

    function tambahdata($array)
    {
        return $this->db->insert('tb_kecamatan',$array);
    }

    function editdata($id_kecamatan,$array)
    {
        $this->db->where("id_kecamatan",$id_kecamatan);
        return $this->db->update('tb_kecamatan',$array);
    }


    function hapus($id_kecamatan)
    {
        $this->db->where("id_kecamatan",$id_kecamatan);
        return $this->db->delete('tb_kecamatan');
    }
}
