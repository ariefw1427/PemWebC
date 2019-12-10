<!DOCTYPE html>
<html>
<head>
	<title>Pasar - Login</title>
	<style>
		.form-login{
			margin-left: 30%;
			margin-top: 20%;
			margin-right: 30%;
			border-radius: 5px;
			background-color: #beb1b1;
		}
		.form-control{
			border-radius: 5px;
			width: 100%;
			background-color: whitesmoke;
		}
		.form-title{
			font-family: arial;
			font-size: 40px;
			color: #7b7bc6;
		}
		.label{
			font-family: arial;
			font-size: 20px;
			color: #fff;
		}
		.btn-login{
			font-family: arial;
			font-size: 25px;
			background-color: #5f8bb1;
			border-radius: 5px;
		}
	</style>
</head>
<body>
<fieldset class="form-login">
	<legend class="form-title">Login Admin</legend>
	<form method="POST" action="PLogin.php" onsubmit="return validateForm()">
		<label class="label">Username</label>
		<input type="text" name="username" class="form-control" required> <br/>
		<label class="label">Password</label>
		<input type="password" name="password" class="form-control" required> <br/><br/>
		<button type="submit" class="btn-login">
			LogIn
		</button>
	</form>
</fieldset>
</body>
</html>