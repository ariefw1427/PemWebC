<?php
include "koneksi.php";

$namaBuah  = $_POST['nama_buah'];
$jenisBuah = $_POST['jenis_buah'];
$stokBuah  = $_POST['stok_buah'];
$hargaBuah = $_POST['harga_buah'];

$tmpName 	= $_FILES['foto']['tmp_name'];
$folder 	= "gambar/".$_FILES['foto']['name'];
$upload 	= move_uploaded_file($tmpName, $folder);

$simpan = "INSERT INTO tb_buah VALUES ('$namaBuah','$jenisBuah','$stokBuah','$hargaBuah','$folder')";

if ($upload) {
	mysqli_query($koneksi, $simpan);
	echo "<script language='JavaScript'>
	alert('Buah berhasil di tambah!')
	document.location = 'home.php'
	</script>";
}else{
	echo "Lapor! ada error di ". mysqli_error($koneksi);
}
