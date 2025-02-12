<?php
if(!defined('INDEX')) die("");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6A0572, #21867a);
            color: #fff;
            display: flex;
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
            padding: 10px;
            background: #34495e;
            border-radius: 5px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
            padding: 15px;
            margin: 5px 0;
            background: #34495e;
            border-radius: 5px;
            transition: 0.3s;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .sidebar a:hover {
            background:#43A047;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            margin-left: 250px;
            display: flex;
            flex-direction: column;
            position: relative;
            background-color: #e8f5e99c;
            border-radius: 10px;
            overflow: hidden;
        }

        .table-container {
            background: #ffffff73;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
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
                    <tr><td>1</td><td><a href="datarekapp.html">Joko</a></td></tr>
                    <tr><td>2</td><td><a href="detail.html">Supratman</a></td></tr>
                    <tr><td>3</td><td><a href="detail.html">Santoso</a></td></tr>
                    <tr><td>4</td><td><a href="detail.html">Jordi</a></td></tr>
                    <tr><td>5</td><td><a href="detail.html">Jarjit</a></td></tr>
                    <tr><td>6</td><td><a href="detail.html">Jamal</a></td></tr>
                    <tr><td>7</td><td><a href="detail.html">Fatih</a></td></tr>
                </tbody>
            </table>
        </div>
        <div class="info">"Anda dapat melihat data rekap per siswa dengan cara mengklik nama pada halaman ini"</div>
    </div>

    <div class="footer">© 2025 Copyright | Kelompok 1</div>
</body>
</html>