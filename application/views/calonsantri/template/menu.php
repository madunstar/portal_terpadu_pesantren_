<?php
	$menu = $this->router->fetch_class();
	$submenu = $this->router->fetch_method();
?>
 <aside class="bg-black aside-md hidden-print" id="nav">
        <section class="vbox">
          <section class="w-f scrollable">
            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">



              <!-- nav -->
              <nav class="nav-primary hidden-xs">
                <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Menu</div>
                <ul class="nav nav-main" data-ride="collapse">
                  <li  class="<?= (($menu == "pendaftaran") && ($submenu == 'dashboard')) ? "active" : ""; ?>">
                    <a href="<?php echo base_url() ?>santri/pendaftaran/dashboard" class="auto">
                      <i class="fa fa-dashboard">
                      </i>
                      <span class="font-bold">Dashboard</span>
                    </a>
                  </li>
                  <li class="<?= (($menu == "pendaftaran") && ($submenu == 'biodata'))  ? "active" : ""; ?>">
                    <a href="<?php echo base_url() ?>santri/pendaftaran/biodata" class="auto">
                      <i class="fa fa-user">
                      </i>
                      <span class="font-bold">Biodata</span>
                    </a>
                  </li>
                  <li >
                    <a href="<?php echo base_url() ?>santri/pendaftaran/berkas" class="auto">
                      <span class="pull-right text-muted">
                      </span>
                      <i class="fa fa-folder-open">
                      </i>
                      <span class="font-bold">Berkas</span>
                    </a>
                  </li>
                  <li class="<?= (($menu == "pendaftaran") && ($submenu == 'pembayaran'))  ? "active" : ""; ?>">
                    <a href="<?php echo base_url() ?>santri/pendaftaran/pembayaran" class="auto">
                      <span class="pull-right text-muted">
                      </span>
                      <i class="fa fa-money">
                      </i>
                      <span class="font-bold">Pembayaran</span>
                    </a>

                  </li>
                  <li class="<?= (($menu == "pendaftaran") && ($submenu == 'pengumuman'))  ? "active" : ""; ?>" >
                    <a href="<?php echo base_url() ?>santri/pendaftaran/pengumuman" class="auto">
                      <span class="pull-right text-muted">
                        <i class="i i-circle-sm-o text"></i>
                        <i class="i i-circle-sm text-active"></i>
                      </span>
                      <i class="fa fa-info-circle">
                      </i>
                      <span class="font-bold">Informasi</span>
                    </a>

                  </li>

                </ul>



              </nav>
              <!-- / nav -->
            </div>
          </section>

          <footer class="footer hidden-xs no-padder text-center-nav-xs">
            <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
              <i class="i i-logout"></i>
            </a>
            <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
              <i class="i i-circleleft text"></i>
              <i class="i i-circleright text-active"></i>
            </a>
          </footer>
        </section>
      </aside>
