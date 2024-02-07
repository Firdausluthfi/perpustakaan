<h3>
    <center>Daftar Buku Perpustakaan</center>
    <link rel="stylesheet" href="../css/css.css">
</h3>
<p>
<h3>
    <center>SMK MUHAMMADIYAH 04 BOYOLALI</center>
</h3>
<div class="tambah-menu">   
    <a href="index.php?page=bukutambah">Tambah Buku</a>
</div>

<!--awal table-->
<table align="center" border="1">
    <!--awal header table-->
    <tr>
        <td width="10%" align="center">ID Buku</td>
        <td width="30%" align="center">Judul</td>
        <td width="10%" align="center">Pengarang</td>
        <td width="25%" align="center">Penerbit</td>
        <td width="20%" align="center">Aksi</td>
    </tr>
    <!--akhir header table-->

    <?php
        //koneksi ke database melalui koneksi.php
        include "../koneksi.php";
        
        //ambil data dari tabel tbl_buku
        $ambildata     = mysqli_query($sambung,"SELECT * FROM tbl_buku");
        $nomor =1;

        while ($tampildata = mysqli_fetch_array($ambildata)) {
    ?>

        <!--awal menampilkan data dari tabel buku ke halaman web-->
        <tr>
            <td> <?php echo $tampildata['idbuku'] ?></td>
            <td> <?php echo $tampildata['judul'] ?></td>
            <td> <?php echo $tampildata['pengarang']?></td>
            <td> <?php echo $tampildata['penerbit']?></td>
            <td align="center">
                <a href="../admin/index.php?page=bukuubah&idbuku=<?php echo $tampildata['idbuku'];?>">
                    Edit
                </a>
                |
                <a href="halaman/buku/bukuhapus.php?idbuku=<?php echo $tampildata['idbuku'];?>" onclick="return confirm('Apa Anda yakin akan menghapus Data Buku?')">
                    Delete
                </a>
            </td>
        </tr>
        <!--akhir menampilkan data dari tabel buku ke halaman web-->

    <?php
        }
    ?>
</table>
<!--akhir table-->