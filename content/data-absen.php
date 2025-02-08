<?php
// if(!defined('INDEX')) die();
?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kelas</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6A0572, #21867a);
            color: #fff;
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #1e1e2d;
            padding: 20px;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
            padding: 12px;
            background: #2d2d44;
            text-align: left;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar ul li:hover {
            background:  #43A047;
            transform: scale(1.05);
        }

        .sidebar ul li i {
            width: 20px;
            text-align: center;
        }

        .main {
            flex: 1;
            padding: 40px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .main h1 {
            font-size: 28px;
            font-weight: bold;
        }

        .class-buttons {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            justify-items: center;
            margin-top: 40px;
            position: relative;
            z-index: 2;
        }

        .class-buttons button {
            padding: 15px 20px;
            background: #34495e;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        .class-buttons button:hover {
            background: #2ecc71;
            transform: scale(1.05);
        }

        .labels {
            margin-top: 20px;
            display: flex;
            gap: 20px;
        }

        .labels span {
            background: #fff;
            color: #2d3436;
            padding: 10px 15px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            text-align: center;
            padding: 12px 0;
            font-size: 14px;
        }

        .logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.2;
            width: 300px;
            z-index: 1;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <ul>
            <h1>Data Absen</h1>
            <a href="?hal=dashboard"><i class="fas fa-home"></i> Menu Absen</a>
            <a href="?hal=data-absen"><i class="fas fa-user"></i> Data Absen</a>
            <a href="?hal=rekap"><i class="fas fa-chart-bar"></i> Data Rekap</a>
            <a href="?hal=pengaturan"><i class="fas fa-cog"></i> Pengaturan</a>
            <a href="?hal=logout.php"><i class="fas fa-sign-out-alt"></i> Keluar</a>
        </ul>
    </div>

    <div class="main">
        <h1>Kelas</h1>
        <img src="../images/logo.png" alt="Logo" class="logo">
        
        <div class="class-buttons">
        <button>X PPLG</button>
            <button>X AKL</button>
            <button>XI RPL</button>
            <button>XI LPS</button>
            <button>XII RPL</button>
            <button>XII PBS</button>
        </div>
        <div class="labels">
            <span>Putra</span>
            <span>Putri</span>
        </div>
    </div>

    <div class="footer">
        &copy; 2025 Copyright | Kelompok 1
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kelas</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6A0572, #21867a);
            color: #fff;
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #1e1e2d;
            padding: 20px;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;

        }

        .sidebar ul li {
            margin: 15px 0;
            padding: 12px;
            background: #2d2d44;
            text-align: left;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            display: flex;
            align-items: center;
            gap: 10px;

        }

        .sidebar ul li:hover {
            background:  #43A047;
            transform: scale(1.05);
        }

        .sidebar ul li i {
            width: 20px;
            text-align: center;
            
        }

        .main {
            flex: 1;
            padding: 40px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* position: relative; */
            padding-left: 10%;
        }

        .main h1 {
            font-size: 28px;
            font-weight: bold;
        }

        .class-buttons {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            justify-items: center;
            margin-top: 40px;
            position: relative;
            z-index: 2;
        }

        .class-buttons button {
            padding: 15px 20px;
            background: #34495e;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        .class-buttons button:hover {
            background: #2ecc71;
            transform: scale(1.05);
        }

        .labels {
            margin-top: 20px;
            display: flex;
            gap: 20px;
        }

        .labels span {
            background: #fff;
            color: #2d3436;
            padding: 10px 15px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            text-align: center;
            padding: 12px 0;
            font-size: 14px;
        }

        .logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.2;
            width: 300px;
            z-index: 1;
        }
    </style>
</head>
<body>
    <div class="sidebar">
            <h1>Data Absen</h1>
            <a href="?hal=dashboard">Menu Absen</a>
            <a href="?hal=data-absen">Data Absen</a>
            <a href="?hal=data-rekap">Data Rekap</a>
            <a href="?hal=pengaturan">Pengaturan</a>
            <a href="logout.php">Keluar</a></ul>
    </div>

    <div class="main">
        <h1>Kelas</h1>
        <img src="../images/logo.png" alt="Logo" class="logo">
        
        <div class="class-buttons">

        <?php
         $kelas = ["X PPLG", "X AKL", "XI RPL", "XI LPS", "XII RPL", "XII PBS"];
         foreach ($kelas as $k) {
             echo "<button onclick=\"window.location.href='absen.php?kelas=$k'\">$k</button>";
         }
        ?>
        </div>
        <div class="labels">
            <span>Putra</span>
            <span>Putri</span>
        </div>
    </div>

    <section class="main">
        <?php include "../konten.php" ?>
    </section>

    <div class="footer">
        &copy; 2025 Copyright | Kelompok 1
    </div>
</body>
</html>