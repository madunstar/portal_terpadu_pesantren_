<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class Datamaster extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('back-end/datamaster/m_santri');
        $this->load->model('back-end/datamaster/m_guru');
        $this->load->model('back-end/datamaster/m_staff');
        $this->load->model('back-end/datamaster/m_provinsi');
        $this->load->model('back-end/datamaster/m_kota_kab');
        $this->load->library('layout');
    }


    function index()
    {
        $this->layout->render('back-end/datamaster/dashboard');
    }

    // CRUD Santri
    function santri()
    {
        $variabel['data'] = $this->m_santri->lihatdata();
        $this->layout->render('back-end/datamaster/santri/v_santri',$variabel,'back-end/datamaster/santri/v_santri_js');
    }

    function santrilihat()
    {
        $nis = $this->input->get("nis");
        $exec = $this->m_santri->lihatdatasatu($nis);
        if ($exec->num_rows()>0){
            $variabel['data'] = $exec ->row_array();
            $this->layout->render('back-end/datamaster/santri/v_santri_lihat',$variabel,'back-end/datamaster/santri/v_santri_js');
        } else {
            redirect(base_url("admin/datamaster/santri"));
        }

    }

    function santritambah()
    {
        if ($this->input->post()){

                $array=array(
                    'nis_lokal'=> $this->input->post('nis_lokal'),
                    'email_santri'=> $this->input->post('email_santri'),
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
            if ($this->m_santri->cekdata($this->input->post('nis_lokal'))==0) {
                $exec = $this->m_santri->tambahdata($array);
                if ($exec) redirect(base_url("admin/datamaster/santritambah?msg=1"));
                else redirect(base_url("admin/datamaster/santritambah?msg=0"));
            } else {
                $variabel['nis_lokal'] =$this->input->post('nis_lokal');
                $this->layout->render('back-end/datamaster/santri/v_santri_tambah',$variabel,'back-end/datamaster/santri/v_santri_js');
            }

        } else {
            $variabel ='';
            $this->layout->render('back-end/datamaster/santri/v_santri_tambah',$variabel,'back-end/datamaster/santri/v_santri_js');
        }
    }

    function santriedit()
    {
        if ($this->input->post()) {
            $array=array(
                'nis_lokal'=> $this->input->post('nis_lokal'),
                'email_santri'=> $this->input->post('email_santri'),
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
            $nis2 = $this->input->post("nis_lokal2");
            $nis = $this->input->post("nis_lokal");
            if (($this->m_santri->cekdata($nis)>0) && ($nis2!=$nis)) {
                $variabel['nis_lokal'] =$this->input->post('nis_lokal');
                $variabel['nis_lokal2'] =$this->input->post('nis_lokal2');
                $variabel['data'] = $array;
                $this->layout->render('back-end/datamaster/santri/v_santri_edit',$variabel,'back-end/datamaster/santri/v_santri_js');
            } else {
                $exec = $this->m_santri->editdata($nis2,$array);
                if ($exec){
                  redirect(base_url("admin/datamaster/santriedit?nis=".$nis."&msg=1"));
                }
            }
      } else {
            $nis = $this->input->get("nis");
            $exec = $this->m_santri->lihatdatasatu($nis);
            if ($exec->num_rows()>0){
                $variabel['data'] = $exec ->row_array();
                $this->layout->render('back-end/datamaster/santri/v_santri_edit',$variabel,'back-end/datamaster/santri/v_santri_js');
            } else {
                redirect(base_url("admin/datamaster/santri"));
            }
      }

    }

    function santrihapus()
    {
       $nis = $this->input->get("nis");
       $exec = $this->m_santri->hapus($nis);
       redirect(base_url()."admin/datamaster/santri?msg=1");
    }

    function santriberkas()
    {
        $nis = $this->input->get("nis");
        $exec = $this->m_santri->lihatdatasatu($nis);
        if ($exec->num_rows()>0){
            $variabel['santri'] = $exec->row_array();
            $variabel['data'] = $this->m_santri->lihatdataberkas($nis);
            $this->layout->render('back-end/datamaster/santri/v_santriberkas',$variabel,'back-end/datamaster/santri/v_santriberkas_js');
        } else {
            redirect(base_url("admin/datamaster/santri"));
        }

    }

    function santritambahberkas()
    {
        $nis = $this->input->get("nis");
        $exec = $this->m_santri->lihatdatasatu($nis);
        if ($exec->num_rows()>0){
            $variabel['santri'] = $exec->row_array();
            if ($this->input->post()){
                $config['upload_path'] = './assets/berkas/berkassantri';
                $config['allowed_types'] = 'jpg|png|gif|jpeg|JPG|JPEG|doc|docx|xls|xlsx|ppt|pptx|pdf|DOC|DOCX';
                $this->load->library('upload', $config);
                $this->upload->do_upload("file_berkas");
                $upload = $this->upload->data();
                $file_berkas = $upload["raw_name"].$upload["file_ext"];

                $nis_lokal = $this->input->post('nis_lokal');
                $nama_berkas = $this->input->post('nama_berkas');
                $array=array(
                    'nis_lokal'=>  $nis_lokal,
                    'nama_berkas'=> $nama_berkas,
                    'file_berkas' => $file_berkas
                    );

                $exec = $this->m_santri->tambahdataberkas($array);
                if ($exec) redirect(base_url("admin/datamaster/santritambahberkas?nis=".$nis_lokal."&msg=1"));
                else redirect(base_url("admin/datamaster/santriberkastambah?nis=".$nis_lokal."&msg=0"));
            } else {

                $this->layout->render('back-end/datamaster/santri/v_santriberkas_tambah',$variabel,'back-end/datamaster/santri/v_santriberkas_js');
            }
        } else {
            redirect(base_url("admin/datamaster/santri"));
        }
    }

    function santrihapusberkas()
    {
        $id_berkas = $this->input->get("id_berkas");
        $nis = $this->input->get("nis");

        $query2 = $this->m_santri->lihatdatasatuberkas($id_berkas);
        $row2 = $query2->row();
        $berkas1temp = $row2->file_berkas;
        $path1 ="./assets/berkas/berkassantri/".$berkas1temp."";
        if(is_file($path1)) {
            unlink($path1);
        }

        $exec = $this->m_santri->hapusberkas($id_berkas);
        redirect(base_url()."admin/datamaster/santriberkas?msg=1&nis=".$nis."");
    }

    function santrieditberkas()
    {
        if ($this->input->post()) {
            $id_berkas = $this->input->post('id_berkas');
            $nama_berkas = $this->input->post('nama_berkas');
            $nis_lokal = $this->input->post('nis_lokal');
            $array=array(
                'nama_berkas'=> $nama_berkas
                );

            $config['upload_path'] = './assets/berkas/berkassantri';
            $config['allowed_types'] = 'jpg|png|gif|jpeg|JPG|JPEG|doc|docx|xls|xlsx|ppt|pptx|pdf|DOC|DOCX';
            $this->load->library('upload', $config);
            if ( $this->upload->do_upload("file_berkas"))
            {
                $upload = $this->upload->data();
                $file_berkas = $upload["raw_name"].$upload["file_ext"];
                $array['file_berkas']=$file_berkas;

                $query2 = $this->m_santri->lihatdatasatuberkas($id_berkas);
                $row2 = $query2->row();
                $berkas1temp = $row2->file_berkas;
                $path1 ="./assets/berkas/berkassantri/".$berkas1temp."";
                if(is_file($path1)) {
                    unlink($path1); //menghapus gambar di folder produk
                }
            }
            $exec = $this->m_santri->editdataaberkas($id_berkas,$array);
            if ($exec) redirect(base_url("admin/datamaster/santrieditberkas?id=".$id_berkas."&nis=".$nis_lokal."&msg=1"));
            else redirect(base_url("admin/datamaster/santrieditberkas?id=".$id_berkas."&nis=".$nis_lokal."&msg=0"));

        } else {
            $nis = $this->input->get("nis");
            $id = $this->input->get("id");
            $exec = $this->m_santri->lihatdatasatu($nis);
            if ($exec->num_rows()>0){
                $variabel['santri'] = $exec ->row_array();
                $exec2 = $this->m_santri->lihatdatasatuberkas($id);
                if ($exec2->num_rows()>0){

                    $variabel['data'] = $exec2->row_array();
                    $this->layout->render('back-end/datamaster/santri/v_santriberkas_edit',$variabel,'back-end/datamaster/santri/v_santriberkas_js');
                } else {
                    redirect(base_url("admin/datamaster/santriberkas?nis=$nis"));
                }
            } else {
                redirect(base_url("admin/datamaster/santri"));
            }
        }

    }

    // End CRUD Santri

    // CRUD Guru
    function guru()
    {
        $variabel['data'] = $this->m_guru->lihatdata();
        $this->layout->render('back-end/datamaster/guru/v_guru',$variabel,'back-end/datamaster/guru/v_guru_js');
    }

    function gurulihat()
    {
        $nip = $this->input->get("nip");
        $exec = $this->m_guru->lihatdatasatu($nip);
        if ($exec->num_rows()>0){
            $variabel['data'] = $exec ->row_array();
            $this->layout->render('back-end/datamaster/guru/v_guru_lihat',$variabel,'back-end/datamaster/guru/v_guru_js');
        } else {
            redirect(base_url("admin/datamaster/guru"));
        }

    }

    function gurutambah()
    {
        if ($this->input->post()){

                $array=array(
                    'nip_guru'=> $this->input->post('nip_guru'),
                    'email_guru'=> $this->input->post('email_guru'),
                    'hp_guru'=> $this->input->post('hp_guru'),
                    'nama_lengkap'=>$this->input->post('nama_lengkap'),
                    'tempat_lahir'=>$this->input->post('tempat_lahir'),
                    'tgl_lahir'=>tanggalawal($this->input->post('tgl_lahir')),
                    'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
                    'alamat_lengkap'=>$this->input->post('alamat_lengkap'),
                    'provinsi'=>$this->input->post('provinsi'),
                    'kabupaten_kota'=>$this->input->post('kabupaten_kota'),
                    'kecamatan'=>$this->input->post('kecamatan'),
                    'desa_kelurahan'=>$this->input->post('desa_kelurahan'),
                    'kode_pos'=>$this->input->post('kode_pos')
                    );
            if ($this->m_guru->cekdata($this->input->post('nip_guru'))==0) {
                $exec = $this->m_guru->tambahdata($array);
                if ($exec) redirect(base_url("admin/datamaster/gurutambah?msg=1"));
                else redirect(base_url("admin/datamaster/gurutambah?msg=0"));
            } else {
                $variabel['nip_guru'] =$this->input->post('nip_guru');
                $this->layout->render('back-end/datamaster/guru/v_guru_tambah',$variabel,'back-end/datamaster/guru/v_guru_js');
            }

        } else {
            $variabel ='';
            $this->layout->render('back-end/datamaster/guru/v_guru_tambah',$variabel,'back-end/datamaster/guru/v_guru_js');
        }
    }

    function guruedit()
    {
        if ($this->input->post()) {
            $array=array(
                'nip_guru'=> $this->input->post('nip_guru'),
                'email_guru'=> $this->input->post('email_guru'),
                'hp_guru'=> $this->input->post('hp_guru'),
                'nama_lengkap'=>$this->input->post('nama_lengkap'),
                'tempat_lahir'=>$this->input->post('tempat_lahir'),
                'tgl_lahir'=>tanggalawal($this->input->post('tgl_lahir')),
                'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
                'alamat_lengkap'=>$this->input->post('alamat_lengkap'),
                'provinsi'=>$this->input->post('provinsi'),
                'kabupaten_kota'=>$this->input->post('kabupaten_kota'),
                'kecamatan'=>$this->input->post('kecamatan'),
                'desa_kelurahan'=>$this->input->post('desa_kelurahan'),
                'kode_pos'=>$this->input->post('kode_pos')
                );
            $nip2 = $this->input->post("nip_guru2");
            $nip = $this->input->post("nip_guru");
            if (($this->m_guru->cekdata($nip)>0) && ($nip2!=$nip)) {
                $variabel['nip_guru'] =$this->input->post('nip_guru');
                $variabel['nip_guru2'] =$this->input->post('nip_guru2');
                $variabel['data'] = $array;
                $this->layout->render('back-end/datamaster/guru/v_guru_edit',$variabel,'back-end/datamaster/guru/v_guru_js');
            } else {
                $exec = $this->m_guru->editdata($nip2,$array);
                if ($exec){
                  redirect(base_url("admin/datamaster/guruedit?nip=".$nip."&msg=1"));
                }
            }
      } else {
            $nip = $this->input->get("nip");
            $exec = $this->m_guru->lihatdatasatu($nip);
            if ($exec->num_rows()>0){
                $variabel['data'] = $exec ->row_array();
                $this->layout->render('back-end/datamaster/guru/v_guru_edit',$variabel,'back-end/datamaster/guru/v_guru_js');
            } else {
                redirect(base_url("admin/datamaster/guru"));
            }
      }

    }

    function guruhapus()
    {
       $nip = $this->input->get("nip");
       $exec = $this->m_guru->hapus($nip);
       redirect(base_url()."admin/datamaster/guru?msg=1");
    }

    function guruberkas()
    {
        $nip = $this->input->get("nip");
        $exec = $this->m_guru->lihatdatasatu($nip);
        if ($exec->num_rows()>0){
            $variabel['guru'] = $exec->row_array();
            $variabel['data'] = $this->m_guru->lihatdataberkas($nip);
            $this->layout->render('back-end/datamaster/guru/v_guruberkas',$variabel,'back-end/datamaster/guru/v_guruberkas_js');
        } else {
            redirect(base_url("admin/datamaster/guru"));
        }

    }

    function gurutambahberkas()
    {
        $nip = $this->input->get("nip");
        $exec = $this->m_guru->lihatdatasatu($nip);
        if ($exec->num_rows()>0){
            $variabel['guru'] = $exec->row_array();
            if ($this->input->post()){
                $config['upload_path'] = './assets/berkas/berkasguru';
                $config['allowed_types'] = 'jpg|png|gif|jpeg|JPG|JPEG|doc|docx|xls|xlsx|ppt|pptx|pdf|DOC|DOCX';
                $this->load->library('upload', $config);
                $this->upload->do_upload("file_berkas");
                $upload = $this->upload->data();
                $file_berkas = $upload["raw_name"].$upload["file_ext"];

                $nip_guru = $this->input->post('nip_guru');
                $nama_berkas = $this->input->post('nama_berkas');
                $array=array(
                    'nip_guru'=>  $nip_guru,
                    'nama_berkas'=> $nama_berkas,
                    'file_berkas' => $file_berkas
                    );

                $exec = $this->m_guru->tambahdataberkas($array);
                if ($exec) redirect(base_url("admin/datamaster/gurutambahberkas?nip=".$nip_guru."&msg=1"));
                else redirect(base_url("admin/datamaster/guruberkastambah?nip=".$nip_guru."&msg=0"));
            } else {

                $this->layout->render('back-end/datamaster/guru/v_guruberkas_tambah',$variabel,'back-end/datamaster/guru/v_guruberkas_js');
            }
        } else {
            redirect(base_url("admin/datamaster/guru"));
        }
    }

    function guruhapusberkas()
    {
        $id_berkas = $this->input->get("id_berkas");
        $nip = $this->input->get("nip");

        $query2 = $this->m_guru->lihatdatasatuberkas($id_berkas);
        $row2 = $query2->row();
        $berkas1temp = $row2->file_berkas;
        $path1 ="./assets/berkas/berkasguru/".$berkas1temp."";
        if(is_file($path1)) {
            unlink($path1);
        }

        $exec = $this->m_guru->hapusberkas($id_berkas);
        redirect(base_url()."admin/datamaster/guruberkas?msg=1&nip=".$nip."");
    }

    function gurueditberkas()
    {
        if ($this->input->post()) {
            $id_berkas = $this->input->post('id_berkas');
            $nama_berkas = $this->input->post('nama_berkas');
            $nip_guru = $this->input->post('nip_guru');
            $array=array(
                'nama_berkas'=> $nama_berkas
                );

            $config['upload_path'] = './assets/berkas/berkasguru';
            $config['allowed_types'] = 'jpg|png|gif|jpeg|JPG|JPEG|doc|docx|xls|xlsx|ppt|pptx|pdf|DOC|DOCX';
            $this->load->library('upload', $config);
            if ( $this->upload->do_upload("file_berkas"))
            {
                $upload = $this->upload->data();
                $file_berkas = $upload["raw_name"].$upload["file_ext"];
                $array['file_berkas']=$file_berkas;

                $query2 = $this->m_guru->lihatdatasatuberkas($id_berkas);
                $row2 = $query2->row();
                $berkas1temp = $row2->file_berkas;
                $path1 ="./assets/berkas/berkasguru/".$berkas1temp."";
                if(is_file($path1)) {
                    unlink($path1); //menghapus gambar di folder produk
                }
            }
            $exec = $this->m_guru->editdataaberkas($id_berkas,$array);
            if ($exec) redirect(base_url("admin/datamaster/gurueditberkas?id=".$id_berkas."&nip=".$nip_guru."&msg=1"));
            else redirect(base_url("admin/datamaster/gurueditberkas?id=".$id_berkas."&nip=".$nip_guru."&msg=0"));

        } else {
            $nip = $this->input->get("nip");
            $id = $this->input->get("id");
            $exec = $this->m_guru->lihatdatasatu($nip);
            if ($exec->num_rows()>0){
                $variabel['guru'] = $exec ->row_array();
                $exec2 = $this->m_guru->lihatdatasatuberkas($id);
                if ($exec2->num_rows()>0){

                    $variabel['data'] = $exec2->row_array();
                    $this->layout->render('back-end/datamaster/guru/v_guruberkas_edit',$variabel,'back-end/datamaster/guru/v_guruberkas_js');
                } else {
                    redirect(base_url("admin/datamaster/guruberkas?nip=$nip"));
                }
            } else {
                redirect(base_url("admin/datamaster/guru"));
            }
        }

    }

    // End CRUD Guru


    // CRUD Staff
    function staff()
    {
        $variabel['data'] = $this->m_staff->lihatdata();
        $this->layout->render('back-end/datamaster/staff/v_staff',$variabel,'back-end/datamaster/staff/v_staff_js');
    }

    function stafflihat()
    {
        $nip = $this->input->get("nip");
        $exec = $this->m_staff->lihatdatasatu($nip);
        if ($exec->num_rows()>0){
            $variabel['data'] = $exec ->row_array();
            $this->layout->render('back-end/datamaster/staff/v_staff_lihat',$variabel,'back-end/datamaster/staff/v_staff_js');
        } else {
            redirect(base_url("admin/datamaster/staff"));
        }

    }

    function stafftambah()
    {
        if ($this->input->post()){

                $array=array(
                    'nip_staff'=> $this->input->post('nip_staff'),
                    'email_staff'=> $this->input->post('email_staff'),
                    'hp_staff'=> $this->input->post('hp_staff'),
                    'nama_lengkap'=>$this->input->post('nama_lengkap'),
                    'tempat_lahir'=>$this->input->post('tempat_lahir'),
                    'tgl_lahir'=>tanggalawal($this->input->post('tgl_lahir')),
                    'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
                    'alamat_lengkap'=>$this->input->post('alamat_lengkap'),
                    'provinsi'=>$this->input->post('provinsi'),
                    'kabupaten_kota'=>$this->input->post('kabupaten_kota'),
                    'kecamatan'=>$this->input->post('kecamatan'),
                    'desa_kelurahan'=>$this->input->post('desa_kelurahan'),
                    'kode_pos'=>$this->input->post('kode_pos')
                    );
            if ($this->m_staff->cekdata($this->input->post('nip_staff'))==0) {
                $exec = $this->m_staff->tambahdata($array);
                if ($exec) redirect(base_url("admin/datamaster/stafftambah?msg=1"));
                else redirect(base_url("admin/datamaster/stafftambah?msg=0"));
            } else {
                $variabel['nip_staff'] =$this->input->post('nip_staff');
                $this->layout->render('back-end/datamaster/staff/v_staff_tambah',$variabel,'back-end/datamaster/staff/v_staff_js');
            }

        } else {
            $variabel ='';
            $this->layout->render('back-end/datamaster/staff/v_staff_tambah',$variabel,'back-end/datamaster/staff/v_staff_js');
        }
    }

    function staffedit()
    {
        if ($this->input->post()) {
            $array=array(
                'nip_staff'=> $this->input->post('nip_staff'),
                'email_staff'=> $this->input->post('email_staff'),
                'hp_staff'=> $this->input->post('hp_staff'),
                'nama_lengkap'=>$this->input->post('nama_lengkap'),
                'tempat_lahir'=>$this->input->post('tempat_lahir'),
                'tgl_lahir'=>tanggalawal($this->input->post('tgl_lahir')),
                'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
                'alamat_lengkap'=>$this->input->post('alamat_lengkap'),
                'provinsi'=>$this->input->post('provinsi'),
                'kabupaten_kota'=>$this->input->post('kabupaten_kota'),
                'kecamatan'=>$this->input->post('kecamatan'),
                'desa_kelurahan'=>$this->input->post('desa_kelurahan'),
                'kode_pos'=>$this->input->post('kode_pos')
                );
            $nip2 = $this->input->post("nip_staff2");
            $nip = $this->input->post("nip_staff");
            if (($this->m_staff->cekdata($nip)>0) && ($nip2!=$nip)) {
                $variabel['nip_staff'] =$this->input->post('nip_staff');
                $variabel['nip_staff2'] =$this->input->post('nip_staff2');
                $variabel['data'] = $array;
                $this->layout->render('back-end/datamaster/staff/v_staff_edit',$variabel,'back-end/datamaster/staff/v_staff_js');
            } else {
                $exec = $this->m_staff->editdata($nip2,$array);
                if ($exec){
                  redirect(base_url("admin/datamaster/staffedit?nip=".$nip."&msg=1"));
                }
            }
      } else {
            $nip = $this->input->get("nip");
            $exec = $this->m_staff->lihatdatasatu($nip);
            if ($exec->num_rows()>0){
                $variabel['data'] = $exec ->row_array();
                $this->layout->render('back-end/datamaster/staff/v_staff_edit',$variabel,'back-end/datamaster/staff/v_staff_js');
            } else {
                redirect(base_url("admin/datamaster/staff"));
            }
      }

    }

    function staffhapus()
    {
       $nip = $this->input->get("nip");
       $exec = $this->m_staff->hapus($nip);
       redirect(base_url()."admin/datamaster/staff?msg=1");
    }

    function staffberkas()
    {
        $nip = $this->input->get("nip");
        $exec = $this->m_staff->lihatdatasatu($nip);
        if ($exec->num_rows()>0){
            $variabel['staff'] = $exec->row_array();
            $variabel['data'] = $this->m_staff->lihatdataberkas($nip);
            $this->layout->render('back-end/datamaster/staff/v_staffberkas',$variabel,'back-end/datamaster/staff/v_staffberkas_js');
        } else {
            redirect(base_url("admin/datamaster/staff"));
        }

    }

    function stafftambahberkas()
    {
        $nip = $this->input->get("nip");
        $exec = $this->m_staff->lihatdatasatu($nip);
        if ($exec->num_rows()>0){
            $variabel['staff'] = $exec->row_array();
            if ($this->input->post()){
                $config['upload_path'] = './assets/berkas/berkasstaff';
                $config['allowed_types'] = 'jpg|png|gif|jpeg|JPG|JPEG|doc|docx|xls|xlsx|ppt|pptx|pdf|DOC|DOCX';
                $this->load->library('upload', $config);
                $this->upload->do_upload("file_berkas");
                $upload = $this->upload->data();
                $file_berkas = $upload["raw_name"].$upload["file_ext"];

                $nip_staff = $this->input->post('nip_staff');
                $nama_berkas = $this->input->post('nama_berkas');
                $array=array(
                    'nip_staff'=>  $nip_staff,
                    'nama_berkas'=> $nama_berkas,
                    'file_berkas' => $file_berkas
                    );

                $exec = $this->m_staff->tambahdataberkas($array);
                if ($exec) redirect(base_url("admin/datamaster/stafftambahberkas?nip=".$nip_staff."&msg=1"));
                else redirect(base_url("admin/datamaster/staffberkastambah?nip=".$nip_staff."&msg=0"));
            } else {

                $this->layout->render('back-end/datamaster/staff/v_staffberkas_tambah',$variabel,'back-end/datamaster/staff/v_staffberkas_js');
            }
        } else {
            redirect(base_url("admin/datamaster/staff"));
        }
    }

    function staffhapusberkas()
    {
        $id_berkas = $this->input->get("id_berkas");
        $nip = $this->input->get("nip");

        $query2 = $this->m_staff->lihatdatasatuberkas($id_berkas);
        $row2 = $query2->row();
        $berkas1temp = $row2->file_berkas;
        $path1 ="./assets/berkas/berkasstaff/".$berkas1temp."";
        if(is_file($path1)) {
            unlink($path1);
        }

        $exec = $this->m_staff->hapusberkas($id_berkas);
        redirect(base_url()."admin/datamaster/staffberkas?msg=1&nip=".$nip."");
    }

    function staffeditberkas()
    {
        if ($this->input->post()) {
            $id_berkas = $this->input->post('id_berkas');
            $nama_berkas = $this->input->post('nama_berkas');
            $nip_staff = $this->input->post('nip_staff');
            $array=array(
                'nama_berkas'=> $nama_berkas
                );

            $config['upload_path'] = './assets/berkas/berkasstaff';
            $config['allowed_types'] = 'jpg|png|gif|jpeg|JPG|JPEG|doc|docx|xls|xlsx|ppt|pptx|pdf|DOC|DOCX';
            $this->load->library('upload', $config);
            if ( $this->upload->do_upload("file_berkas"))
            {
                $upload = $this->upload->data();
                $file_berkas = $upload["raw_name"].$upload["file_ext"];
                $array['file_berkas']=$file_berkas;

                $query2 = $this->m_staff->lihatdatasatuberkas($id_berkas);
                $row2 = $query2->row();
                $berkas1temp = $row2->file_berkas;
                $path1 ="./assets/berkas/berkasstaff/".$berkas1temp."";
                if(is_file($path1)) {
                    unlink($path1); //menghapus gambar di folder produk
                }
            }
            $exec = $this->m_staff->editdataaberkas($id_berkas,$array);
            if ($exec) redirect(base_url("admin/datamaster/staffeditberkas?id=".$id_berkas."&nip=".$nip_staff."&msg=1"));
            else redirect(base_url("admin/datamaster/staffeditberkas?id=".$id_berkas."&nip=".$nip_staff."&msg=0"));

        } else {
            $nip = $this->input->get("nip");
            $id = $this->input->get("id");
            $exec = $this->m_staff->lihatdatasatu($nip);
            if ($exec->num_rows()>0){
                $variabel['staff'] = $exec ->row_array();
                $exec2 = $this->m_staff->lihatdatasatuberkas($id);
                if ($exec2->num_rows()>0){

                    $variabel['data'] = $exec2->row_array();
                    $this->layout->render('back-end/datamaster/staff/v_staffberkas_edit',$variabel,'back-end/datamaster/staff/v_staffberkas_js');
                } else {
                    redirect(base_url("admin/datamaster/staffberkas?nip=$nip"));
                }
            } else {
                redirect(base_url("admin/datamaster/staff"));
            }
        }

    }

    // End CRUD Staff

   // CRUD provinsi
   function provinsi()
   {
       $variabel['data'] = $this->m_provinsi->lihatdata();
       $this->layout->render('back-end/datamaster/provinsi/v_provinsi',$variabel,'back-end/datamaster/provinsi/v_provinsi_js');
   }



   function provinsitambah()
   {
       if ($this->input->post()){

               $array=array(
                   'id_provinsi'=> $this->input->post('id_provinsi'),
                   'nama_provinsi'=> $this->input->post('nama_provinsi'),
                   );
           if ($this->m_provinsi->cekdata($this->input->post('id_provinsi'))==0) {
               $exec = $this->m_provinsi->tambahdata($array);
               if ($exec) redirect(base_url("admin/datamaster/provinsitambah?msg=1"));
               else redirect(base_url("admin/datamaster/provinsitambah?msg=0"));
           } else {
               $variabel['id_provinsi'] =$this->input->post('id_provinsi');
               $this->layout->render('back-end/datamaster/provinsi/v_provinsi_tambah',$variabel,'back-end/datamaster/provinsi/v_provinsi_js');
           }

       } else {
           $variabel ='';
           $this->layout->render('back-end/datamaster/provinsi/v_provinsi_tambah',$variabel,'back-end/datamaster/provinsi/v_provinsi_js');
       }
   }

   function provinsiedit()
   {
       if ($this->input->post()) {
           $array=array(
             'id_provinsi'=> $this->input->post('id_provinsi'),
             'nama_provinsi'=> $this->input->post('nama_provinsi'),
               );
           $id_provinsilama = $this->input->post("id_provinsilama");
           $id_provinsi = $this->input->post("id_provinsi");
           if (($this->m_provinsi->cekdata($id_provinsi)>0) && ($id_provinsilama!=$id_provinsi)) {
               $variabel['id_provinsi'] =$this->input->post('id_provinsi');
               $variabel['id_provinsilama'] =$this->input->post('id_provinsilama');
               $variabel['data'] = $array;
               $this->layout->render('back-end/datamaster/provinsi/v_provinsi_edit',$variabel,'back-end/datamaster/provinsi/v_provinsi_js');
           } else {
               $exec = $this->m_provinsi->editdata($id_provinsilama,$array);
               if ($exec){
                 redirect(base_url("admin/datamaster/provinsiedit?id_provinsi=".$id_provinsi."&msg=1"));
               }
           }
     } else {
           $id_provinsi = $this->input->get("id_provinsi");
           $exec = $this->m_provinsi->lihatdatasatu($id_provinsi);
           if ($exec->num_rows()>0){
               $variabel['data'] = $exec ->row_array();
               $this->layout->render('back-end/datamaster/provinsi/v_provinsi_edit',$variabel,'back-end/datamaster/provinsi/v_provinsi_js');
           } else {
               redirect(base_url("admin/datamaster/provinsi"));
           }
     }

   }

   function provinsihapus()
   {
      $id_provinsi = $this->input->get("id_provinsi");
      $exec = $this->m_provinsi->hapus($id_provinsi);
      redirect(base_url()."admin/datamaster/provinsi?msg=1");
   }
// END Provinsi
// CRUD Kota dan Kabupaten

function kota_kab()
{
    $variabel['data'] = $this->m_kota_kab->lihatdata();
    $this->layout->render('back-end/datamaster/kota_kab/v_kota_kab',$variabel,'back-end/datamaster/kota_kab/v_kota_kab_js');
}



function kota_kabtambah()
{
    if ($this->input->post()){

            $array=array(
                'id_provinsi'=> $this->input->post('id_provinsi'),
                'nama_provinsi'=> $this->input->post('nama_provinsi'),
                );
        if ($this->m_provinsi->cekdata($this->input->post('id_provinsi'))==0) {
            $exec = $this->m_provinsi->tambahdata($array);
            if ($exec) redirect(base_url("admin/datamaster/provinsitambah?msg=1"));
            else redirect(base_url("admin/datamaster/provinsitambah?msg=0"));
        } else {
            $variabel['id_provinsi'] =$this->input->post('id_provinsi');
            $this->layout->render('back-end/datamaster/provinsi/v_provinsi_tambah',$variabel,'back-end/datamaster/provinsi/v_provinsi_js');
        }

    } else {
        $variabel ='';
        $this->layout->render('back-end/datamaster/provinsi/v_provinsi_tambah',$variabel,'back-end/datamaster/provinsi/v_provinsi_js');
    }
}

function kota_kabedit()
{
    if ($this->input->post()) {
        $array=array(
          'id_kota_kab'=> $this->input->post('id_kota_kab'),
          'nama_kota_kab'=> $this->input->post('nama_kota_kab'),
          'id_provinsi'=> $this->input->post('id_provinsi'),
            );
            $id_kota_kab = $this->input->post("id_kota_kab");
            $exec = $this->m_kota_kab->editdata($id_kota_kab,$array);
            if ($exec){
              redirect(base_url("admin/datamaster/kota_kabedit?id_kota_kab=".$id_kota_kab."&msg=1"));
            }

  } else {
        $id_kota_kab = $this->input->get("id_kota_kab");
        $exec = $this->m_kota_kab->lihatdatasatu($id_kota_kab);
        if ($exec->num_rows()>0){
            $variabel['data'] = $exec ->row_array();
            $this->layout->render('back-end/datamaster/kota_kab/v_kota_kab_edit',$variabel,'back-end/datamaster/kota_kab/v_kota_kab_js');
        } else {
            redirect(base_url("admin/datamaster/kota_kab"));
        }
  }

}

function kota_kabhapus()
{
   $id_kota_kab = $this->input->get("id_kota_kab");
   $exec = $this->m_kota_kab->hapus($id_kota_kab);
   redirect(base_url()."admin/datamaster/kota_kab?msg=1");
}
// End CRUD Kota dan Kabupaten
}
