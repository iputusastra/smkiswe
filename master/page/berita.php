<script type="text/javascript">

    App.datatables();
    $('#example-datatable').dataTable({
        columnDefs: [ { orderable: false, targets: [ 5 ] } ],
        pageLength: 10,
        lengthMenu: [[5, 10, 20], [5, 10, 20]]
    });
    $('.dataTables_filter input').attr('placeholder', 'Search');
    $('thead input:checkbox').click(function() {
        var checkedStatus   = $(this).prop('checked');
        var table           = $(this).closest('table');

        $('tbody input:checkbox', table).each(function() {
            $(this).prop('checked', checkedStatus);
        });
    });

    var genTable        = $('#general-table');
    var styleBorders    = $('#style-borders');

    $('#form-validation').validate({
        errorClass: 'help-block animation-pullUp',
        errorElement: 'div',
        errorPlacement: function(error, e) {
            e.parents('.form-group > div').append(error);
        },
        highlight: function(e) {
            $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
            $(e).closest('.help-block').remove();
        },
        success: function(e) {
            e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
            e.closest('.help-block').remove();
        },
        rules: {
            'judul': {
                required: true
            },
            'isi': {
                required: true
            },
            'gambar': {
                required: true
                        // minlength: 10
                    },
                    'kategori': {
                        required: true
                    }
                },
                messages: {
                    'judul': {
                        required: 'Isikan judul artikel'
                    },
                    'isi': 'Isikan isi artikel',
                    'gambar': 'Isikan gambar ',
                    'kategori': {
                        required: 'Isikan kategori artikel'
                    }
                }
            });

    $("#form-validation").submit(function(e) {
        e.preventDefault();
    });
</script>



<!-- Main content -->
<div class="row">
    <div class="col-lg-12">
        <div class="block full">
            <div class="block-title">
                <h2>ACTION</h2>
            </div>
            <a href="#modal-add" type="button" class="btn btn-effect-ripple btn-primary" data-toggle="modal" id="btn-add"><i class="fa fa-plus"></i> Tambah</a>

        </div>
    </div>
</div>



</br>

