<?php
$host="localhost";
$user="root";
$pass="";
$db="smki";

//ini_set('display_errors',FALSE);
	
//koneksi database
$koneksi=mysql_connect($host,$user,$pass);
$koneksi_db=mysql_select_db($db,$koneksi);


?>
