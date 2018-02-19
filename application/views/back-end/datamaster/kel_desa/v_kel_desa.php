<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Kelurahan dan Desa Indonesia</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        List Kelurahan dan Desa Indonesia
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus Data Kelurahan dan Desa","Gagal Menghapus Data Kelurahan dan Desa") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/kel_desatambah"
        class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah data Kelurahan dan Desa</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>Nama Kelurahan dan Desa</th>
              <th>Nama Kecamatan</th>
              <th>Nama Kota dan Kabupaten</th>
              <th>Nama Provinsi</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/datamaster/kel_desaedit?id_kel_desa='.$row['id_kel_desa'].'&id_provinsi='.$row['id_provinsi'].'&id_kota_kab='.$row['id_kota_kab'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                      <button class='btn btn-danger btn-xs' data-toggle='modal' data-target='#".$row['id_kel_desa']."'><i class='fa fa-trash-o'></i></button>
                      </td>
                      <td>".$row['nama_kel_desa']."</td>
                      <td>".$row['nama_kecamatan']."</td>
                      <td>".$row['nama_kota_kab']."</td>
                      <td>".$row['nama_provinsi']."</td>
                      </tr>
                      <div class='modal' id='".$row['id_kel_desa']."' tabindex='-1' role='dialog'>
               <div class='modal-dialog' role='document'>
                 <div class='modal-content'>
                   <div class='modal-header bg-danger'>
                     <h4 class='modal-title'>Konfirmasi Hapus Data</h4>
                   </div>
                   <div class='modal-body'>
                     <b>Apakah yakin menghapus data?</b>
                   </div>
                   <div class='modal-footer'>
                     <a style='margin-left:5px' href='".base_url('admin/datamaster/kel_desahapus?id_kel_desa='.$row['id_kel_desa'].'')."'>
                     <button type='button' class='btn btn-sm btn-danger'>Konfirmasi</button></a>
                     <button type='button' class='btn btn-secondary btn-sm' data-dismiss='modal'>Batal</button>
                   </div>
                 </div>
               </div>
             </div>
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
