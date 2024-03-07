<h3>
    <center>Daftar Peminjaman Buku Perpustakaan</center>
</h3>
<p>
<h3>
    <center>SMK MUHAMMADIYAH 04 BOYOLALI</center>
</h3>
<link rel="stylesheet" href="../css/css.css">
<link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

<a href="index.php?page=pinjamtambah"><button>Peminjaman Buku</button></a>


<!--awal table-->
<table id="maintable" class="display compact cell-border" cellspacing="0" width="100%">
    <thead>
   
    <!--awal header table-->
    <tr bgcolor="#32df89">
        <td width="10%" align="center">ID Pinjam</td>
        <td width="20%" align="center">Petugas</td>
        <td width="10%" align="center">Siswa</td>
        <td width="20%" align="center">Judul Buku</td>
        <td width="15%" align="center">Waktu Pinjam</td>
        <td width="20%" align="center">Aksi</td>
    </tr>
    <!--akhir header table-->
    <tbody >
</thead>
    
    <?php
        //koneksi ke database melalui koneksi.php
        include "../koneksi.php";
        if(isset($_POST['cari'])){
            $kunci = $_POST['cari'];
            $ambildata = mysqli_query($sambung,"SELECT * FROM tbl_pinjam where id_pinjam like '%$kunci%' or idpetugas like '%$kunci%' or idsiswa like '%$kunci%' or idbuku like '%$kunci%' or waktupinjam like '%$kunci%'"); 
        }else

        //menentukan banyak nya data yang akan ditampilkan dalam 1 halaman
        $batas   = 10; 
        $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
        $mulai  = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
        
        //ambil data dari tabel tbl_peminjaman
        $ambildata1     = mysqli_query($sambung,"SELECT * FROM tbl_pinjam INNER JOIN tbl_petugas ON tbl_petugas.idpetugas=tbl_pinjam.idpetugas INNER JOIN tbl_siswa ON tbl_siswa.idsiswa=tbl_pinjam.idsiswa INNER JOIN tbl_buku ON tbl_buku.idbuku=tbl_pinjam.idbuku
        LIMIT $mulai, $batas");
        $ambildata2     = mysqli_query($sambung,"SELECT * FROM tbl_pinjam INNER JOIN tbl_petugas ON tbl_petugas.idpetugas=tbl_pinjam.idpetugas INNER JOIN tbl_siswa ON tbl_siswa.idsiswa=tbl_pinjam.idsiswa INNER JOIN tbl_buku ON tbl_buku.idbuku=tbl_pinjam.idbuku");
        $jumlahdata     = mysqli_num_rows($ambildata2);
        $jumlahhalaman  = ceil($jumlahdata / $batas);
        
        $nomor =$mulai+1;

        while ($tampildata = mysqli_fetch_array($ambildata1)) {
        
    ?>

        <!--awal menampilkan data dari tabel peminjaman ke halaman web-->
        <tr>
            <td> <?php echo $tampildata['id_pinjam'] ?></td>
            <td> <?php echo $tampildata['namapetugas'] ?></td>
            <td> <?php echo $tampildata['namasiswa']?></td>
            <td> <?php echo $tampildata['judul']?></td>
            <td> <?php echo $tampildata['waktupinjam']?></td>
            <td align="center">
                <a href="../admin/index.php?page=pinjamubah&id_pinjam=<?php echo $tampildata['id_pinjam'];?>">
                <button style=font-size:14 px >Edit</button>   
                </a>
                
                <a href="halaman/pinjam/pinjamhapus.php?id_pinjam=<?php echo $tampildata['id_pinjam'];?>" onclick="return confirm('Apa Anda yakin akan menghapus Data Peminjaman?')">
                <button style=font-size:14 px >Delete</button>    
                </a>
            </td>
        </tr>
        
        <!--akhir menampilkan data dari tabel buku ke halaman web-->

    <?php
        }
    ?>
     <tfoot style="background-color: #c0c0c0; color: #ffffff; font-size: 0.9em; ">
    <tr>
    <td width="10%" align="center"></td>
        <td width="20%" align="center"></td>
        <td width="10%" align="center"></td>
        <td width="20%" align="center"></td>
        <td width="15%" align="center"></td>
        <td width="20%" align="center"></td>
        </tr>
    </tfoot>
    </tbody>
</table>
<!--akhir table-->

<!--awal menentukan banyaknya halaman pagination-->
<?php
    $ambildata2 = mysqli_query($sambung, "select * from tbl_buku");
    $jumlahdata = mysqli_num_rows($ambildata2);
    $jumlahhalaman = ceil($jumlahdata/$batas);
?>
<!--akhir menentukan banyaknya halaman pagination-->

<p>

<!--awal navigasi pagination-->
<div align="center">
    <?php 
        for ($i=1; $i<=$jumlahhalaman; $i++) 
        { 
    ?>
        <a href="../admin/index.php?page=pinjam&halaman=<?php echo $i; ?>"><?php echo $i; ?></a>

    <?php 
        } 
    ?>
</div>
<script type="text/javascript" src="../js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../js/jszip.min.js"></script>
<script type="text/javascript" src="../js/pdfmake.min.js"></script>
<script type="text/javascript" src="../js/vfs_fonts.js"></script>
<script type="text/javascript" src="../js/buttons.html5.min.js"></script>
<script type="text/javascript" src="../js/buttons.print.min.js"></script>
<script type="text/javascript" src="../js/app.js"></script>
<script type="text/javascript" src="../js/jquery.mark.min.js"></script>
<script type="text/javascript" src="../js/datatables.mark.js"></script>
<script type="text/javascript" src="../js/buttons.colVis.min.js"></script>
<!--akhir navigasi paginatio