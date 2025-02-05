<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang admin</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6A0572, #21867a);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff6c;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            width: 300px;
            padding: 20px;
            text-align: center;
            position: relative;
        }   
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }
        .close-btn:hover {
            color: red;
        }
        h1 {
            font-size: 20px;
            margin-bottom: 20px;
        }
        p {
            margin: 5px 0;
        }
        .footer {
            background-color: #303841;
            color: white;
            padding: 10px;
            font-size: 12px;
            position: absolute;
            bottom: -40px;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }
        .save-btn {
            margin-top: 20px;
            background-color: #1E90FF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .save-btn:hover {
            background-color: #1C86EE;
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="close-btn">&times;</button>
        <h1>Tentang admin</h1>
        <p>Nama : rapi</p>
        <p>Kelas : 12 RPL</p>
        <p>TTL : 23.04.2006</p>
        <p>Alamat : Kebondalem</p>
        <button class="save-btn">Data Berhasil Disimpan</button>
    </div>
    <div class="footer">© 2025 Copyright | Kelompok 1</div>
</body>
</html>