<div class="block full">
    <div class="block-title">
        <h2>Data Berita </h2>
    </div>
    <div class="table-responsive">
        <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
            <?php
            include "../config.php";
            $sql = $conn->query("SELECT artikel.id_b,artikel.judul,artikel.kategori,artikel.enabled, artikel.tgl_upload , user.nama FROM artikel left join user on artikel.id_user=user.id_user ORDER BY artikel.id_b ASC");
            ?>
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">NO</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th style="width: 120px;">Penulis</th>
                    <th class="text-center" style="width: 100px;"><i class="fa fa-flash"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no=0;
                while($r=$sql->fetch_assoc()){$no++;
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $no;?></td>
                        <td><?php echo $r['judul'];?></td>
                        <td><?php echo $r['kategori'];?></td>
                        <td><?php echo $r['tgl_upload'];?></td>
                        <td><?php echo $r['nama'];?></td>
                        <td>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit Berita" class="btn btn-effect-ripple btn-xs btn-success" onclick="lihat(<?php echo $r['id_b'];?>)"><i class="fa fa-pencil"></i></a>

                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit User" class="btn btn-effect-ripple btn-xs btn-success" onclick="lihat(<?php echo $r['id_b'];?>)"><i class="fa fa-pencil"></i></a>

                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete Berita" class="btn btn-effect-ripple btn-xs btn-danger" onclick="hapus(<?php echo $r['id_b'];?>)"><i class="fa fa-times"></i></a>


                            <?php

                            if (($r['enabled']==1)){  
                                echo '<a href="javascript:void(0)" data-toggle="tooltip" title="Berita Aktive" class="btn btn-effect-ripple btn-xs btn-warning" onclick="aktif('.$r['id_b'].')"><i class="fa fa-eye"></i></a>';
                            }else{
                                echo '<a href="javascript:void(0)" data-toggle="tooltip" title="Berita Terkunci" class="btn btn-effect-ripple btn-xs btn-warning" onclick="nonaktif('.$r['id_b'].')"><i class="fa fa-ban"></i></a>';
                            }
                            ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>




    <!-- Central Modal Small -->
    <div id="modal-add" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">

        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-large" role="document">


          <div class="modal-content">
            <div class="modal-header">

              <h2 class="modal-title w-100" id="juduld"></h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="form-validation" action="#" class="form-horizontal form-bordered">
                <div class="form-group">
                    <label class="col-md-2 control-label">Judul <span class="text-danger">*</span></label>
                    <div class="col-md-7">
                        <input type="hidden" id="id_b" name="id_b">
                        <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul artikel">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Isi <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <textarea id="isi" name="isi" rows="10" cols="9" class="form-control ckeditor" placeholder="Isi Artikel "></textarea>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Gambar <span class="text-danger">*</span></label>
                    <div class="col-md-5">
                        <input type="file" id="gambar" name="gambar" class="form-control" placeholder="gambar artikel">
                    </div>
                </div>

                <div class="form-group">
                 <label class="col-md-2 control-label">Kategori <span class="text-danger">*</span></label>
                 <div class="col-md-4">
                     <select id="kategori" name="kategori" class="form-control select2" multiple="multiple" data-placeholder="Kategori" style="width: 100%;">
                      <option value="Berita">Berita</option>
                      <option value="Pengumuman">Pengumuman</option>
                      <option value="OSIS">OSIS</option>
                      <option value="Pramuka">Pramuka</option>
                      <option value="Kegiatan">Kegiatan</option>
                  </select>
              </div>
          </div>





      </div>


  </div>
  <div class="modal-footer">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-success" id="submit">Submit</button>
        <button type="submit" class="btn btn-danger" id="update">Update</button>
    </div>
</div>
</div>
</div>
</div>
<!-- Central Modal Small -->






<script type="text/javascript">

    $( "#btn-add" ).click(function() {
        $('#form-validation')[0].reset();
        $('#submit').show();
        $('#update').hide();
        $('#juduld').text('TAMBAH DATA ARTIKEL');
    });

    $( "#submit" ).click(function() {
        if ($('#form-validation').valid()){
            simpan();
        }
        event.preventDefault();
    });

    $( "#update" ).click(function() {
        if ($('#form-validation').valid()){
            ubah();
        }
        event.preventDefault();
    });

    function lihat(id){
        $('#submit').hide();
        $('#update').show();
        $('#juduld').text('EDIT DATA ARTIKEL');

        $.ajax({
            url     : 'modal/berita.php',
            data    : 'lihat='+id, 
            type    : 'POST',
            dataType: 'JSON',
            success : function(pesan){
                if(pesan != null){
                    $('#form-validation')[0].reset();
                    $('#id_b').val(pesan.id_b);
                    $('#judul').val(pesan.judul);
                    $('#isi').val(pesan.isi);                
                    $('#kategori').val(pesan.kategori).change();
                    $('#modal-add').modal('show');
                }
                else{
                    swal('PERINGATAN!', 'Lihat data artikel gagal', 'warning');
                }
            },
        });
    }


    function simpan(){
        var judul  = $('#judul').val();
        var isi    = $('#isi').val();
        var gambar = $('#gambar').val();
        var kategori = $('#kategori').val();
        var id_user = $('#id_user').val();

        $.ajax({
            url     : 'modal/berita.php',
            data    : 'tambah='+judul+'&isi='+isi+'&gambar='+gambar+'&kategori='+kategori+'&id_user='+id_user,
            type    : 'POST',
            dataType: 'html',
            success : function(pesan){
                if(pesan=='ok'){
                    $('#modal-add').modal('hide');
                    $('#form-validation')[0].reset();
                    swal('SUKSES!', 'Tambah data artikel berhasil', 'success');
                    setTimeout(function(){ load('berita'); }, 1000);
                }
                else{
                    swal('PERINGATAN!', 'Tambah data artikel gagal', 'warning');
                }
            },
        });
    }

    function ubah(){
        var id      = $('#id_b').val();
        var judul  = $('#judul').val();
        var isi    = $('#isi').val();
        var gambar = $('#gambar').val();
        var kategori = $('#kategori').val();

        $.ajax({
            url     : 'modal/berita.php',
            data    : 'ubah='+id+'&judul='+judul+'&isi='+isi+'&alamat='+alamat+'&kategori='+kategori, 
            type    : 'POST',
            dataType: 'html',
            success : function(pesan){
                if(pesan=='ok'){
                    $('#modal-add').modal('hide');
                    $('#form-validation')[0].reset();
                    swal('SUKSES!', 'Edit data artikel berhasil', 'success');
                    setTimeout(function(){ load('berita'); }, 1000);
                }
                else{
                    swal('PERINGATAN!', 'Edit data artikel gagal', 'warning');
                }
            },
        });
    }

    function aktif(id){                        
        swal({
          title: "PERINGATAN!",
          text: "Apakah anda yakin ingin aktifkan artikel?",
          type: "info",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes!",
          closeOnConfirm: false
      },
      function(){
        $.ajax({
            url     : 'modal/berita.php',
            data    : 'aktif='+id, 
            type    : 'POST',
            dataType: 'html',
            success : function(pesan){
                if(pesan=='ok'){
                    swal({title: "SUKSES!",text: "Artikel telah Aktif!",type:"success",timer: 1500,showConfirmButton: false});
                    setTimeout(function(){ load('berita'); }, 1000);
                }else{
                    swal('PERINGATAN!', 'Edit data artikel gagal', 'warning');
                }
            },
        });
    });
    }
    function nonaktif(id){                        
        swal({
          title: "PERINGATAN!",
          text: "Apakah anda yakin ingin nonaktifkan artikel?",
          type: "info",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes!",
          closeOnConfirm: false
      },
      function(){
        $.ajax({
            url     : 'modal/berita.php',
            data    : 'aktif='+id, 
            type    : 'POST',
            dataType: 'html',
            success : function(pesan){
                if(pesan=='ok'){
                    swal({title: "SUKSES!",text: "Artikel telah Aktif!",type:"success",timer: 1500,showConfirmButton: false});
                    setTimeout(function(){ load('berita'); }, 1000);
                }else{
                    swal('PERINGATAN!', 'Edit data artikel gagal', 'warning');
                }
            },
        });
    });
    }

    function hapus(id){                        
        swal({
          title: "PERINGATAN!",
          text: "Apakah anda yakin ingin menghapus?",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes!",
          closeOnConfirm: false
      },
      function(){
        $.ajax({
            url     : 'modal/berita.php',
            data    : 'hapus='+id, 
            type    : 'POST',
            dataType: 'html',
            success : function(pesan){
                if(pesan=='ok'){
                    swal({title: "SUKSES!",text: "Data telah terhapus!",type:"success",timer: 1500,showConfirmButton: false});
                    setTimeout(function(){ load('berita'); }, 1000);
                }else{
                    swal('PERINGATAN!', 'Hapus data artikel gagal', 'warning');
                }
            },
        });
    });
    }

</script>


<script type="text/javascript">

  $('.select2').select2()


</script>
