<form action="halaman/petugas/petugastambah_aksi.php" method="post">
    <table>
        <tr>
            <td>ID Petugas</td>
            <td><input type="text" name="idpetugas" placeholder="Masukan ID Petugas"required></td>
        </tr>

        <tr>
            <td>Namapetugas</td>
            <td><input type="text" name="namapetugas" placeholder="Masukan Nama Petugas"required></td>
        </tr>

        <tr>
            <td>Hp</td>
            <td><input type="text" name="hp" placeholder="Masukan Hp petugas"required></td>
        </tr>

        <tr>
            <td>Username</td>
            <td><input type="text" name="username" placeholder="Masukan Username Petugas"required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password" placeholder="Masukan Password "required></td>
        </tr>
       

        <tr>
            <td></td>
            <td><input type="submit" name="tomboltambah" value="Tambah"><input type="submit" value="Kembali"onclick="history.back();"></td>
        </tr>
    </table>
</form>