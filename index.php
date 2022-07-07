<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<center><h1>RUZI OPEN FILE </h1><br> <h5>"RuziOpenFile lebih dari sekadar berbagi dan penyimpanan. Lihatlah fitur-fitur top untuk membuat hidup Kita sederhana dan mudah, sebagai tempat penyimpanan file secara online RuziOpenFile memanjakan dan memeberikan keuntungan kepada pengguna dimana dalam berbagi file bisa dilakukan tanpa fleshdisk dan tanpa khawatir dengan virus yang terbawa didalam flahdisk"</h5></center>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	

 
 
 <div class="kotak_login">
		<p class="tulisan_login">Mau Upload File Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			
		</form>
		
	</div>
	<div class="kotak_download">
<?php include('fileumum.php');		?>
			</center>
		</form>
		
	</div>
 
</body>
</html>