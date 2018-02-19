<script>
 $(document).ready(function(){

    $('#provinsi').change(function(){
        var id=$(this).val();
        $.ajax({
        url : "<?php echo base_url();?>santri/pendaftaran/datakotakab",
        method : "POST",
        data : {provinsi: id},
        async : false,
        dataType : 'json',
        success: function(data){
            var html ='<option value="" disabled selected>Pilih Kabupaten/Kota</option>';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value="'+data[i].nama_kota_kab+'">'+data[i].nama_kota_kab+'</option>';
                }
                $('#kabupaten_kota').html(html);

        }
        });
    });

    $('#kabupaten_kota').change(function(){
        var id=$(this).val();
        $.ajax({
        url : "<?php echo base_url();?>santri/pendaftaran/datakecamatan",
        method : "POST",
        data : {kecamatan: id},
        async : false,
        dataType : 'json',
        success: function(data){
            var html ='<option value="" disabled selected>Pilih Kecamatan</option>';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value="'+data[i].nama_kecamatan+'">'+data[i].nama_kecamatan+'</option>';
                }
                $('#kecamatan').html(html);

        }
        });
    });

    $('#kecamatan').change(function(){
        var id=$(this).val();
        $.ajax({
        url : "<?php echo base_url();?>santri/pendaftaran/datadesa",
        method : "POST",
        data : {desa: id},
        async : false,
        dataType : 'json',
        success: function(data){
            var html ='<option value="" disabled selected>Pilih Desa/Kelurahan</option>';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value="'+data[i].nama_kel_desa+'">'+data[i].nama_kel_desa+'</option>';
                }
                $('#desa_kelurahan').html(html);

        }
        });
    });



});

</script>