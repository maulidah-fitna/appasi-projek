<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Rekap Absen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Menambahkan CDN Font Awesome -->
    <style>
        /* Menghilangkan scroll */
        html, body {
            height: 100%; /* Memastikan halaman memenuhi tinggi layar */
            margin: 0;
            overflow: hidden; /* Menyembunyikan scroll */
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #8E24AA, #21867a);
            color: #2d3436;
        }

        .sidebar {
            width: 15%; /* Perkecil ukuran sidebar */
            height: 100%; /* Mengisi seluruh tinggi layar */
            background: #2c3e50;
            padding: 10px 15px;
            position: fixed; /* Sidebar tetap berada di kiri */
            top: 0;
            left: 0;
            box-shadow: 0 4px 10px rgba(10,10,10, 0);
        }

        .sidebar h1 {
            color: #dfe6e9;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-size: 18px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 10px 0;
            padding: 10px;
            color: #dfe6e9;
            text-align: left; /* Agar teks di sidebar rata kiri */
            cursor: pointer;
            transition: background 0.3s;
            border-radius: 5px;
        }

        .sidebar ul li:hover {
            background: #43A047;
        }

        .sidebar ul li i { /* Menambahkan style untuk ikon */
            margin-right: 10px;
        }

        .main {
            margin-left: 15%; /* Sesuaikan dengan lebar sidebar */
            padding: 20px;
            height: 100vh; /* Menyesuaikan tinggi konten utama dengan layar */
            overflow-y: auto; /* Scroll hanya untuk konten utama jika diperlukan */
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Membuat layout teratur */
        }

        .content {
            background: rgba(255, 255, 255, 0.397);
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            flex-grow: 1; /* Memastikan konten mengambil ruang yang tersedia */
        }

        .content h2 {
            margin-top: 0;
            font-size: 24px;
            color: #2d3436bb;
        }

        .content table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }

        .content table td {
            padding: 10px;
        }

        .content table td input {
            width: 100%;
            padding: 5px;
            font-size: 14px;
            border: 1px solid #dfe6e9;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .buttons {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .buttons .delete {
            background: #d63031;
            color: white;
        }

        .buttons .delete:hover {
            background: #e74c3c;
        }

        .buttons .edit {
            background: #b86e00;
            color: white;
        }

        .buttons .edit:hover {
            background: #00cec9;
        }

        .footer {
            width: 100%;
            background-color: #2d3436;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h1>data rekab</h1>
        <ul>
            <li><i class="fas fa-calendar-check"></i>Menu Absen</li>
            <li><i class="fas fa-list-alt"></i>Data Absen</li>
            <li><i class="fas fa-file-alt"></i>Data Rekap</li>
            <li><i class="fas fa-cogs"></i>Pengaturan</li>
            <li><i class="fas fa-sign-out-alt"></i>Keluar</li>
        </ul>
    </div>

    <div class="main">
        <div class="content">
            <h2>Data Rekap Absen</h2>
            <table>
                <tr>
                    <td>Nama:</td>
                    <td><input type="text" value="M. Fatih Fuady" readonly></td>
                </tr>
                <tr>
                    <td>Jumlah Alfa:</td>
                    <td><input type="number" value="12" readonly></td>
                </tr>
                <tr>
                    <td>Jumlah Sakit:</td>
                    <td><input type="number" value="6" readonly></td>
                </tr>
                <tr>
                    <td>Jumlah Izin:</td>
                    <td><input type="number" value="2" readonly></td>
                </tr>
            </table>

            <h3>Data Rekap Kelengkapan Atribut</h3>
            <table>
                <tr>
                    <td>Kaos Kaki:</td>
                    <td><input type="number" value="6" readonly></td>
                    <td>Hasduk:</td>
                    <td><input type="number" value="6" readonly></td>
                </tr>
                <tr>
                    <td>NameTag:</td>
                    <td><input type="number" value="6" readonly></td>
                    <td>Seragam:</td>
                    <td><input type="number" value="6" readonly></td>
                </tr>
                <tr>
                    <td>Sabuk:</td>
                    <td><input type="number" value="6" readonly></td>
                    <td>Sepatu:</td>
                    <td><input type="number" value="6" readonly></td>
                </tr>
                <tr>
                    <td>Songkok:</td>
                    <td><input type="number" value="6" readonly></td>
                    <td>Bet:</td>
                    <td><input type="number" value="6" readonly></td>
                </tr>
            </table>

            <div class="buttons">
                <button class="delete">Hapus Data</button>
                <button class="edit">Edit</button>
            </div>

            <div class="buttons" style="justify-content: center;">
                <button class="edit" style="background: #04f856;">Kembali</button>
            </div>
        </div>
    </div>

    <div class="footer">
        &copy; 2025 Copyright | Kelompok 1
    </div>
</body>
</html>