<!--<script>

    document.onload = disable_enable();
    function disable_enable(pilihan) {

        if(pilihan==0 || document.forms[0].id_penjemput.value==0) {

            document.forms[0].no_identitas.disabled=true;

        } else document.forms[0].no_identitas.disabled=false;

    }

</script>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function cek_database(){
        var id_penjemput = $("#id_penjemput").val();
        $.ajax({
            url: "<?php echo base_url('admin/perizinan/keluar') ?>",
            data:"id_penjemput="+id_penjemput ,
        }).success(function (data) {

            var json = data,
            obj = JSON.parse(json);
            $('#no_identitas').val(obj.no_identitas);
            $('#nama_penjemput').val(obj.nama_penjemput);
            $('#no_telp').val(obj.no_telp);
            $('#alamat_penjemput').val(obj.alamat_penjemput);
            $('#hubungan_penjemput').val(obj.hubungan_penjemput);

            //var $jenis_kelamin = $('input:radio[name=jenis_kelamin]');
		// if(obj.jenis_kelamin == 'laki-laki'){
		// 	$jenis_kelamin.filter('[value=laki-laki]').prop('checked', true);
		// }else{
		// 	$jenis_kelamin.filter('[value=perempuan]').prop('checked', true);
		// }
        });
    }
</script>