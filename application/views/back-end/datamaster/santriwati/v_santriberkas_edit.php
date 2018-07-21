<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Berkas Santriwati "
					<?php echo $santri['nama_lengkap'] ?> (
					<?php echo $santri['nis_lokal'] ?>)"</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Edit Berkas Santriwati
				</header>
				<div class="panel-body">
					<?php pesan_get('msg',"Berhasil Mengedit Data Berkas Santri","Gagal Mengedit Data Berkas Santri") ?>
					<form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/santriwatieditberkas?id=<?php echo $data['id_berkas'] ?>&nis=<?php echo $santri['nis_lokal'] ?>"
					method="post" enctype="multipart/form-data">
					<a href="<?php echo base_url('admin/datamaster/santriwatiberkas?nis='.$santri['nis_lokal'].'') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-lg-2 control-label">Nama Berkas</label>
									<div class="col-lg-7">
										<input type="text" class="form-control" name="nama_berkas" data-required="true" value="<?php echo $data['nama_berkas']; ?>"/>
										<input type="hidden" class="form-control" name="nis_lokal" value="<?php echo $santri['nis_lokal'] ?>" />
										<input type="hidden" class="form-control" name="id_berkas" value="<?php echo $data['id_berkas'] ?>" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Berkas</label>
									<div class="col-sm-10">
										<input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s" name="file_berkas">
									</div>
								</div>
							</div>
						</div>
				</div>
				<footer class="panel-footer text-right bg-light lter">
					<button type="submit" class="btn btn-success btn-s-xs">
						<i class="fa fa-save"></i> Simpan</button>
					&nbsp
					<a href="<?php echo base_url('admin/datamaster/santriwatiberkas?nis='.$santri['nis_lokal'].'') ?>" class="btn btn-default btn-s-xs">
						<i class="fa fa-list"></i> List Berkas</a>
				</footer>
				</form>


				</div>
			</section>
		</section>
	</section>

</section>
