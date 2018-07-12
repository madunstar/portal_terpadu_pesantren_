<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class M_presensipondwati extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    /*
     * Get tb_role_admin by kode_role
     */

    function lihatdata()
    {
        $this->db->from("tb_presensi_pondokan_p");
        $this->db->join("tb_guru","tb_guru.nip_guru=tb_presensi_pondokan_p.nip_guru");
        $this->db->join("tb_kelas","tb_kelas.kd_kelas=tb_presensi_pondokan_p.kd_kelas");
        $this->db->join("tb_tahun_ajaran","tb_tahun_ajaran.id_tahun=tb_presensi_pondokan_p.id_tahun");
        return $this->db->get();
    }

    function lihatdatasatulengkap($id_kelas_belajar)
    {
        $this->db->from("tb_presensi_pondokan_p");
        $this->db->join("tb_guru","tb_guru.nip_guru=tb_presensi_pondokan_p.nip_guru");
        $this->db->join("tb_kelas","tb_kelas.kd_kelas=tb_presensi_pondokan_p.kd_kelas");
        $this->db->join("tb_tahun_ajaran","tb_tahun_ajaran.id_tahun=tb_presensi_pondokan_p.id_tahun");
        $this->db->where("tb_presensi_pondokan_p.id_kelas_belajar",$id_kelas_belajar);
        return $this->db->get();
    }

    function lihatdatasatu($id_kelas_belajar)
    {
        $this->db->where("id_kelas_belajar",$id_kelas_belajar);
        return $this->db->get('tb_presensi_pondokan_p');
    }

    function cekdata($nip)
    {
        $this->db->where("nip_guru",$nip);
        return $this->db->get('tb_guru')->num_rows();
    }

    function tambahdata($array)
    {
        return $this->db->insert('tb_presensi_pondokan_p',$array);
    }

    function editdata($id,$array)
    {
        $this->db->where("id_kelas_belajar",$id);
        return $this->db->update('tb_presensi_pondokan_p',$array);
    }
    function hapus($id)
    {
        $this->db->where("id_kelas_belajar",$id);
        return $this->db->delete('tb_presensi_pondokan_p');
    }
   /////////////////////////////////////////

   function lihatdatasantri($id_kelas_belajar)
   {
        $this->db->from("tb_pondokan_santri_p");
        $this->db->join("tb_santriwati","tb_santriwati.nis_lokal=tb_pondokan_santri_p.nis_lokal");
        $this->db->where("tb_pondokan_santri_p.id_kelas_belajar",$id_kelas_belajar);
        return $this->db->get();
   }

   function lissantri($id_kelas_belajar)
   {
        $exec = $this->lihatdatasatu($id_kelas_belajar)->row_array();
        $id_tahun = $exec['id_tahun'];
        $pondokan = $exec['pondokan'];
        return $this->db->query("SELECT * FROM tb_santriwati WHERE NOT EXISTS (SELECT * FROM tb_pondokan_santri_p inner join tb_presensi_pondokan_p on tb_pondokan_santri_p.id_kelas_belajar = tb_presensi_pondokan_p.id_kelas_belajar  WHERE tb_santriwati.nis_lokal=tb_pondokan_santri_p.nis_lokal and tb_presensi_pondokan_p.id_tahun='$id_tahun') AND tb_santriwati.pondokan='$pondokan' ");
   }

   function tambahdatasantri($array)
   {
       return $this->db->insert('tb_pondokan_santri_p',$array);
   }

   function lihatdatasatusantri($id_kelas_santri)
   {
        $this->db->from("tb_pondokan_santri_p");
        $this->db->join("tb_santriwati","tb_santriwati.nis_lokal=tb_pondokan_santri_p.nis_lokal");
        $this->db->where("tb_pondokan_santri_p.id_kelas_santri",$id_kelas_santri);
        return $this->db->get();
   }


   function cekdataberkas($id_berkas)
    {
        $this->db->where("id_berkas",$id_berkas);
        return $this->db->get('tb_berkas_guru')->num_rows();
    }

    function editdatasantri($id_kelas_santri,$array)
    {
        $this->db->where("id_kelas_santri",$id_kelas_santri);
        return $this->db->update('tb_pondokan_santri_p',$array);
    }
    function hapussantri($id_kelas_santri)
    {
        $this->db->where("id_kelas_santri",$id_kelas_santri);
        return $this->db->delete('tb_pondokan_santri_p');
    }

    ///////////////////////////////////////////////////////
    function lihatdatajadwal($id_kelas_belajar,$hari)
    {
        $this->db->from("tb_presensi_jadwal_p");
        $this->db->where("id_kelas_belajar",$id_kelas_belajar);
        $this->db->where("hari",$hari);
        $this->db->order_by("jam","asc");
        return $this->db->get();
    }

    function lihatjadwal($id_kelas_belajar)
    {
        $this->db->from("tb_presensi_jadwal_p");
        $this->db->where("id_kelas_belajar",$id_kelas_belajar);
        $this->db->where("id_mata_pelajaran !=",'Istirahat');
        $this->db->group_by('id_mata_pelajaran');
        return $this->db->get();
    }

    function tambahdatajadwal($array)
   {
       return $this->db->insert('tb_presensi_jadwal_p',$array);
   }

   function hapusjadwal($id_jadwal)
    {
        $this->db->where("id_jadwal",$id_jadwal);
        return $this->db->delete('tb_presensi_jadwal_p');
    }

    function lihatdatasatujadwal($id_jadwal)
    {
         $this->db->from("tb_presensi_jadwal_p");
         $this->db->where("id_jadwal",$id_jadwal);
         return $this->db->get();
    }

    function editdatajadwal($id_jadwal,$array)
    {
        $this->db->where("id_jadwal",$id_jadwal);
        return $this->db->update('tb_presensi_jadwal_p',$array);
    }

    public function lihatdataajax()
    {
        $requestData= $_REQUEST;
        $columns = array(
            // datatable column index  => database column name
                0=>'tahun_ajaran',
                1=>'nama_kelas_belajar',
                2=> 'nama_kelas',
                3=> 'nama_lengkap',
                3=> 'pondokan',
                3=> 'tingkat'
        );
        $sql = "SELECT * ";
        $sql.=" FROM tb_presensi_pondokan_p inner join tb_guru on tb_guru.nip_guru=tb_presensi_pondokan_p.nip_guru
                inner join tb_kelas on tb_kelas.kd_kelas=tb_presensi_pondokan_p.kd_kelas
                inner join tb_tahun_ajaran on tb_tahun_ajaran.id_tahun=tb_presensi_pondokan_p.id_tahun
        WHERE 1=1 ";
        $query=$this->db->query($sql);
        $totalData = $query->num_rows();
        $totalFiltered = $totalData;
        if( !empty($requestData['search']['value']) ) {
            $sql.= " AND ( tahun_ajaran LIKE '%".$requestData['search']['value']."%' ";
            $sql.=" OR nama_kelas_belajar LIKE '%".$requestData['search']['value']."%'  ";
            $sql.=" OR nama_kelas LIKE '%".$requestData['search']['value']."%'  ";
            $sql.=" OR nama_lengkap LIKE '%".$requestData['search']['value']."%'  ";
            $sql.=" OR pondokan LIKE '%".$requestData['search']['value']."%'  ";
            $sql.=" OR tingkat LIKE '%".$requestData['search']['value']."%' ) ";
        }
        $query=$this->db->query($sql);
        $totalFiltered = $query->num_rows();
        $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']." LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
        $query=$this->db->query($sql);
        $data = array();
        $no=1;
        foreach($query->result_array() as $row) {  // preparing an array
            $nestedData=array();

            $akd = " <a href='".base_url('admin/datamaster/lihatkelaspondwati?id='.$row['id_kelas_belajar'].'')."' class='btn btn-primary btn-xs' title='Lihat'><i class='fa fa-eye'></i></a>
            <a href='".base_url('admin/datamaster/editkelaspondwati?id='.$row['id_kelas_belajar'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
            <a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['id_kelas_belajar']."'><i class='fa fa-trash-o'></i></a>
            <a href='".base_url('admin/datamaster/printkelaspondwati?id='.$row['id_kelas_belajar'].'')."' class='btn btn-success btn-xs print' title='print' id='".$row['id_kelas_belajar']."'><i class='fa fa-print'></i></a>";
            $nestedData[] = $akd;
            $nestedData[] = $row['tahun_ajaran'];
            $nestedData[] = $row["nama_kelas_belajar"];
            $nestedData[] = $row["nama_kelas"];
            $nestedData[] = $row['nama_lengkap'];
            $nestedData[] = $row['pondokan'];
            $nestedData[] = $row['tingkat'];
            $nestedData[] = "<a href='".base_url('admin/datamaster/jadwalpondwati?id='.$row['id_kelas_belajar'].'')."' class='btn btn-primary btn-xs' title='Lihat'><i class='fa fa-clock-o'></i> Jadwal</a>";
            $nestedData[] = "<button class='btn ".($row['status_kelas']=="Aktif"?"btn-success":"btn-warning")." btn-xs edit'  title='Edit' id='".$row['id_kelas_belajar']."' data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-edit'></i> ".$row['status_kelas']."</button>";
            $nestedData[] = "<a href='".base_url('admin/datamaster/lihatkelaspondokansantriwati?id='.$row['id_kelas_belajar'].'')."' class='btn btn-primary btn-xs' title='Lihat'><i class='fa fa-list'></i> Santri</a>";
            $data[] = $nestedData;
            $no++;
        }
        $json_data = array(
            "draw"            => intval( $requestData['draw'] ),
            "recordsTotal"    => intval( $totalData ),
            "recordsFiltered" => intval( $totalFiltered ),
            "data"            => $data
            );

        echo json_encode($json_data);
    }

}
