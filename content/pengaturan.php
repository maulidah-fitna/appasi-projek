<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6A0572, #21867a);
            display: flex;
            height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: #2c3e50; /* Warna sidebar gelap */
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 30px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 20px;
            color: white;
        }

        .sidebar button {
            background: none;
            border: none;
            color: white;
            padding: 10px;
            text-align: left;
            cursor: pointer;
            font-size: 16px;
            display: flex;
            align-items: center;
        }

        .sidebar button i {
            margin-right: 10px;
        }

        .sidebar button:hover {
            background: #43A047; /* Warna hijau terang saat hover */
            border-radius: 10px;
        }

        .main-content {
            margin-left: 270px; /* Memberikan ruang untuk sidebar */
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            position: relative;
        }

        .logo {
            width: 100px;
            height: 20px;
            background: url('logo.png') no-repeat center;
            background-size: contain;
            margin-bottom: 20px;
        }

        .buttons {
            display: grid;
            height: 250px;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px;
        }

        .buttons button {
            background: #1E3A8A;
            color: white;
            border: none;
            padding: 15px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .buttons button:hover {
            background: #122860;
        }

        .footer {
            position: absolute;
            bottom: 10px;
            font-size: 12px;
            color: white;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>pengaturan</h2>
        <button><i class="fas fa-home"></i> Menu Absen</button>
        <button><i class="fas fa-users"></i> Data Absen</button>
        <button><i class="fas fa-chart-bar"></i> Data Rekap</button>
        <button><i class="fas fa-cog"></i> Pengaturan</button>
        <button><i class="fas fa-sign-out-alt"></i> Keluar</button>
    </div>
    <div class="main-content">
        <div class="logo"></div>
        <h1>APPASI</h1>
        <p>ABSENSI APEL SISWA</p>
        <div class="buttons">
            <button>Data Admin</button>
            <button>Tambah User</button>
            <button>Tambah Siswa</button>
            <button>Tentang Aplikasi</button>
            <button>Masukan</button>
        </div>
        <div class="footer">© 2025 Copyright | Kelompok 1</div>
    </div>

    <!-- Menambahkan ikon FontAwesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
</body>
</html>