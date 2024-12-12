<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameSignup = $_POST['nameSignup'];
    $emailSignup = $_POST['emailSignup'];
    $passwordSignup = $_POST['passwordSignup'];
    $fotoProfil = $_FILES['fotoProfil']['name'];

    // Handling file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fotoProfil"]["name"]);
    move_uploaded_file($_FILES["fotoProfil"]["tmp_name"], $target_file);

    $query = "INSERT INTO akun_mahasiswa (nama, email, password, foto_profil) VALUES ('$nameSignup', '$emailSignup', '$passwordSignup', '$fotoProfil')";
    if (mysqli_query($link, $query)) {
        // Redirect to index.php with a success parameter
        header("Location: index.php?signup=success");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
}

mysqli_close($link);
?>
