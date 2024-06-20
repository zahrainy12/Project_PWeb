<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendations</title>
    <link rel="icon" type="image/png" href="Assets/logo.png">
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

        .recommendations-section {
            text-align: center;
            padding: 50px 20px;
        }

        .recommendations-section h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 48px; /* Ukuran font yang lebih besar untuk teks yang estetis */
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }

        .cards {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .card {
            background-color: #f0f0f0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            margin: 10px;
            width: 300px;
            text-align: center;
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card .content {
            padding: 20px;
        }

        .card h3 {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            color: #333;
        }

        .card p {
            font-family: 'Arial', sans-serif;
            color: #777;
        }

        footer {
            background-color: #FFA500;
            /* Warna oranye untuk footer */
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            margin: 0;
        }

        /* CSS untuk teks di dalam footer */
        footer p {
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            margin: 0;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
        <div class="recommendations-section">
            <h1>Rekomendasi</h1>
            <div class="cards">
                <div class="card">
                    <img src="Assets/1.jpg" alt="Honda Bintang Motor">
                    <div class="content">
                        <h3>Honda Bintang Motor</h3>
                        <p><a href="https://www.google.com/maps?q=-6.3155031,106.7959434" target="_blank">Lokasi Belakang UPNVJ</a></p>
                        <p>Jarak dari UPNVJ: 100m</p>
                    </div>
                </div>
                <div class="card">
                    <img src="Assets/2.jpg" alt="Rhido Photocopy">
                    <div class="content">
                        <h3>Rhido Photocopy</h3>
                        <p><a href="https://maps.app.goo.gl/1jHyFyMno2JyczYD6" target="_blank">Lokasi Belakang UPNVJ</a></p>
                        <p>Jarak dari UPNVJ: 350m</p>
                    </div>
                </div>
                <div class="card">
                    <img src="Assets/3.jpg" alt="Geprek Mavera">
                    <div class="content">
                        <h3>Geprek Mavera</h3>
                        <p><a href="https://maps.app.goo.gl/cF53eW3yFoTD85MS6" target="_blank">Lokasi Belakang UPNVJ</a></p>
                        <p>Jarak dari UPNVJ: 200m</p>
                    </div>

                </div>
            </div>
        </div>
        <footer>
            <p>&copy; 2024 <b>UPiNfo</b>. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>