<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Rekap</title>
    <style>
        /* Reset Dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #43A047, #6A0572); /* Gradasi hijau ke ungu */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            height: 90%;
            background-color: rgba(255, 255, 255, 0.9);
            display: flex;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #37474F; /* Hijau tua */
            display: flex;
            flex-direction: column;
            padding: 20px;
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
        }

        .sidebar h3 {
            color: #E0F2F1;
            margin-bottom: 20px;
            font-size: 18px;
            text-transform: uppercase;
        }

        .sidebar a {
            text-decoration: none;
            color: #FFFFFF;
            padding: 10px 15px;
            margin-bottom: 10px;
            background-color: #546E7A;
            border-radius: 5px;
            display: block;
            font-size: 16px;
        }

        .sidebar a:hover {
            background-color:  #43A047; /* Warna hijau terang saat hover */
        }


        /* Main Content */
        .main-content {
            flex: 1;
            padding: 20px;
            margin-left: 250px;
            display: flex;
            flex-direction: column;
            position: relative;
            background-color: #E8F5E9; /* Hijau muda */
            border-radius: 10px;
            overflow: hidden;
        }

        .table-container {
            background: #FFFFFF; /* Latar belakang putih untuk lebih elegan */
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Efek bayangan lembut */
            margin-bottom: 20px;
            padding: 20px; /* Tambahkan padding agar ruang lebih lapang */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead {
            background-color: #37474F;
            color: #FFFFFF;
        }

        table thead th {
            padding: 15px;
            text-align: left;
        }

        table tbody td {
            padding: 15px;
            border-bottom: 1px solid #EEEEEE;
            color: #37474F;
        }

        table tbody tr:hover {
            background-color: #E0F7FA;
            cursor: pointer;
        }

        .info {
            font-size: 18px;
            color: #37474F;
            margin-top: 10px;
            text-align: center;
        }

        /* Footer */
        .footer {
            position: absolute;
            bottom: 10px;
            font-size: 12px;
            color: white;
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h3>data rekab</h3>
            <a href="#">Menu Absen</a>
            <a href="#">Data Absen</a>
            <a href="#">Data Rekap</a>
            <a href="#">Pengaturan</a>
            <a href="#">Keluar</a>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Joko</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Supratman</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Santoso</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Jordi</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Jarjit</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Jamal</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Fatih</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="info">"Anda dapat melihat data rekap per siswa dengan cara mengklik nama pada halaman ini"</div>
        </div>
    </div>

    <div class="footer">© 2025 Copyright | Kelompok 1</div>
</body>
</html>