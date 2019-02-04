Back Up Database
===================================================================
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
$table_name = "karyawan";
$backup_file  = "/tmp/karyawan.sql";
$sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";
 
mysql_select_db('test_db');
$backup = mysql_query( $sql, $koneksi );
if(! $backup )
{
  die('Gagal Backup: ' . mysql_error());
}
echo "Backup Berhasil\n";
mysql_close($koneksi );
?>


Restore Database
=================================================================
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
$table_name = "karyawan";
$backup_file  = "/tmp/karyawan.sql";
$sql = "LOAD DATA INFILE '$backup_file' INTO TABLE $table_name";
 
mysql_select_db('test_db');
$restore = mysql_query( $sql, $koneksi );
if(! $restore  )
{
  die('Gagal load data : ' . mysql_error());
}
echo "Load data berhasil\n";
mysql_close($koneksi);
?>