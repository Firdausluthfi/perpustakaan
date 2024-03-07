<div class="konten">
                <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                include "halaman/home.php";
                break;
            case 'buku':
                include "halaman/buku/buku.php";
                break;
            case 'pinjam':
                include "halaman/pinjam/pinjam.php";
                break;
            case 'petugas':
                include "halaman/petugas/petugas.php";
                break;
            case 'bukutambah':
                include "halaman/buku/bukutambah.php";
                break;
            case 'bukuubah':
                    include "halaman/buku/bukuubah.php";
                    break;
                    case 'pinjamtambah':
                        include "halaman/pinjam/pinjamtambah.php";
                        break;
                                case 'petugastambah':
                                    include "halaman/petugas/petugastambah.php";
                                    break;
                                    case 'petugasubah':
                                        include "halaman/petugas/petugasubah.php";
                                        break;
                                        case 'pinjamubah':
                                            include "halaman/pinjam/pinjamubah.php";
                                            break;
                                            case 'petugashapus':
                                                include "halaman/petugas/petugashapus.php";
                                                break;
                                                case 'siswahapus':
                                                    include "halaman/siswa/siswahapus.php";
                                                    break;
                                                    case 'daftar':
                                                        include "../perpustakaan/daftar.php";
                                                        break;


            default:
                echo "Maaf halaman yang anda tuju tidak ada";
                break;
        }
    }
    ?>
                </div>