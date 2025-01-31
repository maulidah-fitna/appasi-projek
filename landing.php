<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page | APPASI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg,#8E24AA, #21867a ); /* Gradasi ungu ke hijau */
        }

        .header {
            text-align: center;
            padding: 20px;
            background-color: linear-gradient(135deg,#8E24AA, #21867a );;
            color: white;
            font-size: 24px;
        }

        .main {
            padding: 20px;
            text-align: center;
            margin-top: 10px;
        }

        .main h1 {
            font-size: 26px;
            margin-bottom: 20px;
            color: #fff;
        }

        .features {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px auto;
        }

        .feature {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            width: 200px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .feature h3 {
            color: #8E24AA;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .feature p {
            font-size: 14px;
            color: #555;
        }

        .footer {
            margin-top: 20px;
        }

        .footer p {
            color: #fff;
        }

        .cta {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        .cta {
            background-color: #6A1B9A;
        }

        .cta:hover {
            background-color: #5e178a;
        }

        .student-images img {
            max-width: 100px;
            margin: 10px;
        }

        .app-info {
            margin: 20px auto;
            text-align: center;
        }
        
    </style>
</head>
<body>
    <div class="header">
        <img src="image.png" alt="">
        <h1>APPASI</h1>
        <h3>Aplikasi Pengabsenan Apel Pagi & Pengecekan Kelengkapan Atribut Siswa</h3>
    </div>
    <div class="main">
        <h1>Fitur Utama</h1>
        <div class="features">
            <div class="feature">
                <h3>Data Terperinci dan Akurat</h3>
                <p>Tidak perlu khawatir lagi dengan data siswa.</p>
            </div>
            <div class="feature">
                <h3>Pengabsenan Online</h3>
                <p>Dapat memudahkan guru untuk mengabsen.</p>
            </div>
            <div class="feature">
                <h3>Rekap Otomatis</h3>
                <p>Tidak perlu repot-repot merekap.</p>
            </div>
        </div>
        <div class="footer">
            <p>Yuk coba Aplikasi Ini...</p>
            <a href="login.php" class="cta">Sign In</a>
        </div>
    </div>
</body>
</html>
