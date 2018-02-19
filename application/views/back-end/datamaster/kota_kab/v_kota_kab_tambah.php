<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Kota dan Kabupaten Indonesia</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Input Data Kota dan Kabupaten Indonesia
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Menambahkan Data Kota dan Kabupaten","Gagal Menambahkan Data Kota dan Kabupaten") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/kota_kabtambah" method="post">
       <a href="<?php echo base_url('admin/datamaster/kota_kab') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Kota atau Kabupaten</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_kota_kab" data-required="true" value="<?php echo set_value('nama_kota_kab'); ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Provinsi</label>
              <div class="col-lg-8">
                <select class="form-control"  name="id_provinsi" data-required="true"/>
                <?php foreach ($data->result_array() as $provinsi) {?>
                <option value= "<?php echo $provinsi['id_provinsi']?>"> <?php echo $provinsi['nama_provinsi']?> </option>
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
        <a href="<?php echo base_url('admin/datamaster/kota_kab') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> List Data Kota dan Kabupaten</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
