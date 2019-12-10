<!DOCTYPE html>
<html>
<head>
	<title>Daftar Buah</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="index.html" class="navbar-brand">Pasar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.html">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="home.html">Daftar Buah</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="tentang.html">Tentang Kami</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="jumbotron">
		<h1 class="display-4">Pasar Buah</h1>
		<p class="lead">Selamat datang di pasar buah, anda belanja kami kaya</p>
	</div>

	<h3 style="text-align: center;">Daftar Buah</h3>
	<a style="float: right;" href="tambah_buah.html" class="btn btn-dark btn-sm">Tambah Buah</a>
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Buah</th>
					<th>Jenis Buah</th>
					<th>Stok</th>
					<th>Harga</th>
				</tr>
			</thead>	
			<tbody>
				<?php
				include "koneksi.php";
				// buat query sql
				$sql 	= "SELECT * FROM tb_buah";
				$buah 	= mysqli_query($koneksi, $sql);
				$no=1;
				foreach ($buah as $b) {
					?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $b['nama_buah'] ?></td>
						<td><?php echo $b['jenis_buah'] ?></td>
						<td><?php echo $b['stok_buah'] ?></td>
						<td><?php echo $b['harga_buah'] ?></td>
					</tr>
					<?php
					$no++;
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>