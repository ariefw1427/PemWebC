<?php
$hostname	= "localhost";
$username	= "root";
$password	= "";
$database	= "pasar";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if ($koneksi->connect_error) {
	echo "Gagal koneksi ke database : (" . $koneksi->connect_error . ")";
}