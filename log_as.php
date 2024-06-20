<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk ke UPiNFO</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }
        .logo img {
            width: 150px;
            margin-bottom: 20px;
        }
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 24px;
            color: #000;
            text-decoration: none;
        }
        .back-button:hover {
            color: #555;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        p {
            font-size: 16px;
            color: #555;
            margin-bottom: 30px;
        }
        .button-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            color: #000;
            text-decoration: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff; /* Warna awal putih */
            transition: background-color 0.3s ease;
        }
        .button i {
            margin-right: 10px;
        }
        .umkm-button:hover,
        .umkm-button:active {
            background-color: #f6d6d1; /* Warna saat hover dan klik */
        }
        .mahasiswa-button:hover,
        .mahasiswa-button:active {
            background-color: #f6d6d1; /* Warna saat hover dan klik */
        }
        .user-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
            color: #000;
        }
        .user-icon:hover {
            color: #555;
        }
    </style>
</head>
<body>
    <a href="homepage/homepage.php" class="back-button"><i class="fas fa-arrow-left"></i></a>
    <div class="container">
        <div class="logo">
            <img src="logo.png" alt="UPINFO Logo">
        </div>
        <h1>Masuk ke UPiNFO</h1>
        <p>Masuk Sebagai</p>
        <div class="button-container">
            <a href="seller/index_seller.php" class="button umkm-button"><i class="fas fa-user"></i>Pelaku UMKM</a>
            <a href="mahasiswa/utama_mhs.php" class="button mahasiswa-button"><i class="fas fa-user"></i>Mahasiswa</a>
        </div>
    </div>
    <a href="#" class="user-icon"><i class="fas fa-user"></i></a>
</body>
</html>
