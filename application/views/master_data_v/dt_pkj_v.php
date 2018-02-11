<section id="content">
  <section class="vbox">
    <section class="scrollable padder">
      <div class="m-b-md">
      </div>
      <section class="panel panel-default">
        <header class="panel-heading">
          <a style="margin-bottom:9px;" href="<?php echo site_url('master_data_c/dt_pkj/add'); ?>">
            <button class="btn btn-s-md btn-success btn-rounded">Tambah data</button>
          </a>
          <h4 class="pull-right font-bold">Data Pekerjaan</h4>
        </header>

        <div class="table-responsive">
          <table class="table table-striped m-b-none" id="tbl_dt_pkj">
            <thead>
              <tr>
                <th>Kode Pekerjaan</th>
                <th>Nama Pekerjaan</th>
            		<th>Aksi</th>
              </tr>
            </thead>

            <tbody>
 	            <?php foreach($tb_pekerjaan as $tp){ ?>
                <tr style="height:12px">
       		        <td><?php echo $tp['kd_pkj']; ?></td>
       		        <td><?php echo $tp['nama_pkj']; ?></td>
 		              <td>
                    <a  class="pull-right" href="<?php echo site_url('master_data_c/dt_pkj/edit/'.$tp['kd_pkj']); ?>"><button data-toggle="tooltip" data-placement="bottom" title="Ubah" class="btn btn-xs btn-warning"><span class="fa fa-edit"></span></button></a>
                    <button style="margin-right:5px" data-toggle="modal" data-target="#<?php echo $tp['kd_pkj'] ?>" class="btn btn-xs btn-danger pull-right"><span data-toggle="tooltip" data-placement="bottom" title="Hapus" class="fa fa-trash-o"></span></button></a>
                  </td>
                </tr>
                <div class="modal" id="<?php echo $tp['kd_pkj'] ?>" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-danger">
                        <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                      </div>
                      <div class="modal-body">
                        <b>Apakah yakin menghapus data?</b>
                      </div>
                      <div class="modal-footer">
                        <a style="margin-left:5px" href="<?php echo site_url('master_data_c/dt_pkj/delete/'.$tp['kd_pkj']); ?>"><button type="button" class="btn btn-sm btn-danger">Konfirmasi</button></a>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
 	            <?php } ?>
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </section>
</section>

<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
<!-- App -->
<script src="<?php echo base_url('assets/js/app.js');?>"></script>
<script src="<?php echo base_url('assets/js/slimscroll/jquery.slimscroll.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/easypiechart/jquery.easy-pie-chart.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/sparkline/jquery.sparkline.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/flot/jquery.flot.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/flot/jquery.flot.tooltip.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/flot/jquery.flot.spline.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/flot/jquery.flot.pie.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/flot/jquery.flot.resize.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/flot/jquery.flot.grow.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/flot/demo.js');?>"></script>
<script src="<?php echo base_url('assets/js/calendar/bootstrap_calendar.js');?>"></script>
<script src="<?php echo base_url('assets/js/calendar/demo.js');?>"></script>
<script src="<?php echo base_url('assets/js/datatables/jquery.dataTables.js');?>"></script>
<script src="<?php echo base_url('assets/js/app.plugin.js');?>"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#tbl_dt_pkj').DataTable({});
  });
</script>
</body>
</html>