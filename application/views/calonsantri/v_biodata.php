<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Santri</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Input Santri
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil mengupdate biodata","Gagal mengupdate biodata") ?>
      <?php pesanvar('2',"Biodata Belum diverifikasi","Gagal Mengupdate Biodata","Lengkapi biodata dengan data sebenarnya dan selengkap-lengkapnya") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>santri/pendaftaran/biodata" method="post">
        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label class="col-lg-4 control-label">NIS</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" name="nis_lokal" data-required="true" value="<?php echo $data['nis_lokal']; ?>" />
            <input type="hidden" class="form-control" name="nis_lokal2" data-required="true" value="<?php
            if (isset($nis_lokal2)) echo $nis_lokal2; else echo $data['nis_lokal']; ?>" />
            <?php 
              if(isset($nis_lokal)) {
                echo '<label style="color:red;font-size:10px">NIS ada yang sama ! NIS asal "'.$nis_lokal2.'"</label>';
              } 
            ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-4 control-label">NISN</label>
          <div class="col-lg-8">
            <input type="text" class="form-control"  name="nisn" data-required="true"  value="<?php echo $data['nisn']; ?>" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-4 control-label">NIK</label>
          <div class="col-lg-8">
            <input type="text" class="form-control"  name="nik" value="<?php echo $data['nik']; ?>" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-4 control-label">Nama</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" name="nama_lengkap" data-required="true" value="<?php echo $data['nama_lengkap']; ?>" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-4 control-label">Tempat Lahir</label>
          <div class="col-lg-8">
            <input type="text" class="form-control"  name="tempat_lahir" data-required="true" value="<?php echo $data['tempat_lahir']; ?>" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-4 control-label">Tanggal Lahir</label>
          <div class="col-lg-8">
          <input class="datepicker-input form-control" size="16" type="text"  data-date-format="dd-mm-yyyy" name="tgl_lahir" data-required="true" value="<?php echo tanggal($data['tgl_lahir']); ?>" readonly/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-4 control-label">Jenis Kelamin</label>
          <div class="col-lg-8">
            <select class="form-control"  name="jenis_kelamin" />
              <option value="L" <?php if ($data['jenis_kelamin']=="L")  echo "selected" ?> >Laki-laki</option>
              <option value="P" <?php if ($data['jenis_kelamin']=="P")  echo "selected" ?> >Perempuan</option>
            </select>
          </div>
        </div>
        <div class="form-group">
        <label class="col-lg-4 control-label">Nomor HP</label>
        <div class="col-lg-8">
          <input type="text" class="form-control"  name="hp" value="<?php echo $data['hp']; ?>" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-lg-4 control-label">Alamat Lengkap</label>
        <div class="col-lg-8">
          <textarea class="form-control"  name="alamat_lengkap" ><?php echo $data['alamat_lengkap']; ?></textarea>
        </div>
      </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Provinsi</label>
              <div class="col-lg-8">
                <select class="form-control"  name="provinsi" id="provinsi" data-required="true">
                <option value="" disabled <?php if ($data['provinsi']=="") echo "selected" ?>>Pilih Provinsi</option>
                <?php 
                     foreach($provinsi->result_array() as $row) {
                       echo "<option value='".$row['nama_provinsi']."' ".($data['provinsi']==$row['nama_provinsi']?"selected":"").">".$row['nama_provinsi']."</option>";
                    }
                ?> 
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Kabupaten/Kota</label>
              <div class="col-lg-8">
              <select class="form-control id_kota_kab"  name="kabupaten_kota"  id="kabupaten_kota" data-required="true">
              <option value="" disabled <?php if ($data['kabupaten_kota']=="") echo "selected" ?>>Pilih Kabupaten/Kota</option>
                <?php 
                     foreach($kabupaten->result_array() as $row) {
                       echo "<option value='".$row['nama_kota_kab']."' ".($data['kabupaten_kota']==$row['nama_kota_kab']?"selected":"").">".$row['nama_kota_kab']."</option>";
                    }
                ?>
                  
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Kecamatan</label>
              <div class="col-lg-8">
              <select class="form-control id_kota_kab"  name="kecamatan"  id="kecamatan" data-required="true">
              <option value="" disabled  <?php if ($data['kecamatan']=="") echo "selected" ?>>Pilih Kecamatan</option>
                <?php 
                     foreach($kecamatan->result_array() as $row) {
                       echo "<option value='".$row['nama_kecamatan']."' ".($data['kecamatan']==$row['nama_kecamatan']?"selected":"").">".$row['nama_kecamatan']."</option>";
                    }
                ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Desa/Kelurahan</label>
              <div class="col-lg-8">
                <select class="form-control"  name="desa_kelurahan" id="desa_kelurahan" data-required="true">
                <option value="" disabled <?php if ($data['desa_kelurahan']=="") echo "selected" ?>>Pilih Desa/Kelurahan</option>
                <?php 
                     foreach($desa->result_array() as $row) {
                       echo "<option value='".$row['nama_kel_desa']."' ".($data['desa_kelurahan']==$row['nama_kel_desa']?"selected":"").">".$row['nama_kel_desa']."</option>";
                    }
                ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Kode Pos</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="kode_pos" value="<?php echo $data['kode_pos']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Hobi</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="hobi" value="<?php echo $data['hobi']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Cita-cita</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="cita_cita" value="<?php echo $data['cita_cita']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Jenis Sekolah Asal</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="jenis_sekolah_asal" value="<?php echo $data['jenis_sekolah_asal']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Status Sekolah Asal</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="status_sekolah_asal" value="<?php echo $data['status_sekolah_asal']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor Peserta Ujian</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nomor_peserta_ujian" value="<?php echo $data['nomor_peserta_ujian']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Jarak Ke Sekolah</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="jarak_ke_sekolah" value="<?php echo $data['jarak_ke_sekolah']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Alat Transportasi</label>
              <div class="col-lg-8">
                <select class="form-control"  name="alat_transportasi">
                <option value="" disabled <?php if ($data['alat_transportasi']=="") echo "selected" ?>>Pilih Alat Transportasi</option>
                <?php 
                     foreach($transportasi->result_array() as $row) {
                       echo "<option value='".$row['nama_alat_transportasi']."' ".($data['alat_transportasi']==$row['nama_alat_transportasi']?"selected":"").">".$row['nama_alat_transportasi']."</option>";
                    }
                ?> 
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Status Tempat Tinggal</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="status_tempat_tinggal" value="<?php echo $data['status_tempat_tinggal']; ?>" />
              </div>
            </div>

          </div>
          <div class="col-md-6">
          <div class="form-group">
              <label class="col-lg-4 control-label">No Kartu Keluarga</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="no_kk" value="<?php echo $data['no_kk']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">NIK Ayah</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nik_ayah" value="<?php echo $data['nik_ayah']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Ayah</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nama_lengkap_ayah" value="<?php echo $data['nama_lengkap_ayah']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pendidikan Terakhir Ayah</label>
              <div class="col-lg-8">
                <select type="text" class="form-control"  name="pendidikan_terakhir_ayah">
                <option value="" disabled <?php if ($data['pendidikan_terakhir_ayah']=="") echo "selected" ?>>Pilih Pendidikan</option>
                <?php 
                     foreach($pendidikan->result_array() as $row) {
                       echo "<option value='".$row['nama_pendidikan']."' ".($data['pendidikan_terakhir_ayah']==$row['nama_pendidikan']?"selected":"").">".$row['nama_pendidikan']."</option>";
                    }
                ?> 
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pekerjaan Ayah</label>
              <div class="col-lg-8">
                <select class="form-control"  name="pekerjaan_ayah">
                <option value="" disabled <?php if ($data['pekerjaan_ayah']=="") echo "selected" ?>>Pilih  Pekerjaan</option>
                <?php 
                     foreach($pekerjaan->result_array() as $row) {
                       echo "<option value='".$row['nama_pekerjaan']."' ".($data['pekerjaan_ayah']==$row['nama_pekerjaan']?"selected":"").">".$row['nama_pekerjaan']."</option>";
                    }
                ?> 
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor HP Ayah</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="hpayah" value="<?php echo $data['hpayah']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">NIK Ibu</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nik_ibu"value="<?php echo $data['nik_ibu']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Ibu</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nama_lengkap_ibu" value="<?php echo $data['nama_lengkap_ibu']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pendidikan Terakhir Ibu</label>
              <div class="col-lg-8">
                <select  class="form-control"  name="pendidikan_terakhir_ibu">
                <option value="" disabled <?php if ($data['pendidikan_terakhir_ibu']=="") echo "selected" ?>>Pilih Pendidikan</option>
                <?php 
                     foreach($pendidikan->result_array() as $row) {
                       echo "<option value='".$row['nama_pendidikan']."' ".($data['pendidikan_terakhir_ibu']==$row['nama_pendidikan']?"selected":"").">".$row['nama_pendidikan']."</option>";
                    }
                ?> 
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pekerjaan Ibu</label>
              <div class="col-lg-8">
                <select class="form-control"  name="pekerjaan_ibu">
                <option value="" disabled <?php if ($data['pekerjaan_ibu']=="") echo "selected" ?>>Pilih Pekerjaan</option>
                <?php 
                     foreach($pekerjaan->result_array() as $row) {
                       echo "<option value='".$row['nama_pekerjaan']."' ".($data['pekerjaan_ibu']==$row['nama_pekerjaan']?"selected":"").">".$row['nama_pekerjaan']."</option>";
                    }
                ?> 
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor HP Ibu</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="hpibu" value="<?php echo $data['hpibu']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Penghasilan Orang Tua</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="penghasilan_orang_tua" value="<?php echo $data['penghasilan_orang_tua']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">NIK Wali</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nik_wali" value="<?php echo $data['nik_wali']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Wali</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nama_lengkap_wali" value="<?php echo $data['nama_lengkap_wali']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pendidikan Terakhir Wali</label>
              <div class="col-lg-8">
                <select class="form-control"  name="pendidikan_terakhir_wali">
                <option value="" disabled <?php if ($data['pendidikan_terakhir_wali']=="") echo "selected" ?>>Pilih Pendidikan</option>
                <?php 
                     foreach($pendidikan->result_array() as $row) {
                       echo "<option value='".$row['nama_pendidikan']."' ".($data['pendidikan_terakhir_wali']==$row['nama_pendidikan']?"selected":"").">".$row['nama_pendidikan']."</option>";
                    }
                ?> 
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pekerjaan Wali</label>
              <div class="col-lg-8">
                <select class="form-control"  name="pekerjaan_wali">
                <option value="" disabled <?php if ($data['pekerjaan_wali']=="") echo "selected" ?>>Pilih Pekerjaan</option>
                <?php 
                     foreach($pekerjaan->result_array() as $row) {
                       echo "<option value='".$row['nama_pekerjaan']."' ".($data['pekerjaan_wali']==$row['nama_pekerjaan']?"selected":"").">".$row['nama_pekerjaan']."</option>";
                    }
                ?> 
                </select>
                
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor HP Wali</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="hpwali" value="<?php echo $data['hpwali']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Penghasilan Wali</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="penghasilan_wali" value="<?php echo $data['penghasilan_wali']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Jumlah Saudara Kandung</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="jumlah_saudara_kandung" value="<?php echo $data['jumlah_saudara_kandung']; ?>" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="panel-footer text-right bg-light lter">
        <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>

      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
