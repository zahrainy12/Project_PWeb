<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <style>
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
        }

        .logo img {
            width: 180px;
            /* Sesuaikan dengan ukuran yang diinginkan */
            height: auto;
        }

        .nav-container {
            background-color: #FFA500;
            border-radius: 30px;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            width: 90%;
            /* Mengatur lebar navbar */
            max-width: 1200px;
            /* Batas maksimum lebar navbar */
            margin: 0 auto;
            /* Menyelaraskan navbar ke tengah */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Memberikan bayangan untuk efek visual */
        }

        .nav {
            display: flex;
            flex-grow: 1;
            justify-content: space-around; /* Menyebarkan elemen secara proporsional */
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
            font-size: 14px;
            /* Mengecilkan ukuran font */
        }

        .nav a:hover,
        .dropdown:hover .dropbtn {
            color: #fff;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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
            font-size: 24px;
            /* Sesuaikan ukuran ikon */
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo">
            <a href="homepage.php"><img src="logo.png" alt="UPINFO Logo"></a>
        </div>
        <div class="nav-container">
            <ul class="nav">
                <li class="dropdown">
                    <a href="about.php" class="dropbtn">About</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Kuliner</a>
                    <div class="dropdown-content">
                        <a href="makanan.php">Makanan</a>
                        <a href="#">Minuman</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Otomotif</a>
                    <div class="dropdown-content">
                        <a href="#">Bengkel</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Toko/Warung</a>
                    <div class="dropdown-content">
                        <a href="#">Warung Madura</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Layanan & Jasa</a>
                    <div class="dropdown-content">
                        <a href="#">Percetakan</a>
                        <a href="#">Laundry</a>
                    </div>
                </li>
            </ul>
        </div>
        <button class="user-container" onclick="location.href='../log_as.php'">
    <i class="fas fa-user"></i> Buat Akun
</button>

    </div>
</body>
</html>
