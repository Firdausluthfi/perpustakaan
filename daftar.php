<?php
include "koneksi.php";
$ambildata  =mysqli_query($sambung,"SELECT max(idpetugas) as kodeTerbesar FROM tbl_petugas");
$nomor =1;
$tampildata = mysqli_fetch_array($ambildata);
$huruf = "2";
?>
<link rel="stylesheet" href="style.css">
<form action="../perpustakaan/daftar_aksi.php" method="post">
   
       
        <div class="container">
	<div class="screen">
		<div class="screen__content">
            <form class="login">
        <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="idpetugas" class="login__input" placeholder="ID"  >
				</div>
        <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="namapetugas" class="login__input" placeholder="Nama" >
				</div> 
        <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="hp" class="login__input" placeholder="Hp" >
				</div>
		
        <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="username" class="login__input" placeholder="Username" >
				</div>
      
        <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="password" class="login__input" placeholder="Password" >
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="level" class="login__input" placeholder="Kode" >
				</div>
                <button class="button login__submit">
					<span class="button__text"><input type="submit" name="tomboltambah" value="Tambah" onclick="return confirm('Apa anda yakin ingin menambhkan ke data petugas ?')">  </span>
					<i class="button__icon fas fa-chevron-right"></i>
                    <button class="button login__submit">
				<input type="submit" name="tombolkembali" value="kembali" onclick="history.back();">
					<i class="button__icon fas fa-chevron-right"></i>
                </button>
                    <input name="level" class="form-control" style="visibility:hidden;" value="<?php echo $huruf ?>" readonly required="required">
                    

                </div>


				</form>      
                    <div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
           
  
   
  
</form>