<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Calon Santri</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Bukti Pembayaran
				</header>
				<div class="panel-body">
					<?php pesan_get('msg',"Berhasil Mengupdate Bukti Pembayaran","Gagal Mengupdate Bukti Pembayaran") ?>
					<?php pesanvar('2',"","","Lengkapi Bukti Pembayaran dengan data sebenarnya dan selengkap-lengkapnya") ?>
					<form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>santri/pendaftaran/pembayaran"
					method="post" enctype="multipart/form-data">

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-lg-2 control-label">Besar Pembayaran</label>
									<div class="col-lg-4">
										<input type="text" class="form-control" name="besar_pembayaran" data-required="true" value="<?php echo $data['besar_pembayaran']; ?>"
										/>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label">Tanggal Pembayaran</label>
									<div class="col-sm-4">
										<input class="datepicker-input form-control" size="16" type="text" data-date-format="dd-mm-yyyy" name="tanggal_pembayaran" data-required="true"
										value="<?php if ($data['tanggal_pembayaran']=="0000-00-00") echo tanggal(date("Y-m-d")); else echo tanggal($data['tanggal_pembayaran']); ?>" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Keterangan</label>
									<div class="col-lg-4">
										<textarea class="form-control" name="keterangan" ><?php echo $data['keterangan']; ?></textarea>
									</div>
								</div>
								<div class="form-group">
								<script>
									function PreviewImage1(){
										var oFReader = new FileReader();
										oFReader.readAsDataURL(document.getElementById("bukti_pembayaran").files[0]);
										oFReader.onload = function (OFREvent) {
											document.getElementById("uploadPreview1").src = OFREvent.target.result;
										};
									};
								</script>
									<label class="col-sm-2 control-label">Bukti Pembayaran</label>
									<div class="col-sm-7">
										<input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"
										name="bukti_pembayaran" id="bukti_pembayaran" onchange="PreviewImage1();">
										<br/>
										<?php if ($data['bukti_pembayaran']!="") { ?>
										<img id="uploadPreview1"  style="max-width:200px; margin-top:5px; margin-bottom:0px;" src="<?php echo "".base_url()."assets/images/berkas/".$data['bukti_pembayaran']."" ?>" class="thumbnail"> 
									<?php } else {?>
										<img id="uploadPreview1"  style="max-width:200px; margin-top:5px; margin-bottom:0px;" > 
									<?php } ?>
									</div>
									
								</div>
							</div>
						</div>
				</div>
				<footer class="panel-footer bg-light lter">
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-10">
							<button type="submit" class="btn btn-success btn-s-xs">
								<i class="fa fa-save"></i> Simpan</button>
						</div>

					</div>

				</footer>
				</form>


				</div>
			</section>
		</section>
	</section>

</section>
