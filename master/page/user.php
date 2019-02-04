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
                    
                    'nama': {
                        required: true
                    },
                    'password': {
                        required: true,
                        minlength: 5,
                        // minlength: 10
                    },
                    
                    'username': {
                        required: true,
                        minlength: 5,
                        // minlength: 10
                    },
                    'konfir': {
                        required: true,
                        minlength: 5,
                        // minlength: 10
                    }
                },
                messages: {
                 
                    'nama': 'Isikan nama Username',
                    'password': {
                        required: 'harus di isi',
                        minlength: 'Jumlah data harus lebih dari 5'
                    },
                    'username': {
                        required: 'harus di isi',
                        minlength: 'Jumlah data harus lebih dari 5'
                    },
                    'konfir': {
                        required: 'harus di isi',
                        minlength: 'Jumlah data harus lebih dari 5'
                    }
                }
                
            });

            $("#form-validation").submit(function(e) {
                e.preventDefault();
            });
        </script>


        <!-- Table Styles Header -->
        <div class="content-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="header-section">
                        <h1>PEGAWAI</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="block full">
                    <div class="block-title">
                        <h2>ACTION</h2>
                    </div>
                    <?php
                    if (($a['level'] == '1')){ 
                        echo'<a href="#modal-add" type="button" class="btn btn-effect-ripple btn-primary" data-toggle="modal" id="btn-add"><i class="fa fa-plus"></i> Tambah</a>';} ?>
                    </div>
                </div>
            </div>

            <div class="block full">
                <div class="block-title">
                    <h2>Data Pegawai</h2>
                </div>
                <div class="table-responsive">
                    <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
                        <?php
                        include "../config.php";
                        $sql = $conn->query("SELECT * FROM user ORDER BY id ASC");
                        ?>
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">NO</th>
                                <th>NAMA</th>
                                <th>USERNAME</th>
                                <th>LEVEL</th>
                                <th>TGL LOGIN</th>
                                <th class="text-center" style="width: 90px;"><i class="fa fa-flash"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no=0;
                            while($r=$sql->fetch_assoc()){$no++;
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $no;?></td>
                                    <td><?php echo $r['nama'];?></td>
                                    <td><?php echo $r['username'];?></td>
                                    <td><?php 
                                    if ($r['level']=1){
                                        echo"admin";}
                                        else{
                                            echo "siswa";
                                        }?>
                                        
                                    </td>
                                    <td><?php echo $r['tgl_login'];?></td>
                                    <td>
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit User" class="btn btn-effect-ripple btn-xs btn-success" onclick="lihat(<?php echo $r['id'];?>)"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete User" class="btn btn-effect-ripple btn-xs btn-danger" onclick="hapus(<?php echo $r['id'];?>)"><i class="fa fa-times"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete User" class="btn btn-effect-ripple btn-xs btn-danger" onclick="lock(<?php echo $r['id'];?>)"><i class="fa fa-times"></i></a>

                                        <?php
                                        if ($r['level'] == '1'){ 
                                           if (($r['enabled']==1)){  
                                            echo '<a href="javascript:void(0)" data-toggle="tooltip" title="User Aktive" class="btn btn-effect-ripple btn-xs btn-warning" onclick="kunci('.$r['id'].'")><i class="fa fa-eye"></i></a>';
                                        }else{
                                            echo '<a href="javascript:void(0)" data-toggle="tooltip" title="User Terkunci" class="btn btn-effect-ripple btn-xs btn-warning" onclick="kunci('.$r['id'].'")><i class="fa fa-ban"></i></a>';
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>



        <div id="modal-add" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="block">
                                <div class="block-title">
                                    <div class="block-options pull-right">
                                        <button type="button" class="btn btn-danger" id="delete" data-dismiss="modal">Close</button>
                                    </div>
                                    <h2 id="judul"></h2>
                                </div>
                                <form id="form-validation" action="#" class="form-horizontal form-bordered">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Nama <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input type="hidden" id="id" name="id">
                                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Pengguna" maxlength="16">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">User Name <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input type="text" id="username" name="username" class="form-control" placeholder="User Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Password <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Level</label>
                                        <div class="col-md-3">
                                            <select name="level" id="level" name="level" class="form-control"  style="width: 100%;">
                                                <option value="1">Admin</option>
                                                <option value="2">Siswa</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group form-actions pull-right">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button type="submit" class="btn btn-success" id="submit">Submit</button>
                                            <button type="submit" class="btn btn-danger" id="update">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script type="text/javascript">

            $( "#btn-add" ).click(function() {
                $('#form-validation')[0].reset();
                $('#submit').show();
                $('#update').hide();
                $('#judul').text('TAMBAH DATA PEGAWAI');
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

            function simpan(){
                var nama    = $('#nama').val();
                var username  = $('#username').val();
                var password = $('#password').val();
                var level  = $('#level').val();                     
                $.ajax({
                    url     : 'modal/pegawai.php',
                    data    : 'tambah='+nama+'&username='+username+'&password='+password+'&level='+level, 
                    type    : 'POST',
                    dataType: 'html',
                    success : function(pesan){
                        if(pesan=='ok'){
                            $('#modal-add').modal('hide');
                            $('#form-validation')[0].reset();
                            swal('SUKSES!', 'Tambah data user berhasil', 'success');
                            setTimeout(function(){ load('user'); }, 1000);
                        }
                        else{
                            swal('PERINGATAN!', 'Tambah data user gagal', 'warning');
                        }
                    },
                });
            }

            function ubah(){
                var id      = $('#id_peg').val();
                var no_ktp  = $('#no_ktp').val();
                var nama    = $('#nama').val();
                var alamat  = $('#alamat').val();
                var no_telp = $('#no-telp').val();
                
                $.ajax({
                    url     : 'modal/pegawai.php',
                    data    : 'ubah='+id+'&no_ktp='+no_ktp+'&nama='+nama+'&alamat='+alamat+'&no_telp='+no_telp, 
                    type    : 'POST',
                    dataType: 'html',
                    success : function(pesan){
                        if(pesan=='ok'){
                            $('#modal-add').modal('hide');
                            $('#form-validation')[0].reset();
                            swal('SUKSES!', 'Edit data pegawai berhasil', 'success');
                            setTimeout(function(){ load('user'); }, 1000);
                        }
                        else{
                            swal('PERINGATAN!', 'Edit data user gagal', 'warning');
                        }
                    },
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
                    url     : 'modal/pegawai.php',
                    data    : 'hapus='+id, 
                    type    : 'POST',
                    dataType: 'html',
                    success : function(pesan){
                        if(pesan=='ok'){
                            swal({title: "SUKSES!",text: "Data telah terhapus!",type:"success",timer: 1500,showConfirmButton: false});
                            setTimeout(function(){ load('user'); }, 1000);
                        }else{
                            swal('PERINGATAN!', 'Hapus data user gagal', 'warning');
                        }
                    },
                });
            });
            }

            function lihat(id){
                $('#submit').hide();
                $('#update').show();
                $('#judul').text('EDIT DATA PENGGUNA');

                $.ajax({
                    url     : 'modal/pegawai.php',
                    data    : 'lihat='+id, 
                    type    : 'POST',
                    dataType: 'JSON',
                    success : function(pesan){
                        if(pesan != null){
                            $('#form-validation')[0].reset();
                            $('#id').val(pesan.id);
                            $('#nama').val(pesan.nama);
                            $('#username').val(pesan.username);
                            $('#password').val(pesan.password);
                            $('#level').val(pesan.level);
                            $('#modal-add').modal('show');
                        }
                        else{
                            swal('PERINGATAN!', 'Lihat data user gagal', 'warning');
                        }
                    },
                });
            }
        </script>