<!-- <?php
// session_start();
// include "config.php";

// if(!defined('INDEX')) die();

// header("location: index.php")
?>

<title>Appasi | Landing Page</title>

<form action="login.php" method="post">
    <button type="submit" class="tombol-masuk"></button>
</form> -->

<?php
session_start();
ob_start();

include "library/config.php";

if (empty($_SESSION['username']) OR empty($_SESSION['password'])) {
    echo "<p align='center'>Anda Harus Login Terlebih Dahulu!</p>";
    echo "<meta http-equiv='refresh' content='2, url=login.php'>";
}else{
    define('INDEX', true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        Aplikasi Absen Siswa
    </header>
    <div class="container">
        <aside>
        <ul class="menu">
                <li><a href="?hal=dashboard">Menu Utama</a></li>
                <li><a href="?hal=absen">Data Absen</a></li>
                <li><a href="?hal=rekap">Data Rekap</a></li>
                <li><a href="?hal=pengaturan">Pengaturan</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </aside>
        <section class="main">
            <?php include "konten.php" ?>
        </section>
    </div>
    <footer>
        Copyright &copy; XI RPL | <b>Kelompok 1</b>
    </footer>
</body>
</html>

<?php
}
?>

<style>
    .tombol-masuk {
        background-color: white;
        boder: 2px solid black;
        border-radius: 10px;
        paddiing: 10px 20px;
        font-size: 18px;
        font-weigth: bold;
        cursor: pointer;
        box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
    }

    .tombol-masuk:hover {
        background-color: #ddd;
    }
</style>