<?php
include "../config.php";
if(isset($_POST['hapus'])) {
	$id	= $_POST['hapus'];
	$sql=$conn->query("DELETE FROM testi WHERE id_t = '$id'");
	if($sql){
		echo "ok";
	}else{
		echo "Gagal";
	}
} 
elseif(isset($_POST['tambah']))
{	
	$nama 	= $_POST['tambah'];
	$pekerjaan		= $_POST['pekerjaan'];
	$isi		= $_POST['isi'];

	$sql=$conn->query("INSERT INTO testi (nama,pekerjaan,isi,aktif) VALUES ('$nama','$pekerjaan','$isi','1')");
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
}
elseif(isset($_POST['lihat']))
{	
	$id = $_POST['lihat'];

	$sql=$conn->query("select * from testi where id_t='$id'");
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
	$pekerjaan = $_POST['pekerjaan'];
	$isi = $_POST['isi'];	

	$sql=$conn->query("UPDATE testi SET  nama='$nama', pekerjaan='$pekerjaan', isi='$isi' WHERE id_t='$id'");
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

	$sql=$conn->query("UPDATE testi SET  aktif='0'  WHERE id_t='$id'");
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
}
?>