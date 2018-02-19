<section class="vbox">
  <img src="<?php echo base_url('assets/images/masjid.jpg'); ?>" style="opacity:0.5" alt="">
  <section class="hbox stretch">
    <aside class="col-sm-1 no-padder">

  </aside>
    <aside class="aside-lg no-padder">
      <section class="vbox">
      <div class="wrapper" style="margin-top:70px">

      </div>
    </div>

  </section>
  </aside>
  <aside class="col-lg-4">
    <section class="vbox">
    <div class="wrapper" style="margin-top:30px">
      <div class="container aside-xl bg-light" style="border-radius:10px">

        <section class="m-b-lg">
          <div class="text-center">
          <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="">
        </div>
          <a class="navbar-brand block" href="index.html">PESANTREN DARUL ILMI</a>
          <header class="wrapper text-center">
            <small>Masuk dengan Email untuk Melanjutkan Pendaftaran</small>
          </header>
          <?php pesan_get('msg',"Sukses","Email Tidak Terdaftar") ?>
          <form  action="#" method="post" data-validate="parsley">
            <div class="list-group">
              <div class="list-group-item">
                <input name="email" data-required="true" type="email" data-type="email" placeholder="Email" value="<?php echo set_value('email_pendaftar'); ?>" class="form-control no-border">
              </div>
              <div class="list-group-item">
               <input name="sandi" data-required="true" type="password" placeholder="Kata Sandi" value="<?php echo set_value('kata_sandi'); ?>" class="form-control no-border" id="pwd">
             </div>


           </div>
           <!-- kena ganti buttonnya pakai yang ini, didalam form-->
          <!-- <button type="submit" class="btn btn-success btn-lg btn-block ">Masuk</button> -->
        </form>
        <!-- button sementara , diluar form-->
        <a href="<?php echo base_url('santri/pendaftaran/dashboard') ?>"><button  class="btn btn-success btn-lg btn-block ">Masuk</button></a>

        <small>Belum Punya Akun?<a class="text-primary" href="<?php echo base_url('santri/pendaftaran/index') ?>"> <strong>Halaman Pendafraran</strong></a></small>
        <div class="line line-dashed"></div>
        <footer id="footer">
        <p class="text-center text-muted"><small>&copy;2018</small></p>
      </footer>
      </section>
    </div>


  </div>
</section>


</aside>
</section>

</section>

</section>
</section>
