<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin - www.ruzirinaldi.website</title>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Halaman Admin</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
<nav>

<div class="kotak_login">
<?php include('file.php');		?>
			</center>
		</form>
		
	</div>

	
	<br/>
	<br/>

	<a><a href="https://www.malasngoding.com/membuat-login-multi-user-level-dengan-php-dan-mysqli">@</a> - www.ruzirinaldi.website</a>
</body>
</html>