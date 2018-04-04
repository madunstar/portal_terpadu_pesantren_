<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Rekap Presensi Santri</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Daftar Pelajaran
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus Data Pelajaran","Gagal Menghapus Data Pelajaran") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/pelajarantambah" class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah data</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>Kelas</th>
              <th>Mata Pelajaran</th>
              <th>Pengajar</th>
              <th>Hari</th>
              <th>Jam Pelajaran</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/datamaster/datarekapsantri?pelajaran='.$row['id_pelajaran'].'&kelas='.$row['id_kelas_belajar'].'')."' class='btn btn-primary btn-xs' title='Lihat Rekap'><i class='fa fa-file-text-o'></i></a>
                      <a href='".base_url('admin/datamaster/pelajaranedit?id_pelajaran='.$row['id_pelajaran'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                      <a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['id_pelajaran']."'><i class='fa fa-trash-o'></i></a>
                      </td>
                      <td>".$row['nama_kelas_belajar']."</td>
                      <td>".$row['nama_mata_pelajaran']."</td>
                      <td>".$row['nama_lengkap']."</td>
                      <td></td>
                      <td></td>
                    </tr>
                  ";
                }
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </section>
</section>
</section>