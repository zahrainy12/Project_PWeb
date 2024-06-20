<!DOCTYPE html>
    <head>
        <title>UPiNFO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UPiNfo</title>
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- Google Fonts CSS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- Poppins -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <!-- Racing Sans One -->
        <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Arial', Helvetica, sans-serif;
                background-color: #fff;
                margin: 0;
                padding: 0;
                color: #222;
            }

            .container{
                width: 90%;
                max-width: 1200px;
                margin: 20px auto;
                background-color: #FFFFFF;
            }

            .category a {
                font-family: 'Racing Sans One', sans-serif;
                text-decoration: none;
                color: #365071;
                padding: 10px 15px;
                font-size: 30px;
            }
            .category a:hover{
                color: #36507193;
            }
            .category a:visited{
                color: #36507193;
            }
            .category a:focus{
                text-decoration: underline;
            }

            .container-responsive {
                margin: 30px 0;
                /* width: 1045px; */
                display: flex;
                flex-wrap: wrap;
            }
            .container-responsive > div {
                max-width: 324px;
                height: 362px;
                padding: 0 30px;
            }
            .food > img {
                width: 320px;
                border-radius: 10px;
                border: 1px solid var(--border, rgba(109, 90, 122, 0.53));
                background: url(<path-to-image>) lightgray -425.308px -473.386px / 339.703% 506.726% no-repeat;
                mix-blend-mode: multiply;

                /* pic */
                box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.25) inset;
            }
            .food > .title {
                color: #000;
                font-family: Poppins;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
            }
            .food > .content {
                color: #000;
                font-family: Poppins;
                font-size: 13px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
            }
            .food > p {
                margin: 0;
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
        <?php include 'navbar.php'; ?>
        <div class="container">
            <div class="category">
                <a href="makanan.php">Makanan</a>
                <a href="#">Minuman</a>
            </div>

            <div class="container-responsive">
                <?php
                include ("koneksi.php");
                $query = "SELECT * FROM data_umkm ORDER BY nama_usaha ASC";
                $result = mysqli_query($link, $query);


                if (!$result) {
                    die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
                }


                $i = 1;
                while ($data = mysqli_fetch_assoc($result)) {
                    echo"<div class='food'>";
                    echo "<img src='" . $data['foto_umkm'] . "' alt='image-umkm'>";
                    echo "<p class='title'>" . $data['nama_usaha'] . "</p>";
                    echo "<p class='content'>" . $data['deskripsi'] . "</p>";
                    echo "<p class='content'>" . $data['kategori'] . "</p>";
                    echo "<p class='content'>" . $data['jarak'] . "</p>";
                    echo"</div>";
                    $i++;
                }
                mysqli_free_result($result);
                mysqli_close($link);
                ?>
            </div>
            <footer>
                <p>&copy; 2023 <b>UPiNfo.<b> All rights reserved.</p>
            </footer>
        </div>
    </body>

</html>