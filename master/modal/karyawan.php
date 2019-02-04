<?php
include "../config.php";
if(isset($_POST['hapus'])) {
	$id	= $_POST['hapus'];
	$sql=$conn->query("DELETE FROM guru WHERE id_g = '$id'");
	if($sql){
		echo "ok";
	}else{
		echo "Gagal";
	}
} 
elseif(isset($_POST['tambah']))
{	
	$nama 	= $_POST['tambah'];
	$alamat		= $_POST['alamat'];
	$mapel		= $_POST['mapel'];
	$foto	= $_POST['foto'];

	$sql=$conn->query("INSERT INTO guru (nama,alamat,mapel,foto) VALUES ('$nama','$alamat','$mapel','$foto')");
	if($sql){
		echo "ok";
	}else{
		echo "Gagal";
	}
}
elseif(isset($_POST['lihat']))
{	
	$id = $_POST['lihat'];

	$sql=$conn->query("select * from guru where id_g='$id'");
	if($sql){
		$r=$sql->fetch_assoc();
		echo json_encode($r);
	}else{
		echo "Gagal";
	}
}
elseif(isset($_POST['ubah']))
{	
	$id = $_POST['ubah'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$mapel = $_POST['mapel'];	
	$foto = $_POST['foto'];

	$sql=$conn->query("UPDATE guru SET  nama='$nama', alamat='$alamat', mapel='$mapel', foto='$foto' WHERE id_g='$id'");
	if($sql){
		echo "ok";
	}else{
		echo "Gagal";
	}
}
?>