<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="row m-b-md">
				<div class="col-sm-6">
					<h3 class="m-b-xs text-black">Presensi</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<section class="panel panel-default">
						<header class="panel-heading">
							<h4 class="font-bold">Data Presensi Kelas Pondokan</h4>
						</header>
						<div class="panel-body table-responsive">
							<?php pesan_get('msg',"Berhasil Menghapus Data Kelas Belajar","Gagal Menghapus Data Kelas Belajar") ?>
							<?php pesan_get('ed',"Berhasil Mengedit Kelas Belajar","Gagal Mengedit Kelas Belajar") ?>
							<a href="<?php echo base_url() ?>admin/datamaster/aturkelaspondokan">
								<button type="button" name="button" class="btn btn-success btn-rounded">
									<i class="fa fa-plus"></i> Atur Kelas Baru</button>
							</a>
							<table class="table table-striped m-b-none" id="datatable">
								<thead>
									<tr>
										<th style="width:130px">Aksi</th>
										<th>#</th>
										<th>Tahun Ajaran</th>
										<th>Kelas</th>
										<th>Ruangan</th>
										<th>Wali</th>
										<th>Kelas Pondokan</th>
										<th>Tingkat</th>

										<th>Status</th>
										<th>Santri</th>
									</tr>
								</thead>
								<tbody>
									<?php
                    $i=0;
                    foreach($data->result_array() as $row){
                      $i++;
                      echo "
                        <tr>
                         
                          <td>
                          <a href='".base_url('admin/datamaster/lihatkelaspondokan?id='.$row['id_kelas_belajar'].'')."' class='btn btn-success btn-xs' title='Lihat'><i class='fa fa-eye'></i></a>
                          <a href='".base_url('admin/datamaster/editkelaspondokan?id='.$row['id_kelas_belajar'].'')."' class='btn btn-success btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                          <a href='#' class='btn btn-success btn-xs hapus' title='Hapus' id='".$row['id_kelas_belajar']."'><i class='fa fa-trash-o'></i></a>
                          </td>
                          <td>".$i."</td>
                          <td>".$row['tahun_ajaran']."</td>
                          <td>".$row['nama_kelas_belajar']."</td>
                          <td>".$row['nama_kelas']."</td>
                          <td>".$row['nama_lengkap']."</td>
                          <td>".$row['pondokan']."</td>
                          <td>".$row['tingkat']."</td>
                          <td><button class='btn ".($row['status_kelas']=="Aktif"?"btn-success":"btn-warning")." btn-xs edit'  title='Edit' id='".$row['id_kelas_belajar']."' data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-edit'></i> ".$row['status_kelas']."</button></td>
                          <td><a href='".base_url('admin/datamaster/lihatkelaspondokansantri?id='.$row['id_kelas_belajar'].'')."' class='btn btn-success btn-xs' title='Lihat'><i class='fa fa-list'></i> Santri</a></td>
                        </tr>
                      ";
                    }
                ?>
								</tbody>
							</table>
						</div>

					</section>
					<div>
					</div>
		</section>
	</section>
</section>

</section>


<div id="myModaledit" class="modal fade" role="dialog">
	<div class="modal-dialog" id="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content" id="modal-edit">
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>
