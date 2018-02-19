<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Calon Santri</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Berkas
				</header>
				<div class="panel-body">
					<?php pesan_get('msg',"Berhasil Menambah Berkas","Gagal Menambah Mengupdate Berkas","berhasil Update Berkas") ?>
					<?php pesanvar('2',"","","Lengkapi berkas wajib dengan data sebenarnya dan selengkap-lengkapnya") ?>

						<div class="row">
							<div class="col-md-12">
                <small class="text-primary font-bold">Wajib</small>
                <div class="line"></div>
								<!-- pas poto -->
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>santri/pendaftaran/berkas"
      					method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-sm-2 control-label">Pas Poto</label>
									<div class="col-sm-7">
										<input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"
										name="file_berkas" data-required="true" id=""> <button type="submit" class="btn btn-success btn-s-xs"> <i class="fa fa-save"></i> Simpan</button>
										<a target='_blank' <?php echo ($datapoto['nama_berkas'] == 'paspoto' ? 'href="'.base_url('assets/images/berkas/'.$datapoto['file_berkas']).'"' :'');?> ><button type="button" class="btn btn-warning btn-s"><i class="fa fa-search"></i></button></a>
                     <?php echo ($datapoto['nama_berkas'] == 'paspoto' ? '<p class="text-success">Pas poto lengkap</p>' :'<p class="text-danger">Pas Poto Belum Lengkap</p>');?>
                    <input type="hidden" name="namaberkas" value="paspoto">
									</div>
								</div>
                </form>
								<!-- kartu keluarga -->
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>santri/pendaftaran/berkas"
      					method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-sm-2 control-label">Kartu Keluarga</label>
									<div class="col-sm-7">
										<input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"
										name="file_berkas" data-required="true" id=""> <button type="submit" class="btn btn-success btn-s-xs"> <i class="fa fa-save"></i> Simpan</button>
										<a target='_blank' <?php echo ($datakk['nama_berkas'] == 'kartu keluarga' ? 'href="'.base_url('assets/images/berkas/'.$datakk["file_berkas"]).'"' : '');?>><button type="button" class="btn btn-warning btn-s"><i class="fa fa-search"></i></button></a>
                    <?php echo ($datakk['nama_berkas'] == 'kartu keluarga' ? '<p class="text-success">Kartu keluarga lengkap</p>' :'<p class="text-danger">Kartu keluarga Belum Lengkap</p>');?>
                    <input type="hidden" name="namaberkas" value="kartu keluarga">
									</div>
								</div>
                </form>
								<!-- ijazah -->
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>santri/pendaftaran/berkas"
                method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ijazah</label>
                  <div class="col-sm-7">
                    <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"
                    name="file_berkas" data-required="true" id=""> <button type="submit" class="btn btn-success btn-s-xs"> <i class="fa fa-save"></i> Simpan</button>
										<a target='_blank' <?php echo ($dataijazah["nama_berkas"] == "ijazah" ? "href='".base_url('assets/images/berkas/'.$dataijazah["file_berkas"])."'": "");?>><button type="button" class="btn btn-warning btn-s"><i class="fa fa-search"></i></button></a>
                    <?php echo ($dataijazah['nama_berkas'] == 'ijazah' ? '<p class="text-success">Ijazah lengkap</p>' :'<p class="text-danger">Ijazah Belum Lengkap</p>');?>
                    <input type="hidden" name="namaberkas" value="ijazah">
                  </div>
                </div>
                </form>
								<!-- optional -->
                <div class="line pull-in line-dashed b-b"></div>
                <small class="text-muted">Optional</small>
                <div class="line"></div>
								<!-- piagam 1 -->
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>santri/pendaftaran/berkas"
                method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Piagam / Sertifikat</label>
                  <div class="col-sm-7">
                    <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"
                    name="file_berkas" data-required="true" id=""> <button type="submit" class="btn btn-success btn-s-xs"> <i class="fa fa-save"></i> Simpan</button>
										<a target='_blank' <?php echo ($datapiagam1["nama_berkas"] == "piagam1" ? "href='".base_url("assets/images/berkas/".$datapiagam1["file_berkas"])."'" : "");?>><button type="button" class="btn btn-warning btn-s"><i class="fa fa-search"></i></button></a>
										<?php echo ($datapiagam1['nama_berkas'] == 'piagam1' ? '<p class="text-success">Piagam / Sertifikat lengkap</p>' : null);?>
										<input type="hidden" name="namaberkas" value="piagam1">
                  </div>
                </div>
                </form>
								<!-- piagam 2 -->
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>santri/pendaftaran/berkas"
                method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Piagam / Sertifikat</label>
                  <div class="col-sm-7">
                    <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"
                    name="file_berkas" data-required="true" id=""> <button type="submit" class="btn btn-success btn-s-xs"> <i class="fa fa-save"></i> Simpan</button>
										<a target='_blank' <?php echo ($datapiagam2["nama_berkas"] == "piagam2" ? 'href="'.base_url("assets/images/berkas/".$datapiagam2["file_berkas"]).'"' : ""); ?>> <button type="button" class="btn btn-warning btn-s"><i class="fa fa-search"></i></button></a>
										<?php echo ($datapiagam2['nama_berkas'] == 'piagam2' ? '<p class="text-success">Piagam / Sertifikat lengkap</p>' : null);?>
										<input type="hidden" name="namaberkas" value="piagam2">
                  </div>
                </div>
                </form>
							</div>
						</div>
				</div>
				<footer class="panel-footer bg-light lter">
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-10">

						</div>

					</div>

				</footer>



				</div>
			</section>
		</section>
	</section>

</section>
