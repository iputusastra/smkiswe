<?php
session_start();
date_default_timezone_set("Asia/Jakarta");

// error_reporting(0);
include "config.php";

?>

 
<?php 

if ($_SESSION["level"]  =='1'){ ?>
<!DOCTYPE html>
<!--[if IE 9]>
<html class="no-js lt-ie10" lang="en">
<![endif]-->
<!--[if gt IE 9]>
<!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>APLIKASI REKENING PAM</title>

        <meta name="description" content="AppUI is a Web App Bootstrap Admin Template created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/plugins.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/themes/flat.css" id="theme-link">
        <link rel="stylesheet" href="css/select2.min.css">
        <link rel="stylesheet" type="text/css" href="plugin/sweetalert/dist/sweetalert.css">
        <link rel="stylesheet" type="text/css" href="DataTables/extensions/Buttons/css/buttons.dataTables.min.css">

        <link rel="stylesheet" href="css/select2.min.css">
        <script type="text/javascript" src="plugin/sweetalert/dist/sweetalert.min.js"></script>
        <script src="js/vendor/modernizr-3.3.1.min.js"></script>
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <script src="js/app.js"></script>
        <!-- <link rel="canonical" href="http://openexchangerates.github.io/accounting.js/" /> -->

    <script>
     $(document).ajaxStop(function() {
          //setTimeout(function(){
             $( ".se-pre-con" ).hide();
          //},1500);
      });
      $(document).ajaxStart(function() {
          $(".se-pre-con").show();
      });
      $(document).ajaxError(function() {
          //setTimeout(function(){
             $( ".se-pre-con" ).hide();
          //},1500);
      });
    </script>

<style type="text/css">
.se-pre-con {      
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    opacity: 0.9;
    background: url(https://garamina.com/fintech2/theme/images/new/Preloader_2.gif) center no-repeat #fff;
    } 
}
</style>



<!-- </head> -->
<!-- <body class="hold-transition skin-blue-light sidebar-mini"> -->
<!-- <div class="page-loading"></div> -->



    </head>
    <body>



        <!-- <div class="se-pre-con"></div> -->
        <div id="page-wrapper" class="page-loading">
            <div class="preloader">
                <div class="inner">
                    <div class="preloader-spinner themed-background hidden-lt-ie10"></div>
                    <h3 class="text-primary visible-lt-ie10"><strong>Loading..</strong></h3>
                </div>
            </div>
            <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
                <div id="sidebar">
                    <div id="sidebar-brand" class="themed-background">
                        <a href="#" class="sidebar-title">
                            <i class="gi gi-snowflake"></i> <span class="sidebar-nav-mini-hide"><strong>SMKIswe</strong></span>
                        </a>

                    </div>
                    <div id="sidebar-scroll">
                        <div class="sidebar-content">
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="#" id="dashboard" onclick="load('dashboard')"><i class="gi gi-snowflake sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                                </li>


                                <li class="sidebar-separator"><i class="fa fa-ellipsis-h"></i></li>
     

                                <li>
                                    <a href="#" id="berita" onclick="load('berita')"><i class="hi hi-file sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Berita</span></a>
                                </li>
                               <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-university sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Profil</span></a>
                                    <ul>
                                        <li><a href="#" id="profil" onclick="load('profil')">Profil</a></li>
                                        <li><a href="#" id="karyawan" onclick="load('karyawan')">Pengajar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-share-alt-square sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Jurusan</span></a>
                                    <ul>
                                        <li><a href="#" id="rpl" onclick="load('rpl')">RPL</a></li>
                                        <li><a href="#" id="tkr" onclick="load('tkr')">TKR</a></li>
                                    </ul>
                                </li>
                                 <li>
                                    <a href="#" id="galery" onclick="load('galeri')"><i class="gi gi-camera sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Galery</span></a>
                                </li>
                                 <li>
                                    <a href="#" id="testimoni" onclick="load('testimoni')"><i class="gi gi-tag sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Testimoni</span></a>
                                </li>
                                 <!--<li>
                                    <a href="#" id="pesan" onclick="load('pesan')"><i class="gi gi-comments sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Pesan</span></a>
                                </li>-->
                                 <li>
                                    <a href="#" id="user" onclick="load('user')"><i class="gi gi-user sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">User</span></a>
                                </li>                               
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div id="main-container">
                    <header class="navbar navbar-inverse navbar-fixed-top">
                        <ul class="nav navbar-nav-custom">
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                                    <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
                                </a>
                            </li>
                            <li class="hidden-xs animation-fadeInQuick">
                                <a href=""><strong>ADMINISTRATOR</strong></a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav-custom pull-right">
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="img/placeholders/avatars/avatar.jpg" alt="avatar">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    
                                    <li class="dropdown-header">
                                        <strong>ADMINISTRATOR</strong>
                                    </li>
                                     <li>
                                        <a href="#modal-u" data-toggle="modal" id="btn-u">
                                            <i class="fa fa-user fa-fw pull-right" ></i>
                                            Profil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="logout.php">
                                            <i class="fa fa-power-off fa-fw pull-right"></i>
                                            Log out
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </header>
                    <div id="page-content">
                    </div>
                </div>
            </div>
        </div>

<div class="modal fade" id="modal-u" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog" role="document">


      <div class="modal-content">
        <div class="modal-header">
          
          <h2 class="modal-title w-100" id="juduld">UPDATE DATA 
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span> </h2>
          </button>
        </div>
        <div class="modal-body">
                        <form id="form-validation" action="#" class="form-horizontal form-bordered">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Username <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="hidden" id="id" name="id">
                                    <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-md-4 control-label">Password Lama <span class="text-danger">*</span></label>
                                <div class="col-md-7">                                    
                                  <input type="text" id="password" name="password" class="form-control" placeholder="Password Lama">
                                </div>
                            </div>
                            <hr>
                             <div class="form-group">
                                <label class="col-md-4 control-label">Password Baru <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" id="passwordb" name="passwordb" class="form-control" placeholder="Password Baru">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-md-4 control-label">Konfirmasi Password Baru <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" id="passwordk" name="passwordk" class="form-control" placeholder="Password Baru">
                                </div>
                            </div>
                           
                                    
                    </div>
                        
           


        </div>
        <div class="modal-footer">
          <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-danger" id="update">Update</button>
                                </div>
        </div>
      </div>
    </div>
  </div>


        <!-- <script type="text/javascript" src="DataTables/extensions/Buttons/js/jquery.dataTables.min.js"></script> -->
        <script type="text/javascript" src="DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>

        <script type="text/javascript" src="DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
        <script type="text/javascript">


        function load(page) {

          $('#dashboard').prop('class','');
          $('#profil').prop('class','');
          $('#struktur').prop('class','');
          $('#karyawan').prop('class','');
          $('#rpl').prop('class','');
          $('#tkr').prop('class','');
          $('#galeri').prop('class','');
          $('#testimoni').prop('class','');
          $('#pesan').prop('class','');
          $('#user').prop('class','');
          $('#berita').prop('class','');
          $('#akun').prop('class','');
          $('#fb').prop('class','');

          $('#page-content').load('page/'+page+'.php');
          $('#'+page).prop('class', 'active');
        }
        load('dashboard');


        </script>

 <script type="text/javascript">

function ubah(){
var id      = $('#id').val();
var nama  = $('#nama').val();
var alamat    = $('#alamat').val();
var mapel  = $('#mapel').val();
var foto = $('#foto').val();
            
$.ajax({
url     : 'modal/user.php',
data    : 'ubah='+id+'&nama='+nama+'&alamat='+alamat+'&mapel='+mapel+'&foto='+foto, 
type    : 'POST',
dataType: 'html',
success : function(pesan){
if(pesan=='ok'){
    $('#modal-add').modal('hide');
    $('#form-validation')[0].reset();
    swal('SUKSES!', 'Edit data guru berhasil', 'success');
    setTimeout(function(){ load('karyawan'); }, 1000);
}
else{
    swal('PERINGATAN!', 'Edit data guru gagal', 'warning');
}
},
});
}


function lihat(id){
$('#update').show();
$('#juduld').text('EDIT DATA guru');

$.ajax({
url     : 'modal/pegawai.php',
data    : 'lihat='+id, 
type    : 'POST',
dataType: 'JSON',
success : function(pesan){
if(pesan != null){
    $('#form-validation')[0].reset();
    $('#id').val(pesan.id);
    $('#username').val(pesan.username);
    $('#modal-a').modal('show');
}
else{
    swal('PERINGATAN!', 'Lihat data gagal', 'warning');
}
},
});
}


</script>

    </body>
</html>


<?php
}else{
  header('location:index.php');
}
?>
