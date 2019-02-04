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
        'pekerjaan': {
            required: true
        },
        'isi': {
            required: true
        }
    },
    messages: {
        'nama': {
            required: 'Isikan nama '
        },
        'pekerjaan': 'Isikan pekerjaan',
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
    <h1>Testimoni</h1>
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
<a href="#modal-a" type="button" class="btn btn-effect-ripple btn-primary" data-toggle="modal" id="btn-a"><i class="fa fa-plus"></i> Tambah</a>
</div>
</div>
</div>

<div class="block full">
<div class="block-title">
<h2>Data testi dan Guru</h2>
</div>
<div class="table-responsive">
<table id="example-datatable" class="table table-striped table-bordered table-vcenter">
<?php
include "../config.php";
$sql = $conn->query("SELECT * FROM testi ORDER BY id_t ASC");
?>
<thead>
    <tr>
        <th class="text-center" style="width: 50px;">NO</th>
        <th>NAMA</th>
        <th>PEKERJAAN</th>
        <th>ISI</th>
        <th>AKTIVE</th>
        <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
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
        <td><?php echo $r['pekerjaan'];?></td>
        <td><?php echo $r['isi'];?></td>
        <td><?php 
            if ($r['aktif']=1){
                echo"aktif";}
                else{
                    echo "non Aktive";
                }?>
            

        </td>
            

            
        <td>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit User" class="btn btn-effect-ripple btn-xs btn-success" onclick="lihat(<?php echo $r['id_t'];?>)"><i class="fa fa-pencil"></i></a>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete User" class="btn btn-effect-ripple btn-xs btn-danger" onclick="hapus(<?php echo $r['id_t'];?>)"><i class="fa fa-times"></i></a>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Aktive" class="btn btn-effect-ripple btn-xs btn-warning" onclick="aktif(<?php echo $r['id_t'];?>)"><i class="fa fa-file"></i></a>
        </td>
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
                    <label class="col-md-3 control-label">Nama <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="hidden" id="id_t" name="id_t">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" maxlength="16">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Pekerjaan <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                     <input Type="text" id="pekerjaan" name="pekerjaan" rows="5" class="form-control" placeholder="Pekerjaan">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Isi <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                    <textarea type="text" id="isi" name="isi" class="form-control" placeholder="pekerjaan guru"></textarea>

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
$('#judul').text('TAMBAH DATA TESTIMONI');
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
var nama  = $('#nama').val();
var pekerjaan    = $('#pekerjaan').val();
var isi  = $('#isi').val();
            
$.ajax({
url     : 'modal/testi.php',
data    : 'tambah='+nama+'&pekerjaan='+pekerjaan+'&isi='+isi, 
type    : 'POST',
dataType: 'html',
success : function(pesan){
if(pesan=='ok'){
    $('#modal-add').modal('hide');
    $('#form-validation')[0].reset();
    swal('SUKSES!', 'Tambah data guru berhasil', 'success');
    setTimeout(function(){ load('testimoni'); }, 100);
}
else{
    swal('PERINGATAN!', 'Tambah data Testimoni gagal', 'warning');
}
},
});
}

function ubah(){
var id      = $('#id_t').val();
var nama  = $('#nama').val();
var pekerjaan    = $('#pekerjaan').val();
var isi  = $('#isi').val();
            
$.ajax({
url     : 'modal/testi.php',
data    : 'ubah='+id+'&nama='+nama+'&pekerjaan='+pekerjaan+'&isi='+isi, 
type    : 'POST',
dataType: 'html',
success : function(pesan){
if(pesan=='ok'){
    $('#modal-add').modal('hide');
    $('#form-validation')[0].reset();
    swal('SUKSES!', 'Edit data guru berhasil', 'success');
    setTimeout(function(){ load('testimoni'); }, 1000);
}
else{
    swal('PERINGATAN!', 'Edit data Testimoni gagal', 'warning');
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
url     : 'modal/testi.php',
data    : 'hapus='+id, 
type    : 'POST',
dataType: 'html',
success : function(pesan){
    if(pesan=='ok'){
        swal({title: "SUKSES!",text: "Data telah terhapus!",type:"success",timer: 1500,showConfirmButton: false});
        setTimeout(function(){ load('testimoni'); }, 1000);
    }else{
        swal('PERINGATAN!', 'Hapus data Testimoni gagal', 'warning');
    }
},
});
});
}

function lihat(id_t){
$('#submit').hide();
$('#update').show();
$('#judul').text('EDIT DATA guru');

$.ajax({
url     : 'modal/testi.php',
data    : 'lihat='+id_t, 
type    : 'POST',
dataType: 'JSON',
success : function(pesan){
if(pesan != null){
    $('#form-validation')[0].reset();
    $('#id_t').val(pesan.id_t);
    $('#nama').val(pesan.nama);
    $('#pekerjaan').val(pesan.pekerjaan);
    $('#isi').val(pesan.isi);
    $('#modal-a').modal('show');
}
else{
    swal('PERINGATAN!', 'Lihat data Testimoni gagal', 'warning');
}
},
});
}
</script>