<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Data Denda Santri</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="panel panel-default">
            <header class="panel-heading">
              <h4 class="font-bold">Data Pembayaran Denda</h4>
            </header>
            <div class="panel-body">
              <?php pesan_get('msg',"Berhasil Menambahkan Data Bayar","Gagal Menambahkan Data Bayar") ?>
              <button data-toggle='modal' data-target='#tambahbayar' type="button" name="button" class="btn btn-success btn-rounded"><i class="fa fa-plus"></i> Tambah Pembayaran Denda</button><br><br>
              <div class="table-responsive">
                <table class="table m-b-none" id="">
                  <thead>
                    <tr>

                      <th >Tanggal Bayar</th>
                      <th >Besar Bayar</th>
                      <th>Petugas</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach($data->result_array() as $row){
                      echo "
                        <tr>
                          <td>".$row['tanggal_bayar']."</td>

                          <td>".$row['besar_bayar']."</td>
                          <td>".$row['nama_akun']."</td>

                        </tr>
                      ";
                    }
                    ?>
                  </tbody>
                </table>

              </div>
              <div class="panel-footer">
                <p><b>total pembayaran</b> : <?php echo $totalbayar['total'] ?>
              </div>
              <div class='modal' id='tambahbayar' tabindex='-1' role='dialog'>
                <form class='form-horizontal' role='form' data-validate='parsley' action='<?php echo base_url() ?>admin/perizinan/bayardenda' method='post'>
                 <div class='modal-dialog' role='document'>
                   <div class='modal-content'>
                     <div class='modal-header bg-primary'>
                       <h4 class='modal-title'>Tambah Data Pembayaran</h4>
                     </div>
                     <div class='modal-body'>
                       <div class='form-group'>
                         <label class='control-label col-sm-3'>Besar Pembayaran </label>
                         <div class="col-sm-9">
                           <input type='text' name='besar_bayar' data-type='number' class='form-control parsley-validated' data-required='true' value=''></input>
                           <input type="hidden" name="id_denda" value="<?php echo $id_denda ?>">
                           <input type="hidden" name="nis" value="<?php echo $nis ?>">
                         </div>
                       </div>
                     <div class='modal-footer'>
                       <button type='submit' class='btn btn-success'>Tambah Data</button>
                     </div>
                   </div>
                 </div>

               </div>
             </form>
            </div>

          </div>
            </div>
          </section>
        </section>
      </section>
    </section>

  </section>
