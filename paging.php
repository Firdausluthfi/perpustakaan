<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Halaman dengan Pagination</title>
    </head>

    <body>
        <h2><center>Daftar Buku Perpustakaan</center></h2>
        <h2><center>SMK MUHAMMADIYAH 04 BOYOLALI  </center></h2>

        <table align="center" border="1">
            <tr>
                <th width="30">No</th>
                <th width="60">ID Buku</th>
                <th width="100">Judul</th>
                <th width="100">Pengarang</th>
                <th width="200">Penerbit</th>
                <th width="100">Aksi</th>
            </tr>
            
                <?php
                    //koneksi ke database melalui file koneksi.php
                    include "../koneksi.php";

                    //menentukan banyak nya data yang akan ditampilkan dalam 1 halaman
                    $batas   = 10; 
                    $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                    $mulai  = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
                    
                    //ambil data dari tabel tbl_buku
                    $ambildata1     = mysqli_query($sambung,"SELECT * FROM tbl_buku LIMIT $mulai, $batas");
                    $ambildata2     = mysqli_query($sambung,"SELECT * FROM tbl_buku");
                    $jumlahdata     = mysqli_num_rows($ambildata2);
                    $jumlahhalaman  = ceil($jumlahdata / $batas);
                    $nomor =$mulai+1;
                    
                    while ($tampildata = mysqli_fetch_array($ambildata1)) {
                ?>
                    <!--awal menampilkan data dari tabel buku ke halaman web-->
                    <tr>
                        <td> <?php echo $nomor++; ?> </td>
                        <td> <?php echo $tampildata['idbuku']; ?> </td>
                        <td> <?php echo $tampildata['judul']; ?> </td>
                        <td> <?php echo $tampildata['pengarang']; ?> </td>
                        <td> <?php echo $tampildata['penerbit']; ?> </td>
                        <td> Edit | Delete </td>
                    </tr>
                    <!--akhir menampilkan data dari tabel buku ke halaman web-->

                <?php
                    }
                ?>
        </table>

        <p>


        <?php 
            for ($i=1; $i<=$jumlahhalaman; $i++) 
            { 
        ?>

            <a href="?halaman=<?php echo $i; ?>">
                <?php echo $i;?>
            </a>

        <?php 
            }
        ?>
    </body>
</html>