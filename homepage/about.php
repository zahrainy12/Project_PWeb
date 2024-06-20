<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPINFO - About Us</title>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', Helvetica, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
            color: #222;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
        }

        .logo img {
            width: 180px; /* Sesuaikan dengan ukuran yang diinginkan */
            height: auto;
        }

        .nav-container {
            background-color: #FFA500;
            border-radius: 30px;
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }

        .nav {
            display: flex;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .nav a {
            color: #222;
            text-decoration: none;
            padding: 10px 15px;
            font-weight: bold;
            display: inline-block;
            position: relative;
            font-size: 14px; /* Mengecilkan ukuran font */
        }

        .nav a:hover, .dropdown:hover .dropbtn {
            color: #fff;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: #222;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .user-container {
            background-color: #FFA500;
            border-radius: 30px;
            padding: 10px 20px;
            margin-left: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-container i {
            color: #fff;
            font-size: 24px; /* Sesuaikan ukuran ikon */
        }

        .about-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #F7F7F7;
            padding: 50px;
            border-radius: 30px;
            margin: 20px 0;
        }

        .about-text {
            width: 70%;
            background-color: #3E4A61;
            color: #fff;
            padding: 30px;
            border-radius: 20px;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            line-height: 1.6;
        }

        .about-image {
            width: 25%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .about-image img {
            width: 100%;
            height: auto;
            border-radius: 20px;
        }

        h1 {
            font-family: 'Poppins', sans-serif;
            color: #AF1E2D;
            font-size: 36px;
            font-weight: 700;
        }

        footer {
            background-color: #FFA500; /* Warna oranye untuk footer */
            text-align: center;
            padding: 20px;
            border-radius: 30px;
            margin: 20px auto 0;
        }

        footer p {
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="homepage.php"><img src="logo.png" alt="UPINFO Logo"></a>
            </div>

            <div class="nav-container">
                <div class="nav">
                    <div class="dropdown">
                        <a href="about.php" class="dropbtn">About</a>
                    </div>

                    <div class="dropdown">
                        <a href="#" class="dropbtn">Kuliner</a>
                        <div class="dropdown-content">
                            <a href="#">Makanan</a>
                            <a href="#">Minuman</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a href="#" class="dropbtn">Otomotif</a>
                        <div class="dropdown-content">
                            <a href="#">Bengkel</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a href="#" class="dropbtn">Toko/Warung</a>
                        <div class="dropdown-content">
                            <a href="#">Warung Madura</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a href="#" class="dropbtn">Layanan & Jasa</a>
                        <div class="dropdown-content">
                            <a href="#">Percetakan</a>
                            <a href="#">Laundry</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-container">
                <i class="fas fa-user"></i>
            </div>
        </div>
        <div class="about-section">
            <div class="about-text">
                <h1>About Us</h1>
                <p style="text-align: justify;">
                    UPINFO adalah sebuah platform berbasis website yang dirancang khusus untuk memenuhi kebutuhan informasi 
                    mahasiswa/i UPN Veteran Jakarta mengenai Usaha Mikro, Kecil, dan Menengah (UMKM) di sekitar kampus UPN Veteran Jakarta. 
                    Kami memahami bahwa mahasiswa, terutama mereka yang merantau, sering kali menghadapi kesulitan dalam menemukan informasi
                    yang akurat dan terkini mengenai berbagai layanan dan produk yang disediakan oleh UMKM lokal. Oleh karena itu, UPINFO 
                    hadir sebagai solusi untuk mengatasi tantangan tersebut.
                </p>
            </div>
            <div class="about-image">
                <img src="Assets/abt.png" alt="About Us Image">
            </div>
        </div>
        <footer>
            <p>&copy; 2024 <b>UPiNFO</b>. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>