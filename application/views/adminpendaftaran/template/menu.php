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
						<li  class="<?= (($menu == "pendaftaran") && ($submenu == 'index')) ? "active" : ""; ?>">
							<a href="<?php echo base_url('admin/pendaftaran')?>" class="auto">
								<i class="fa fa-dashboard">
								</i>
								<span class="font-bold">Dashboard</span>
							</a>
						</li>
						<li >
							<a href="#" class="auto">
								<span class="pull-right text-muted">
									<i class="i i-circle-sm-o text"></i>
									<i class="i i-circle-sm text-active"></i>
								</span>

								<i class="fa fa-group">
								</i>
								<span class="font-bold">Pendaftaran</span>
							</a>
							<ul class="nav dk">
								<li >
									<a href="layout-color.html" class="auto">
										<i class="i i-dot text-primary"></i>

										<span>Semua</span>
									</a>
								</li>
								<li >
									<a href="layout-color.html" class="auto">
										<i class="i i-dot text-success"></i>

										<span>Diverifikasi</span>
									</a>
								</li>
								<li >
									<a href="layout-hbox.html" class="auto">
										<i class="i i-dot text-warning"></i>

										<span>Menunggu Verifikasi</span>
									</a>
								</li>
								<li >
									<a href="layout-boxed.html" class="auto">
										<i class="i i-dot text-danger"></i>

										<span>Belum Lengkap</span>
									</a>
								</li>
							</ul>
						</li>
						<li  class="">
							<a href="<?php echo site_url('')?>" class="auto">
								<i class="fa fa-money">
								</i>
								<span class="font-bold">Pembayaran</span>
							</a>
						</li>
						<li  class="">
							<a href="<?php echo site_url('')?>" class="auto">
								<i class="fa fa-info-circle">
								</i>
								<span class="font-bold">Informasi</span>
							</a>
						</li>
						<li >
							<a href="#" class="auto">
								<span class="pull-right text-muted">
									<i class="i i-circle-sm-o text"></i>
									<i class="i i-circle-sm text-active"></i>
								</span>
								<i class="fa fa-pencil icon">
								</i>
								<span class="font-bold">Tes</span>
							</a>
							<ul class="nav dk">
								<li >
									<a href="buttons.html" class="auto">
										<i class="i i-dot"></i>

										<span>Ruangan Tes</span>
									</a>
								</li>
								<li >
									<a href="icons.html" class="auto">
										
										<i class="i i-dot"></i>

										<span>Peserta Tes</span>
									</a>
								</li>
								<li >
									<a href="icons.html" class="auto">

										<i class="i i-dot"></i>

										<span>Atur Tes</span>
									</a>
								</li>
								<li >
									<a href="icons.html" class="auto">

										<i class="i i-dot"></i>

										<span>Atur Hasil Tes</span>
									</a>
								</li>
							</ul>
						</li>
						<li  class="<?= (($menu == "pendaftaran") && ($submenu == 'pengaturan')) ? "active" : ""; ?>">
							<a href="<?php echo base_url() ?>admin/pendaftaran/pengaturan" class="auto">
								<i class="fa fa-cog">
								</i>
								<span class="font-bold">Pengaturan</span>
							</a>
						</li>
					</ul>
				</nav>
				<!-- / nav -->
			</div>
		</section>
		<footer class="footer hidden-xs no-padder text-center-nav-xs">
			<!--<a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">-->
              <a href="<?php echo base_url() ?>admin/pendaftaran/logout" class="auto btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
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
