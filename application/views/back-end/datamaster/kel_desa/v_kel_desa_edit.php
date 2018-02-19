<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Kecamatan Indonesia</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Edit Data Kecamatan Indonesia
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Mengedit Data Kecamatan","Gagal Mengedit Data Kecamatan") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/kel_desaedit?id_kel_desa=<?php echo $data['id_kel_desa']; ?>" method="post">
       <a href="<?php echo base_url('admin/datamaster/kel_desa') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Kelurahan/Desa</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_kel_desa" data-required="true" value="<?php echo $data['nama_kel_desa']; ?>" />
                <input type="hidden" class="form-control" name="id_kel_desa" data-required="true" value="<?php echo $data['id_kel_desa']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Provinsi</label>
              <div class="col-lg-8">
                <select class="form-control"  name="id_provinsi" id="id_provinsi" />
                <?php foreach ($dataprovinsi->result_array() as $provinsi) {?>
                <option value= "<?php echo $provinsi['id_provinsi']?>" <?php if ($provinsi['id_provinsi']==$data['id_provinsi'])  echo "selected" ?>> <?php echo $provinsi['nama_provinsi']?> </option>
                <?php }?>
              </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Kota dan Kabupaten</label>
              <div class="col-lg-8">
                <select name="id_kota_kab" id="id_kota_kab" class="id_kota_kab form-control"/>
                <?php foreach ($datakotakab->result_array() as $kotakab) {?>
                <option value= "<?php echo $kotakab['id_kota_kab']?>" <?php if ($kotakab['id_kota_kab']==$data['id_kota_kab'])  echo "selected" ?>> <?php echo $kotakab['nama_kota_kab']?> </option>
                <?php }?>
              </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Kecamatan</label>
              <div class="col-lg-8">
                <select name="id_kecamatan" class="id_kecamatan form-control"/>
                <?php foreach ($datakecamatan->result_array() as $kecamatan) {?>
                <option value= "<?php echo $kecamatan['id_kecamatan']?>" <?php if ($kecamatan['id_kecamatan']==$data['id_kecamatan'])  echo "selected" ?>> <?php echo $kecamatan['nama_kecamatan']?> </option>
                <?php }?>
              </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <footer class="panel-footer text-right bg-light lter">
      <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
      &nbsp
      <a href="<?php echo base_url() ?>admin/datamaster/kel_desaedit?id_kel_desa=<?php echo $data['id_kel_desa']; ?>&id_provinsi=<?php echo $data['id_provinsi']; ?>&id_kota_kab=<?php echo $data['id_kota_kab']; ?>" class="btn btn-default btn-s-xs"><i class="fa fa-refresh"></i > Reset</a>
      &nbsp
      <a href="<?php echo base_url('admin/datamaster/kel_desa') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> List Kelurahan dan Desa</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
