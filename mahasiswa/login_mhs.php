<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailLogin = $_POST['emailLogin'];
    $passwordLogin = $_POST['passwordLogin'];

    $query = "SELECT * FROM akun_mahasiswa WHERE email='$emailLogin' AND password='$passwordLogin'";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) == 1) {
        echo "<script>alert('Login successful!');</script>";
    } else {
        echo "<script>alert('Invalid email or password!');</script>";
    }
}

mysqli_close($link);
?>
