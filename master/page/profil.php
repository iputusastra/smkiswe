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
        'isi': {
            required: true
        },
        'misi': {
            required: true
        },
        'isi': {
            required: true
        }
    },
    messages: {
        'isi': {
            required: 'Isikan isi '
        },
        'misi': 'Isikan misi',
        'isi': 'Isikan isi',
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
    <h1>PROFIL SEKOLAH</h1>
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

    	<a href="javascript:void(0)" data-toggle="tooltip" title="Edit User" class="btn btn-effect-ripple  btn-success" 
    	onclick="lihat(1)"><i class="fa fa-pencil"></i> Edit</a>
</div>
</div>
</div>

<div class="block full">
<div class="block-title">
<h2>Pofil Sekolah</h2>
</div>
<div class="table-responsive">
<table id="example-datatable" class="table table-striped table-bordered table-vcenter">
<?php
include "../config.php";
$sql = $conn->query("SELECT * FROM profil ORDER BY id_p ASC");
?>
<thead>
    <tr>
        <th class="text-center" style="width: 50px;">NO</th>
        <th>ISI</th>
        <th>MISI</th>
        <th>VISI</th>
        <th>FOTO</th>
        <th>act</th>
        
    </tr>
</thead>
<tbody>
    <?php 
    $no=0;
    while($r=$sql->fetch_assoc()){$no++;
    
    ?>
    <tr>
        <td class="text-center"><?php echo $no;?></td>
        <td><?php echo $r['isi'];?></td>
        <td><?php echo $r['misi'];?></td>
        <td><?php echo $r['visi'];?></td>
        <td><?php echo $r['foto'];?></td>
        <td><a href="javascript:void(0)" data-toggle="tooltip" title="Edit User" class="btn btn-effect-ripple  btn-success" 
    	onclick="lihat(1)"><i class="fa fa-pencil"></i> Edit</a></td>
       
    </tr>
    <?php } ?>
</tbody>
</table>
</div>
</div>



<div id="modal-a" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
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
                    <label class="col-md-2 control-label">isi <span class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="hidden" id="id_p" name="id_p">
                         <textarea type="text" id="isi" name="isi" class="form-control" placeholder="isi"></textarea>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">misi <span class="text-danger">*</span></label>
                    <div class="col-md-10">
                   <textarea type="text" id="misi" name="misi" class="form-control" placeholder="misi"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Visi <span class="text-danger">*</span></label>
                    <div class="col-md-10">
                    <textarea type="text" id="visi" name="visi" class="form-control" placeholder="visi"></textarea>
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

$( "#btn-a" ).click(function() {
$('#form-validation')[0].reset();
$('#submit').show();
$('#update').hide();
$('#judul').text('TAMBAH DATA PROFIL');
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
var isi  = $('#isi').val();
var misi    = $('#misi').val();
var visi  = $('#visi').val();
            
$.ajax({
url     : 'modal/profil.php',
data    : 'tambah='+isi+'&misi='+misi+'&isi='+isi, 
type    : 'POST',
dataType: 'html',
success : function(pesan){
if(pesan=='ok'){
    $('#modal-add').modal('hide');
    $('#form-validation')[0].reset();
    swal('SUKSES!', 'Tambah data guru berhasil', 'success');
    setTimeout(function(){ load('profil'); }, 100);
}
else{
    swal('PERINGATAN!', 'Tambah data profil gagal', 'warning');
}
},
});
}

function ubah(){
var id      = $('#id_p').val();
var isi  = $('#isi').val();
var misi    = $('#misi').val();
var visi  = $('#visi').val();
            
$.ajax({
url     : 'modal/profil.php',
data    : 'ubah='+id+'&isi='+isi+'&misi='+misi+'&visi='+visi+'$foto='+foto, 
type    : 'POST',
dataType: 'html',
success : function(pesan){
if(pesan=='ok'){
    $('#modal-a').modal('hide');
    $('#form-validation')[0].reset();
    swal('SUKSES!', 'Edit data guru berhasil', 'success');
    setTimeout(function(){ load('profil'); }, 1000);
}
else{
    swal('PERINGATAN!', 'Edit data profil gagal', 'warning');
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
url     : 'modal/profil.php',
data    : 'hapus='+id, 
type    : 'POST',
dataType: 'html',
success : function(pesan){
    if(pesan=='ok'){
        swal({title: "SUKSES!",text: "Data telah terhapus!",type:"success",timer: 1500,showConfirmButton: false});
        setTimeout(function(){ load('profilmoni'); }, 1000);
    }else{
        swal('PERINGATAN!', 'Hapus data profilmoni gagal', 'warning');
    }
},
});
});
}

function lihat(id_p){
$('#submit').hide();
$('#update').show();
$('#judul').text('EDIT PROFIL SEKOLAH');

$.ajax({
url     : 'modal/profil.php',
data    : 'lihat='+id_p, 
type    : 'POST',
dataType: 'JSON',
success : function(pesan){
if(pesan != null){
    $('#form-validation')[0].reset();
    $('#id_p').val(pesan.id_p);
    $('#isi').val(pesan.isi);
    $('#misi').val(pesan.misi);
    $('#visi').val(pesan.visi);
    $('#foto').val(pesan.foto);
    $('#modal-a').modal('show');
}
else{
    swal('PERINGATAN!', 'Lihat data Profil Sekolah gagal', 'warning');
}
},
});
}
</script>