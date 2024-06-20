<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailLogin = $_POST['emailLogin'];
    $passwordLogin = $_POST['passwordLogin'];

    $query = "SELECT * FROM akun_umkm WHERE email='$emailLogin' AND password='$passwordLogin'";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login berhasil
        header("Location: ../mainpage.php?login=success");
        exit();
    } else {
        // Login gagal
        header("Location: index_seller.php?login=failed");
        exit();
    }
}

mysqli_close($link);
?>
