<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Kelurahan dan Desa Indonesia</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Input Data Kelurahan dan Desa Indonesia
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Menambahkan Data Kelurahan dan Desa","Gagal Menambahkan Data Kelurahan dan Desa") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/kel_desatambah" method="post">
       <a href="<?php echo base_url('admin/datamaster/kel_desa') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Kelurahan dan Desa</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_kel_desa" data-required="true" value="<?php echo set_value('nama_kel_desa'); ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Provinsi</label>
              <div class="col-lg-8">
                <select class="form-control"  name="id_provinsi" id="id_provinsi" data-required="true"/>
                <option value="">Pilih Provinsi</option>
                <?php foreach($data->result() as $row):?>
                  <option value="<?php echo $row->id_provinsi;?>"><?php echo $row->nama_provinsi;?></option>
                <?php endforeach;?>
              </select>
              </div>
            </div>
                <div class="form-group">
                    <label class="col-lg-4 control-label">Nama Kota dan Kabupaten</label>
                    <div class="col-lg-8">
                        <select name="id_kota_kab" id="id_kota_kab" class="id_kota_kab form-control" data-required="true">
                          <option value="">Pilih Kota dan Kabupaten</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-4 control-label">Nama Kecamatan</label>
                    <div class="col-lg-8">
                        <select name="id_kecamatan" class="id_kecamatan form-control" data-required="true">
                          <option value="">Pilih Kecamatan</option>
                        </select>
                    </div>
                </div>
        </div>
      </div>
<<<<<<< HEAD
      <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js'?>"></script>
      <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
      <script type="text/javascript">
      $(document).ready(function(){
        $('#id_provinsi').change(function(){
          var id=$(this).val();
          $.ajax({
            url : "<?php echo base_url();?>admin/datamaster/datakotakab",
            method : "POST",
            data : {id: id},
            async : false,
                dataType : 'json',
            success: function(data){
              var html = '<option value="">Pilih Kota dan Kabupaten</option>';
              var html2 = '<option value="">Pilih Kecamatan</option>';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].id_kota_kab+'">'+data[i].nama_kota_kab+'</option>';
                    } 
                    $('.id_kota_kab').html(html);
                    $('.id_kecamatan').html(html2);

            }
          });
        });

        $('#id_kota_kab').change(function(){
          var id=$(this).val();
          $.ajax({
            url : "<?php echo base_url();?>admin/datamaster/datakecamatan",
            method : "POST",
            data : {id: id},
            async : false,
                dataType : 'json',
            success: function(data){
              var html ='<option value="">Pilih Kecamatan</option>';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].id_kecamatan+'">'+data[i].nama_kecamatan+'</option>';
                    }
                    $('.id_kecamatan').html(html);

            }
          });
        });
      });
      </script>
=======
>>>>>>> 6fdbbf6e7bfa2d0442c9c00562dd5871c762a979
      <footer class="panel-footer text-right bg-light lter">
        <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
        &nbsp
        <a href="<?php echo base_url('admin/datamaster/kel_desa') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> List Data Kelurahan dan Desa</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
