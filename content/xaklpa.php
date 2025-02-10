<?php
include "../library/config.php"
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Absen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            display: flex;
            height: 100vh;
            background: linear-gradient(135deg, #6A0572, #21867a);
        }
        .sidebar {
            width: 250px;
            background: #2c3e50;
            color: white;
            display: flex;
            flex-direction: column;
            padding: 20px;
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
        }
        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .sidebar a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
            padding: 10px;
            margin: 5px 0;
            transition: 0.3s;
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .sidebar a:hover {
            background:#43A047; /* Warna hijau terang saat hover */
            border-radius: 5px;
        }
        .main-content {
            margin-left: 270px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        .header {
            background: #34495e;
            color: white;
            padding: 12px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 16px;
            border-radius: 5px;
        }
        /* Dropdown Style */
        .kelas-select select {
            padding: 6px 10px;
            background-color: #6A0572;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-left: 10px;
            width: 150px;
        }
        .kelas-select select:hover {
            background-color: #43A047;
        }

        .dashboard {
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .table-container {
            display: flex;
            /* gap: 20px; */
        }
        .table {
            flex: 1;
            background: white;
            padding: 20px;
            /* border-radius: 10px; */
            /* box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); */
        }
        .table-header {
            background: #6A0572;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 18px;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background: #43A047;
            color: white;
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        td input[type="checkbox"] {
            width: 18px;
            height: 18px;
        }

        td input[type="radio"] {
            width: 18px;
            height: 18px;
        }

        .button {
            margin-top: 20px;
            background: white;
            color: black;
            border: none;
            padding: 8px 16px; /* Memperkecil tombol */
            font-size: 14px; /* Memperkecil ukuran font */
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
        }

        .button:hover {
            background: #f0f0f0;
        }

        
    </style>
</head>
<body>
    <nav class="sidebar">
        <h2>menu absen</h2>
        <a href="?hal=dashboard"><i class="fas fa-home"></i> Menu Absen</a>
        <a href="?hal=data-absen"><i class="fas fa-user"></i> Data Absen</a>
        <a href="?hal=data-rekap"><i class="fas fa-chart-bar"></i> Data Rekap</a>
        <a href="?hal=pengaturan"><i class="fas fa-cog"></i> Pengaturan</a>
        <a href="../logout.php"><i class="fas fa-sign-out-alt"></i> Keluar</a>
    </nav>
    
    <div class="main-content">
        <div class="header">
            <div>kelas <b><span id="current-class">X AKL Putra</span></b> 👋</div>
            <!-- Memindahkan tombol pilih kelas ke sini dan menggantinya dengan dropdown -->
            <div class="kelas-select">
                <select onchange="changeClass(this.value)">
                    <option value="X AKL Putra">X AKL Putra</option>
                    <option value="X AKL Putri">X AKL Putri</option>
                    <option value="X RPL putra">X TKJ</option>
                    <option value="X RPL putri">X RPL</option>
                </select>
            </div>
        </div>

        <div class="dashboard">
            <div class="table-container">
                <div class="table">
                    <div class="table-header">Kehadiran dan Kelengkapan</div>
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Hadir</th>
                                <th>Alpa</th>
                                <th>Izin</th>
                                
                                <th>Kaos Kaki</th>
                                <th>Sabuk</th>
                                <th>Seragam</th>
                                <th>Songkok</th>
                                <th>Sepatu</th>
                                <th>Hasduk</th>
                            
                            </tr>
                        </thead>
                        <tbody class="tbody">

                        <?php
                        $query = "SELECT * FROM siswa_putra WHERE jurusan='AKL'";
                        // $query .= "LEFT JOIN data-absen ";
                        // $query .= "ON pegawai.id_jabatan = jabatan.id_jabatan ";
                        // $query .= "ORDER BY pegawai.id_jabatan DESC";
                        $result = mysqli_query($con, $query);
                        $no = 0;

                        while($data = mysqli_fetch_assoc($result)) {
                            $no++;
                        ?>

                            <tr>
                                <td><?=$no?></td>
                                <td><?=$data['nama_siswa']?></td>
                                <td><input type="radio"></td>
                                <td><input type="radio"></td>
                                <td><input type="radio"></td>
                                
                                <td><input type="checkbox" checked></td>
                                <td><input type="checkbox" checked></td>
                                <td><input type="checkbox" checked></td>
                                <td><input type="checkbox" checked></td>
                                <td><input type="checkbox" checked></td>
                                <td><input type="checkbox" checked></td>
                            </tr>
<?php
    }
?>
                        </tbody>
                    </table>
                </div>
                <!-- <div class="table">
                    <div class="table-header">Kelengkapan Atribut</div>
                    <table>
                        <thead>

                        </thead>
                        <tbody>
                            <tr>

                            </tr>
                            
                        </tbody>
                    </table> -->

                </div>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk mengganti kelas yang dipilih
        function changeClass(className) {
            document.getElementById('current-class').innerText = className;
        }
    </script>

<section class="main">
        <?php include "../konten.php" ?>
    </section>


</body>
</html>

