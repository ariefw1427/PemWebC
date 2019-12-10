<?php
session_start();
if (!$_SESSION['user_login']) {
	?>
	<script>
		alert('Login dulu gaess!');
		document.location = 'index.php';
	</script>
	<?php
}else{
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Beranda</title>
	</head>
	<body>
		<h4>tadaa!! <br/>berhasil Login</h4>
		<a href="logout.php">Keluar</a>
	</body>
	</html>
	<?php
}
?>