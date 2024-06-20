<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameSignup = $_POST['nameSignup'];
    $emailSignup = $_POST['emailSignup'];
    $passwordSignup = $_POST['passwordSignup'];
    $kategoriUsaha = $_POST['kategoriUsaha'];
    $namaUsaha = $_POST['namaUsaha'];
    $fotoProfil = $_FILES['fotoProfil']['name'];

    // Handling file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fotoProfil"]["name"]);
    move_uploaded_file($_FILES["fotoProfil"]["tmp_name"], $target_file);

    $query = "INSERT INTO akun_umkm (nama, email, password, kategori_usaha, nama_usaha, foto_profil) VALUES ('$nameSignup', '$emailSignup', '$passwordSignup', '$kategoriUsaha', '$namaUsaha', '$fotoProfil')";
    if (mysqli_query($link, $query)) {
        // Redirect to index.php with a success parameter
        header("Location: index_seller.php?signup=success");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
}

mysqli_close($link);
?>
