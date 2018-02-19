<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data tahun Ajaran</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Input Data tahun Ajaran
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Menambahkan Data tahun","Gagal Menambahkan Data tahun") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/tahunajartambah" method="post">
       <a href="<?php echo base_url('admin/datamaster/tahunajar') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">tahun ajaran</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="tahun_ajaran" data-required="true"  value="<?php echo set_value('tahun_ajaran'); ?>"/>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="panel-footer text-right bg-light lter">
        <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
        &nbsp
        <a href="<?php echo base_url('admin/datamaster/tahunajar') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> List Data tahun</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
