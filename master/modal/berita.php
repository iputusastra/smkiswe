<?php
include "../config.php";
if(isset($_POST['hapus'])) {
	$id	= $_POST['hapus'];
	$sql=$conn->query("DELETE FROM artikel WHERE id_b = '$id'");
	if($sql){
		echo "ok";
	}else{
		echo "Gagal";
	}
} 
elseif(isset($_POST['tambah']))
{	
	$judul	= $_POST['tambah'];
	$isi		= $_POST['isi'];
	$gambar		= $_POST['gambar'];
	$kategori	= $_POST['kategori'];
	$id_user	=$_POST['id_user'];
	$uploaddir = '../images/berita';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

	$sql=$conn->query("INSERT INTO artikel (judul,isi,gambar,kategori,id_user,enabled) 
		VALUES ('$judul','$isi','$gambar','$kategori','$id_user','0')");
	move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadfile;	
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
	}
	elseif(isset($_POST['lihat']))
	{	
		$id = $_POST['lihat'];

		$sql=$conn->query("select * from artikel where id_b='$id'");
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
		$judul= $_POST['no_ktp'];
		$isi = $_POST['isi'];
		$gambar = $_POST['gambar'];
		$kategori = $_POST['kategori'];

		$sql=$conn->query("UPDATE artikel SET judul='$judul', isi='$isi', gambar='$gambar', kategori='$kategori' WHERE id_b='$id'");
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
	}
	elseif(isset($_POST['aktif']))
	{	
		$id = $_POST['aktf'];

		$sql=$conn->query("UPDATE artikel SET enabled='1' WHERE id_b='$id'");
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
	}elseif(isset($_POST['nonaktif']))
	{	
		$id = $_POST['aktf'];

		$sql=$conn->query("UPDATE artikel SET enabled='0' WHERE id_b='$id'");
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
	}
	?>