<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Provinsi Indonesia</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Input Data Provinsi Indonesia
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Menambahkan Data Provinsi","Gagal Menambahkan Data Provinsi") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/provinsitambah" method="post">
       <a href="<?php echo base_url('admin/datamaster/provinsi') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">ID Provinsi</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="id_provinsi" data-required="true" value="<?php echo set_value('id_provinsi'); ?>" />
                <?php if(isset($id_provinsi)) {
                         echo '<label style="color:red;font-size:10px">Id Provinsi sudah ada !</label>';
                       }
                ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Provinsi</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nama_provinsi" data-required="true"  value="<?php echo set_value('nama_provinsi'); ?>"/>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="panel-footer text-right bg-light lter">
        <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
        &nbsp
        <a href="<?php echo base_url('admin/datamaster/provinsi') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> List Data Provinsi</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>