<?php
include "../config.php";
if(isset($_POST['hapus'])) {
	$id	= $_POST['hapus'];
	$sql=$conn->query("DELETE FROM profil WHERE id_p = '$id'");
	if($sql){
		echo "ok";
	}else{
		echo "Gagal";
	}
} 
elseif(isset($_POST['tambah']))
{	
	$isi 	= $_POST['tambah'];
	$misi		= $_POST['misi'];
	$isi		= $_POST['isi'];

	$sql=$conn->query("INSERT INTO profil (isi,misi,isi,aktif) VALUES ('$isi','$misi','$isi','1')");
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
}
elseif(isset($_POST['lihat']))
{	
	$id = $_POST['lihat'];

	$sql=$conn->query("select * from profil where id_p='$id'");
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
	$isi = $_POST['isi'];
	$misi = $_POST['misi'];
	$visi = $_POST['visi'];	
	$foto = $_POST['foto'];	

	$sql=$conn->query("UPDATE profil SET  isi='$isi', misi='$misi', visi='$visi' WHERE id_p='$id'");
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
}
elseif(isset($_POST['aktif']))
{	
	$id = $_POST['aktif'];
	$aktif = $_POST['aktif'];	

	$sql=$conn->query("UPDATE profil SET  aktif='0'  WHERE id_p='$id'");
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
}
?>