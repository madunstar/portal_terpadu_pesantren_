<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Kecamatan Indonesia</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Input Data Kecamatan Indonesia
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Menambahkan Data Kecamatan","Gagal Menambahkan Data Kecamatan") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/kecamatantambah" method="post">
       <a href="<?php echo base_url('admin/datamaster/kecamatan') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Kecamatan</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_kecamatan" data-required="true" value="<?php echo set_value('nama_kecamatan'); ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Provinsi</label>
              <div class="col-lg-8">
                <select class="form-control"  name="id_provinsi" id="id_provinsi" data-required="true"/>
                <option value="">-PILIH PROVINSI-</option>
                <?php foreach($data->result() as $row):?>
                  <option value="<?php echo $row->id_provinsi;?>"><?php echo $row->nama_provinsi;?></option>
                <?php endforeach;?>
              </select>
              </div>
            </div>
                <div class="form-group">
                    <label class="col-lg-4 control-label">Nama Kota dan Kabupaten</label>
                    <div class="col-lg-8">
                        <select name="id_kota_kab" class="id_kota_kab form-control" data-required="true">
                          <option value="">-PILIH-</option>
                        </select>
                    </div>
                </div>
        </div>
      </div>

      <footer class="panel-footer text-right bg-light lter">
        <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
        &nbsp
        <a href="<?php echo base_url('admin/datamaster/kecamatan') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> List Data Kecamatan</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
