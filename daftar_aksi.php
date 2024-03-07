<?php
    include "koneksi.php";

    if(isset($_POST['tomboltambah'])){
        $idpetugas  = $_POST['idpetugas'];
        $namapetugas   = $_POST['namapetugas'];
        $hp = $_POST['hp'];
        $username = $_POST['username'];
        $password  = $_POST['password'];
        $level     = $_POST['level'];


        mysqli_query($sambung,"insert into tbl_petugas (idpetugas,namapetugas,hp,username,password,level) values ('$idpetugas','$namapetugas','$hp','$username','$password','$level')");
    }

    header("location:index.php ");