<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPiNfo</title>
    <link rel="icon" type="image/png" href="Assets/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet">
    <!-- Racing Sans One-->
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
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
            background-color: #FFFFFF;
        }

        .content {
            display: flex;
            justify-content: space-between;
            padding: 50px 20px;
        }

        .text-section {
            width: 50%;
            text-align: left;
        }

        .text-section h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 48px;
            /* Ukuran font yang lebih besar untuk teks yang estetis */
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }

        .btn {
            background-color: #FFA500;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
        }

        .images {
            width: 45%;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .images img {
            width: 45%;
            margin: 5px;
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            .content {
                flex-direction: column;
            }

            .text-section,
            .images {
                width: 100%;
            }

            .images img {
                width: 90%;
            }
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
    <div class="container">
        <div class="content">
            <div class="text-section">
                <h1>Find what you need here!</h1>
                <a href="recommendations.php" class="btn">Start Your Journey</a>
            </div>
            <div class="images">
                <img src="../images/1.jpg" alt="Image 1">
                <img src="../images/2.jpg" alt="Image 2">
                <img src="../images/3.jpg" alt="Image 3">
                <img src="../images/4.jpg" alt="Image 4">
                <img src="../images/5.jpg" alt="Image 5">
            </div>
        </div>
        <footer>
            <p>&copy; 2024 <b>UPiNFO.</b> All rights reserved.</p>
        </footer>
    </div>
</body>

</html>