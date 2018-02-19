<script>

   $('#datatable').DataTable({});

   $(".hapus").click(function (e) {
    var v_nis = this.id;
    $.confirm({
        title: 'Hapus!',
        content: 'Yakin ingin menghapus ?',
        buttons: {
            hapus: {
                text: 'Hapus',
                btnClass: 'btn-green',
                action: function(){
                    window.location.assign("<?php echo base_url() ?>admin/datamaster/santrihapus?nis="+v_nis);
                }
            },
            batal: function () {

            }

        }
        });
    });

</script>
<script type="text/javascript">
$(document).ready(function(){
  $('#id_provinsi').change(function(){
    var id=$(this).val();
    $.ajax({
      url : "<?php echo base_url();?>admin/datamaster/datakotakab",
      method : "POST",
      data : {id: id},
      async : false,
          dataType : 'json',
      success: function(data){
        var html = '<option value="">Pilih Kota dan Kabupaten</option>';
        var html2 = '<option value="">Pilih Kecamatan</option>';
              var i;
              for(i=0; i<data.length; i++){
                  html += '<option value="'+data[i].id_kota_kab+'">'+data[i].nama_kota_kab+'</option>';
              }
              $('.id_kota_kab').html(html);
              $('.id_kecamatan').html(html2);

      }
    });
  });

  $('#id_kota_kab').change(function(){
    var id=$(this).val();
    $.ajax({
      url : "<?php echo base_url();?>admin/datamaster/datakecamatan",
      method : "POST",
      data : {id: id},
      async : false,
          dataType : 'json',
      success: function(data){
        var html ='<option value="">Pilih Kecamatan</option>';
              var i;
              for(i=0; i<data.length; i++){
                  html += '<option value="'+data[i].id_kecamatan+'">'+data[i].nama_kecamatan+'</option>';
              }
              $('.id_kecamatan').html(html);

      }
    });
  });
});
</script>
