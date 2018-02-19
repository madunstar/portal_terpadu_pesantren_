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
                  <li  class="<?= (($menu == "datamaster") && ($submenu == 'index')) ? "active" : ""; ?>">
                    <a href="<?php echo base_url() ?>admin/datamaster/" class="auto">
                      <i class="fa fa-dashboard">
                      </i>
                      <span class="font-bold">Dashboard</span>
                    </a>
                  </li>
                  <li class="<?= (($menu == "datamaster") && ($submenu == 'santri') || ($submenu == 'guru') || ($submenu == 'staff')) ? "active" : ""; ?>">
                    <a href="#" class="auto">
                      <span class="pull-right text-muted">
                        <i class="i i-circle-sm-o text"></i>
                        <i class="i i-circle-sm text-active"></i>
                      </span>

                      <i class="fa fa-bars">
                      </i>
                      <span class="font-bold">Data Master</span>
                    </a>
                    <ul class="nav dk">
                      <li class="<?= (($menu == "datamaster") && ($submenu == 'santri')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/santri" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Santri</span>
                        </a>
                      </li>
                      <li class="<?= (($menu == "datamaster") &&  ($submenu == 'guru')) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/datamaster/guru" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Guru</span>
                        </a>
                      </li>
                      <li class="<?= (($menu == "datamaster") &&  ($submenu == 'staff')) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/datamaster/staff" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Staff</span>
                        </a>
                      </li>
                      <li >
                        <a href="layout-fluid.html" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data kelas</span>
                        </a>
                      </li>
                      <li >
                        <a href="layout-fluid.html" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Mata Pelajaran</span>
                        </a>
                      </li>

                    </ul>
                  </li>
                  <li >
                    <a href="#" class="auto">
                      <span class="pull-right text-muted">
                        <i class="i i-circle-sm-o text"></i>
                        <i class="i i-circle-sm text-active"></i>
                      </span>
                      <i class="i i-file-check icon">
                      </i>
                      <span class="font-bold">Presensi</span>
                    </a>
                    <ul class="nav dk">
                      <li >
                        <a href="buttons.html" class="auto">
                          <i class="i i-dot"></i>

                          <span>Jadwal Pelajaran</span>
                        </a>
                      </li>
                      <li >
                        <a href="icons.html" class="auto">
                          <b class="badge bg-info pull-right">369</b>
                          <i class="i i-dot"></i>

                          <span>Presensi Siswa</span>
                        </a>
                      </li>
                      <li >
                        <a href="grid.html" class="auto">
                          <i class="i i-dot"></i>

                          <span>Rekap Presensi Siswa</span>
                        </a>
                      </li>

                    </ul>
                  </li>
                  <li >
                    <a href="#" class="auto">
                      <span class="pull-right text-muted">
                        <i class="i i-circle-sm-o text"></i>
                        <i class="i i-circle-sm text-active"></i>
                      </span>
                      <i class="fa fa-briefcase">
                      </i>
                      <span class="font-bold">Perizinan</span>
                    </a>
                    <ul class="nav dk">
                      <li >
                        <a href="profile.html" class="auto">
                          <i class="i i-dot"></i>

                          <span>Keluar Pondok</span>
                        </a>
                      </li>
                      <li >
                        <a href="invoice.html" class="auto">
                          <i class="i i-dot"></i>

                          <span>Kembali ke Pondok</span>
                        </a>
                      </li>
                      <li >
                        <a href="intro.html" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Denda</span>
                        </a>
                      </li>
                      <li >
                        <a href="master.html" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Pembayaran Denda</span>
                        </a>
                      </li>

                    </ul>
                  </li>
									<li >
									<li class="<?= (($menu == "datamaster") && ($submenu == 'provinsi')|| ($submenu == 'kota_kab') || ($submenu == 'kecamatan') || ($submenu == 'pendidikan') || ($submenu == 'pekerjaan') || ($submenu == 'alat_transportasi')) ? "active" : ""; ?>">
                    <a href="#" class="auto">
                      <span class="pull-right text-muted">
                        <i class="i i-circle-sm-o text"></i>
                        <i class="i i-circle-sm text-active"></i>
                      </span>
                      <i class="fa fa-cogs">
                      </i>
                      <span class="font-bold">Lain lain</span>
                    </a>
                    <ul class="nav dk">
                      <li class="<?= (($menu == "datamaster") &&  ($submenu == 'admin') || ($submenu == 'adminedit') || ($submenu == 'admintambah')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/admin" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Admin</span>
                        </a>
                      </li>
                      <li class="<?= (($menu == "datamaster") &&  ($submenu == 'pendidikan') || ($submenu == 'pendidikanedit') || ($submenu == 'pendidikantambah')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/pendidikan" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Pendidikan</span>
                        </a>
                      </li>
                      <li class="<?= (($menu == "datamaster") &&  ($submenu == 'pekerjaan') || ($submenu == 'pekerjaanedit') || ($submenu == 'pekerjaantambah')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/pekerjaan" class="auto">
                          <i class="i i-dot"></i>
                          <span>Data Pekerjaan</span>
                        </a>
                      </li>

											<li class="<?= (($menu == "datamaster") && ($submenu == 'provinsi') || ($submenu == 'provinsiedit') || ($submenu == 'provinsitambah'))  ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/provinsi" class="auto">
                          <i class="i i-dot"></i>
                          <span>Data Provinsi</span>
                        </a>
                      </li>

											<li class="<?= (($menu == "datamaster") && ($submenu == 'kota_kab') || ($submenu == 'kota_kabtambah') || ($submenu == 'kota_kabedit')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/kota_kab" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Kota /Kabupaten</span>
                        </a>
                      </li>

											<li class="<?= (($menu == "datamaster") && ($submenu == 'kecamatan') || ($submenu == 'kecamatantambah') || ($submenu == 'kecamatanedit')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/kecamatan" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Kecamatan</span>
                        </a>
                      </li>

											<li class="<?= (($menu == "datamaster") && ($submenu == 'kel_desa') || ($submenu == 'kel_desatambah') || ($submenu == 'kel_desaedit')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/kel_desa" class="auto">
                          <i class="i i-dot"></i>


                          <span>Data Desa / Keluarahan</span>
                        </a>
                      </li>
											<li class="<?= (($menu == "datamaster") && ($submenu == 'tahunaja')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/tahunajar" class="auto">
													<i class="i i-dot"></i>

													<span>Data Tahun Ajaran</span>
												</a>
											</li>
                    </ul>
                  </li>
                  <li  class="">
                    <a href="<?php echo base_url('admin/pendaftaran')?>" class="auto">
                      <i class="fa fa-folder-open-o">
                      </i>
                      <span class="font-bold">Pendaftaran</span>
                    </a>
                  </li>
                </ul>



              </nav>
              <!-- / nav -->
            </div>
          </section>

          <footer class="footer hidden-xs no-padder text-center-nav-xs">
            <!--<a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">-->
              <a href="<?php echo base_url() ?>admin/datamaster/logout" class="auto btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
                <i class="i i-logout"></i>
              </a>
            <!--</a>-->
            <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
              <i class="i i-circleleft text"></i>
              <i class="i i-circleright text-active"></i>
            </a>
          </footer>
        </section>
      </aside>
