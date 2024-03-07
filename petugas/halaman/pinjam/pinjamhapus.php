<?php
    //koneksikan dengan database
    include "../../../koneksi.php";

    //ambil idpinjam yang akan dihapus sebagai referensi
    $id_pinjam=$_GET['id_pinjam'];

    //query untuk menghapus data pinjam
    mysqli_query($sambung,"delete from tbl_pinjam where id_pinjam='$id_pinjam'");

    //arahkan ke halaman data pinjam setelah menghapus 1 data pinjam
    header("location:../../index.php?page=pinjam");
?>