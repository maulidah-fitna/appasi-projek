<?php
    // session_start();
    // session_destroy();

    // echo "<p align='center'>Anda Telah Logout!</p>";
    // echo "<meta http-equiv='refresh' content='1; url=login.php'>";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
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

        .main-content {
            /* Mengatur konten utama agar tetap di tengah halaman */
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            margin-left: 0; /* Menghapus jarak untuk sidebar */
            padding: 20px;
        }

        .logout-box {
            background: rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 10px;
            color: white;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        .back-button {
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

        .back-button:hover {
            background: #f0f0f0;
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
        <div class="logout-box">
            Anda berhasil keluar<br>Silahkan sign in kembali
            <?="<meta http-equiv='refresh' content='2; url=login.php'>";?>
        </div>
        <button class="back-button" onclick="goBack()">Kembali</button>
    </div>

    <div class="footer">© 2025 Copyright | Kelompok 1</div>

    <script>
        // Fungsi untuk kembali ke halaman sebelumnya
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>