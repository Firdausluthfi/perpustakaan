<h3>
    <center>Daftar Petugas Perpustakaan</center>
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

<a href="index.php?page=petugastambah"><button>Tambah Petugas</button></a>

<!--awal table-->

<table id="maintable" class="display compact cell-border" cellspacing="0" width="100%">
    <thead>

    <!--awal header table-->
    <tr bgcolor="#32df89">
       
        <td width="10%" align="center">ID Petugas</td>
        <td width="25%" align="center">Namapetugas</td>
        <td width="10%" align="center">Hp</td>
        <td width="20%" align="center">Username</td>
        <td width="20%" align="center">Password</td>
        <td width="15%" align="center">Aksi</td>
        
    </tr>
</thead>
    <tbody >
    <!--akhir header table-->

    <?php
        //koneksi ke database melalui koneksi.php
        include "../koneksi.php";
       
        //ambil data dari tabel tbl_buku
        $ambildata     = mysqli_query($sambung,"SELECT * FROM tbl_petugas");
        
        $nomor =1;

        while ($tampildata = mysqli_fetch_array($ambildata)) {
    ?>

        <!--awal menampilkan data dari tabel buku ke halaman web-->
        <tr>
          
            <td> <?php echo $tampildata['idpetugas'] ?></td>
            <td> <?php echo $tampildata['namapetugas'] ?></td>
            <td> <?php echo $tampildata['hp']?></td>
            <td> <?php echo $tampildata['username']?></td>
            <td> <?php echo $tampildata['password']?></td>
            
            <td align="center">
                <a href="../admin/index.php?page=petugasubah&idpetugas=<?php echo $tampildata['idpetugas'];?>">
                 <button style = "font-size :15 p"> Edit</button>  
                </a>
                
                <a href="halaman/petugas/petugashapus.php?idpetugas=<?php echo $tampildata['idpetugas'];?>" onclick="return confirm('Apa Anda yakin akan menghapus Data Petugas?')">
                <button style=font-size:14 px >Delete</button> 
                </a>
            </td>
        </tr>
        
        <!--akhir menampilkan data dari tabel buku ke halaman web-->

    <?php
        }
    ?><tfoot style="background-color: #c0c0c0; color: #ffffff; font-size: 0.9em; ">
    <tr>
    <td width="10%" align="center"></td>
        <td width="25%" align="center"></td>
        <td width="10%" align="center"></td>
        <td width="20%" align="center"></td>
        <td width="20%" align="center"></td>
        <td width="15%" align="center"></td>
        </tr>
    </tfoot>
    </tbody>
        
    
</table>
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
<!--akhir table-->