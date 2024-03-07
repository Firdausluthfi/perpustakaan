<!DOCTYPE html>
<html>
    <head>
        <title>Perpustakaan | SMK Negeri 1 Cimahi</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2><center>Aplikasi Perpustakaan</center></h2>
        <h2><center>SMK Muhammadiyah 04 Boyolali</center></h2>
		<center> <?php
            if(isset($_GET['pesan']))
            {
                if($_GET['pesan']=='gagal')
                {
                    echo "<script> alert('Gagal Login, username atau password salah')</script>";
                }
                else
                if($_GET['pesan']=='logout')
                {
                    echo "<script>alert('Anda sudah logout')</script>";
                }
                if($_GET['pesan']=='belum_login')
                {
                    echo "Anda harus login dahulu untuk mengakses halaman admin";
                }
            }
        ?></center>
       
        
        <form method="post" action="login_aksi.php" name="formlogin">
            <div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="nama" class="login__input" placeholder="User name / Email" required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="katakunci" class="login__input" placeholder="Password" required>
				</div>
				<button class="button login__submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>	
				<button class="button login__submit">
					<a href="../perpustakaan/daftar.php" target="_blank">Daftar</a>
					<i class="button__icon fas fa-chevron-right"></i>
						
			</form>
			
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
       
     
		 </form>
    </body>
</html>