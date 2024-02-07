<?php
    include "../../../koneksi.php";

    if(isset($_POST['tomboltambah'])){
     $i_dpinjam    = $_POST['id_pinjam'];
        $idpetugas      = $_POST['idpetugas'];
        $idsiswa        = $_POST['idsiswa'];
        $idbuku         = $_POST['idbuku'];
        $waktupinjam    = $_POST['waktupinjam'];

        mysqli_query($sambung,"insert into tbl_pinjam (id_pinjam,idpetugas,idsiswa,idbuku,waktupinjam) values ('$id_pinjam','$idpetugas','$idsiswa','$idbuku','$waktupinjam')");
    }

    header("location:../../index.php?page=pinjam");
?>  