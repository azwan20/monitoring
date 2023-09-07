<?php

session_start();
require_once '../koneksi.php';

if (isset($_SESSION['login'])) {
	header("Location: ../index.php");
	exit;
}



if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	 
	$query = "SELECT * FROM user";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);

	// var_dump($username);
	// var_dump($password);
	// // var_dump($row);
	// die;
	if ($row['username'] === $username) {
		if ($row['password'] === $password) {
			$_SESSION['login'] = true;
			header("Location: ../index.php");
			exit;
		}else{
			var_dump(mysqli_error);
			exit;
		}
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title>Laman Login</title>
</head>
<body>
	
	<div class="wrapper-form-login d-flex bd-highlight">
		<div class="container-fluid ">
			<div class="row ">
					<div class="col-6">
						<img src="https://www.w3schools.com/css/img_5terre_wide.jpg" alt="">
					</div>

					<div class="col-6" >
							<div class="wrapper-login">

											<h1>Login</h1>
											<p>Sistem Monitoring Keadaan Laboratorium Fakultas Ilmu Komputer Universitas Muslim Indonesia</p>
										
						
											<form action="" method="post">
												<div class="mb-3">
													<label for="username" class="form-label">User Name</label>
													<input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
												</div>
												<div class="mb-3">
													<label for="password" class="form-label">Password</label>
													<input type="password" class="form-control" id="password" placeholder="Masukkan Password"  name="password">
												</div>

												<button type="submit" class="btn btn-primary btn-md" name="login">Login</button>

											</form>

											<footer class="container">
												<p>&copy; 2021 Laboratorium Terpadu Fakultas Ilmu Komputer UMI  &middot;</p>
											</footer>
							</div>
					</div>
			</div>
		</div>
	</div>
	 
</body>
</html>