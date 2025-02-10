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
<!-- 
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
        <?php
        //  include "konten.php" 
         ?>
        </section>
    </div>
    <footer>
        Copyright &copy; XI RPL | <b>Kelompok 1</b>
    </footer>
</body>
</html>

<?php
// }
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
</style> -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama</title>
    <style>
        /* Reset dan Styling Dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #8E24AA, #21867a); /* Hijau ke ungu */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff; /* Warna teks putih */
        }

        .container {
            width: 100%;
            max-width: 1200px;
            height: 90%;
            background-color: rgba(255, 255, 255, 0.247); /* Putih transparan */
            display: flex;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.096);
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #37474F; /* Warna hijau gelap */
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .sidebar h3 {
            color: #E0F2F1; /* Warna teks hijau muda */
            margin-bottom: 20px;
            text-transform: uppercase;
            font-size: 18px;
        }

        .sidebar a {
            text-decoration: none;
            color: #FFFFFF;
            padding: 10px 15px;
            margin-bottom: 10px;
            background-color: #546E7A; /* Abu-abu hijau */
            border-radius: 5px;
            display: block;
            font-size: 16px;
        }

        .sidebar a:hover {
            background-color: #78909C; /* Hover abu-abu lebih terang */
        }

        /* Konten Utama */
        .main-content {
            flex: 1;
            padding: 20px;
            position: relative;
        }

        .main-content h1 {
            font-size: 28px;
            color: #4A148C; /* Ungu tua */
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .info-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .info-card {
            width: 45%;
            background-color: rgba(255, 255, 255, 0.9); /* Putih transparan */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            color: #333;
        }

        .info-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .info-card p {
            font-size: 16px;
            line-height: 1.5;
        }

        .info-card a:hover {
            color: #78909C;
        }

        /* Footer */
        .footer {
            position: absolute;
            bottom: 10px;
            left: 20px;
            font-size: 14px;
            color: rgba(0, 0, 0, 0.6);
        }

        .menu{
	padding: 0;
}

/* Menambah border bawah tag <li> */
.menu li{
	border-bottom: 1px dotted #444;
}

/* Mengatur desain menu yang dibuat dengan tag a */
.menu a{
	display: block;
	padding: 20px 20px;
	list-style: none;
	color: #fff;
	text-decoration: none;
}

/* Mengganti background menu ketika ditunjuk mouse */
.menu a:hover{
	background: #000;
}

    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <nav class="sidebar">
        <h2>Data Absen</h2>
        <aside>
            <ul class="menu">
                <a href="menuutama.html"><i class="fas fa-home"></i> Menu Utama</a>
                <a href="dataabsen.html"><i class="fas fa-user"></i> Data Absen</a>
                <a href="rekababsen.html"><i class="fas fa-chart-bar"></i> Data Rekap</a>
                <a href="pengaturan.html"><i class="fas fa-cog"></i> Pengaturan</a>
                <a href="logout.html"><i class="fas fa-sign-out-alt"></i> Keluar</a>
            </ul> 
        </aside>           

        
            
            <section class="main">
                <?php include "konten.php" ?>
            </section>
            
            <!-- Footer -->
            <div class="footer">
                Copyright &copy; XI RPL | <b>Kelompok 1</b>
            </div>
        </div>
    </div>
</body>
</html>

<?php
}
?>
