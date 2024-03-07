<?php
    //koneksikan dengan database
    include "../../../koneksi.php";

    //ambil idpinjam yang akan dihapus sebagai referensi
    $idpetugas=$_GET['idpetugas'];

    //query untuk menghapus data pinjam
    mysqli_query($sambung,"delete from tbl_petugas where idpetugas='$idpetugas'");

    //arahkan ke halaman data pinjam setelah menghapus 1 data pinjam
    header("location:../../index.php?page=petugas");
?>