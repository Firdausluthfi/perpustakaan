<form action="halaman/buku/bukutambah_aksi.php" method="post">
    <table>
        <tr>
            <td>ID Buku</td>
            <td><input type="text" name="idbuku" placeholder="Masukan ID Buku"required></td>
        </tr>

        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul" placeholder="Masukan Judul Buku"required></td>
        </tr>

        <tr>
            <td>Pengarang</td>
            <td><input type="text" name="pengarang" placeholder="Masukan Nama Pengarang"required></td>
        </tr>

        <tr>
            <td>Penerbit</td>
            <td><input type="text" name="penerbit" placeholder="Masukan Nama Penerbit"required></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="tomboltambah" value="Tambah"> <input type="submit" value="Kembali"onclick="history.back();"></td>
        </tr>
    </table>
</form>