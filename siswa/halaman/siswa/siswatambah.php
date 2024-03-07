<form action="halaman/siswa/siswatambah_aksi.php" method="post">
    <table>
        <tr>
            <td>ID Siswa</td>
            <td><input type="text" name="idsiswa" placeholder="Masukan ID Siswa"required></td>
        </tr>

        <tr>
            <td>Nis</td>
            <td><input type="text" name="nis" placeholder="Masukan Nis Siswa"required></td>
        </tr>

        <tr>
            <td>Namasiswa</td>
            <td><input type="text" name="namasiswa" placeholder="Masukan Namasiswa"required></td>
        </tr>

        <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas" placeholder="Masukan kelas"required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" placeholder="Masukan Alamat"required></td>
        </tr>
        <tr>
            <td>Hp</td>
            <td><input type="text" name="hp" placeholder="Masukan Hp"required></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="tomboltambah" value="Tambah"><input type="submit" value="Kembali"onclick="history.back();"></td>
        </tr>
    </table>
</form>