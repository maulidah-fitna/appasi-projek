<?php
    if(!defined('INDEX')) die();
?>

<style>
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
</style>




<!-- Konten Utama -->
<div class="main-content">
            <h1>Menu Utama</h1>
            <div class="info-box">
                <!-- Kartu Panduan -->
                <div class="info-card">
                    <h3>Panduan Penggunaan Aplikasi</h3>
                    <a href="https://alfachree.github.io/Appasi/">Klik di sini</a>
                </div>
                <!-- Kartu Informasi -->
                <div class="info-card">
                    <h3>Aplikasi ini dibuat untuk mempermudah</h3>
                    <p>
                        "Aplikasi ini dibuat untuk mempermudah guru dan OSIS untuk
                        mengabsen, merekap, menyimpan data dari absen dan rekap
                        dengan aman dan efisien."
                    </p>
                </div>
            </div>

            