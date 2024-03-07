<?php
    //koneksikan dengan database
    include "../../../koneksi.php";

    //ambil idpinjam yang akan dihapus sebagai referensi
    $idsiswa=$_GET['idsiswa'];

    //query untuk menghapus data pinjam
    mysqli_query($sambung,"delete from tbl_siswa where idsiswa='$idsiswa'");

    //arahkan ke halaman data pinjam setelah menghapus 1 data pinjam
    header("location:../../index.php?page=siswa");
?>