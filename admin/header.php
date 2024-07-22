<?php
session_start();
include '../koneksi.php';

if (!isset($_SESSION['status_login'])) {
    echo "<script>window.location = '../login.php?msg=Harap Login Terlebih Dahulu!'</script>";
    exit;
}

date_default_timezone_set("Asia/Jakarta");

$identitas = mysqli_query($conn, "SELECT * FROM pengaturan ORDER BY id DESC LIMIT 1");
$d = mysqli_fetch_object($identitas);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../uploads/identitas/<?= htmlspecialchars($d->favicon, ENT_QUOTES, 'UTF-8') ?>">
    <title>Panel Admin - <?= htmlspecialchars($d->nama, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tiny.cloud/1/8t8kpwvnvpk78ko0wmbkyw1bqs83v17w6yq3pd95zr71w683/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
</head>
<body class="bg-light">

    <!-- Navbar -->
    <div class="navbar">
        <div class="container">
            <!-- Navbar Brand -->
            <h2 class="nav-brand float-left"><a href=""><?= htmlspecialchars($d->nama, ENT_QUOTES, 'UTF-8') ?></a></h2>
            
            <!-- Navbar Menu -->
            <ul class="nav-menu float-left">
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="pengguna.php">Pengguna</a></li>
                <li><a href="guru.php">Guru</a></li>
                <li><a href="galeri.php">Galeri</a></li>
                <li><a href="informasi.php">Informasi</a></li>
                <li><a href="visimisi-index.php">Visi dan Misi</a></li>
                <li>
                    <a href="#">Pengaturan<i class="fa fa-caret-down"></i></a>
                    <!-- Sub Menu -->
                    <ul class="dropdown">
                        <li><a href="identitas-sekolah.php">Identitas Sekolah</a></li>
                        <li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
						<li><a href="kepsek-index.php">Kepala Sekolah</a></li>
                       
                    </ul>
                </li>
            </ul>
            <ul class="nav-menu float-left">
                <li>
                    <a href="#"><?= isset($_SESSION['uname']) ? htmlspecialchars($_SESSION['uname'], ENT_QUOTES, 'UTF-8') : 'Pengunjung' ?>
                        (<?= isset($_SESSION['ulevel']) ? htmlspecialchars($_SESSION['ulevel'], ENT_QUOTES, 'UTF-8') : 'Pengunjung' ?>)
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- Sub Menu -->
                    <ul class="dropdown">
                        <li><a href="ubah-password.php">Ubah Password</a></li>
                        <li><a href="logout.php">Keluar</a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</body>
</html>
