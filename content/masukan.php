<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Absensi</title>
    <!-- Link untuk Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #8E24AA, #21867a);
            display: flex;
            height: 100vh;
            overflow: hidden; /* Mencegah scroll */
        }
        .sidebar {
            width: 200px;
            background: #2c3e50;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 0px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
        }
        .sidebar h1 {
            color: #dfe6e9;
            margin-bottom:  5px;
            text-transform:none;
            font-size: 18px;
        }
        .sidebar a {
            margin: 10px 0;
            padding: 5px;
            text-align: center;
            border-radius: 8px;
            cursor: pointer;
            color: white;
            transition: background 0.3s;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: #405D44;
        }
        .sidebar a i {
            font-size: 18px;
            list-style: none;
        }
        .content {
            margin-left: 220px; /* Menambahkan margin untuk konten utama */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
            padding: 20px;
            height: 100%;
        }
        .popup {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
            max-width: 500px;
            width: 100%;
        }
        .popup .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 18px;
            color: #333;
        }
        .popup h2 {
            margin-bottom: 15px;
            font-size: 20px;
            color: #333;
        }
        .popup label {
            font-size: 14px;
            margin-bottom: 8px;
            color: #555;
        }
        .popup textarea {
            width: 100%;
            height: 150px;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 12px;
            resize: none;
            margin-bottom: 15px;
            font-size: 14px;
            color: #333;
        }
        .popup .submit {
            display: flex;
            justify-content: flex-end;
        }
        .popup .submit button {
            background: #2E4B3A;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .popup .submit button:hover {
            background: #405D44;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 10px;
            background: #101311;
            color: white;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h1>pengaturan</h1>
        <a href="#"><i class="fas fa-calendar-check"></i> Menu Absen</a>
        <a href="#"><i class="fas fa-list"></i> Data Absen</a>
        <a href="#"><i class="fas fa-chart-line"></i> Data Rekap</a>
        <a href="#"><i class="fas fa-cogs"></i> Pengaturan</a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> Keluar</a>
    </div>
    
    <div class="content">
        <div class="popup" id="popup">
            <span class="close" onclick="closePopup()">&times;</span>
            <h2>Beri kami Masukan Dong...</h2>
            <label for="feedback">Tulis Disini :</label>
            <textarea id="feedback" placeholder="Masukkan masukan atau saran Anda di sini..."></textarea>
            <div class="submit">
                <button onclick="submitFeedback()">✔ Kirim</button>
            </div>
        </div>
    </div>
    
    <div class="footer">&copy; 2025 Kelompok 1</div>
    
    <script>
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }

        function submitFeedback() {
            const feedback = document.getElementById('feedback').value;
            if (feedback) {
                alert("Terima kasih atas masukan Anda!");
                document.getElementById('popup').style.display = 'none';
                document.getElementById('feedback').value = ''; // Reset textarea
            } else {
                alert("Masukkan feedback sebelum mengirim.");
            }
        }
    </script>
</body>
</html>