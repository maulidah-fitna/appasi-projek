<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kelas</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
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
        
        .main {
            flex: 1;
            padding: 60px;
            text-align: center;
            margin-left: 270px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        
        .main h1 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .class-container {
            display: flex;
            gap: 50px;
            margin-top: 30px;
        }
        
        .class-group {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .class-buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .class-buttons button {
            padding: 15px 25px;
            background: #34495e;
            border: none;
            border-radius: 10px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }
        
        .class-buttons button:hover {
            background: #2ecc71;
            transform: scale(1.05);
        }
        
        .labels {
            background: #fff;
            color: #2d3436;
            padding: 10px 15px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            text-align: center;
            padding: 12px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1>Pilih Kelas</h1>
        
        <div class="class-container">
            <div class="class-group">
                <span class="labels">Putra</span>
                <div class="class-buttons">
                    <a href="kelas.html"><button>X PPLG</button></a>
                    <a href="kelas.html"><button>X AKL</button></a>
                    <a href="kelas.html"><button>XI RPL</button></a>
                    <a href="kelas.html"><button>XI LPS</button></a>
                    <a href="kelas.html"><button>XII RPL</button></a>
                    <a href="kelas.html"><button>XII PBS</button></a>
                </div>
            </div>
            <div class="class-group">
                <span class="labels">Putri</span>
                <div class="class-buttons">
                    <a href="kelas.html"><button>X PPLG</button></a>
                    <a href="kelas.html"><button>X AKL</button></a>
                    <a href="kelas.html"><button>XI RPL</button></a>
                    <a href="kelas.html"><button>XI LPS</button></a>
                    <a href="kelas.html"><button>XII RPL</button></a>
                    <a href="kelas.html"><button>XII PBS</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        &copy; 2025 Copyright | Kelompok 1
    </div>
</body>
</html>