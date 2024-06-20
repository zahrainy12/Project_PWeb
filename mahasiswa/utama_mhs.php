<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login & Sign Up Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .welcome-box {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .welcome-box h2 {
            margin-bottom: 15px;
        }
        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-container form {
            margin-top: 20px;
        }
        .login-container .form-group {
            margin-bottom: 20px;
        }
        .login-container .btn-primary,
        .login-container .btn-secondary {
            width: 100%;
        }
        .login-container .text-center {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php
        session_start();

        // Database connection
        $host = 'localhost'; // Replace with your database host
        $user = 'root'; // Replace with your database user
        $password = ''; // Replace with your database password
        $dbname = 'db_upinfo'; // Replace with your database name

        $link = mysqli_connect($host, $user, $password, $dbname);

        if (!$link) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Handling form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['login'])) {
                // Login form submission
                $emailLogin = $_POST['emailLogin'];
                $passwordLogin = $_POST['passwordLogin'];

                // Validate login credentials with session sign-up data
                if (isset($_SESSION['signup_data']) && $_SESSION['signup_data']['email'] === $emailLogin && $_SESSION['signup_data']['password'] === $passwordLogin) {
                    $signup_data = $_SESSION['signup_data'];

                    // Insert sign-up data into the database
                    $query = "INSERT INTO akun_mahasiswa (nama, email, password, foto_profil) VALUES ('{$signup_data['name']}', '{$signup_data['email']}', '{$signup_data['password']}', '{$signup_data['foto_profil']}')";
                    if (mysqli_query($link, $query)) {
                        echo "<script>alert('Sign Up and Login successful!');</script>";
                        // Clear sign-up data from the session
                        unset($_SESSION['signup_data']);
                    } else {
                        echo "Error: " . $query . "<br>" . mysqli_error($link);
                    }
                } else {
                    echo "<script>alert('Invalid email or password!');</script>";
                }
            } elseif (isset($_POST['signup'])) {
                // Sign Up form submission
                $nameSignup = $_POST['nameSignup'];
                $emailSignup = $_POST['emailSignup'];
                $passwordSignup = $_POST['passwordSignup'];
                $fotoProfil = $_FILES['fotoProfil']['name'];

                // Handling file upload
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["fotoProfil"]["name"]);
                if (move_uploaded_file($_FILES["fotoProfil"]["tmp_name"], $target_file)) {
                    // Store sign-up data in the session
                    $_SESSION['signup_data'] = [
                        'name' => $nameSignup,
                        'email' => $emailSignup,
                        'password' => $passwordSignup,
                        'foto_profil' => $fotoProfil
                    ];

                    echo "<script>alert('Sign Up data saved! Please login now.');</script>";
                } else {
                    echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
                }
            }
        }

        mysqli_close($link);
    ?>
    <div class="container">
        <!-- Welcome Box -->
        <div class="welcome-box">
            <h2><b>Welcome back to UPiNFO!</b></h2>
            <p>To keep connected with us, please login with your personal info</p>
        </div>
        <!-- Login & Sign Up Container -->
        <div class="login-container">
            <!-- Tabs and Form -->
            <div>
                <h2>Login & Sign Up</h2>
                <!-- Tab Menu for Login and Sign Up -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login"
                            type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup"
                            type="button" role="tab" aria-controls="signup" aria-selected="false">Sign Up</button>
                    </li>
                </ul>

                <!-- Tab Content for Login and Sign Up -->
                <div class="tab-content" id="myTabContent">
                    <!-- Login Tab -->
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form method="POST">
                            <div class="form-group">
                                <label for="emailLogin">Email address</label>
                                <input type="email" class="form-control" id="emailLogin" name="emailLogin" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="passwordLogin">Password</label>
                                <input type="password" class="form-control" id="passwordLogin" name="passwordLogin" placeholder="Enter password" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="login">Login</button>
                        </form>
                    </div>

                    <!-- Sign Up Tab -->
                    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nameSignup">Full Name</label>
                                <input type="text" class="form-control" id="nameSignup" name="nameSignup" placeholder="Enter full name" required>
                            </div>
                            <div class="form-group">
                                <label for="emailSignup">Email address</label>
                                <input type="email" class="form-control" id="emailSignup" name="emailSignup" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="passwordSignup">Password</label>
                                <input type="password" class="form-control" id="passwordSignup" name="passwordSignup" placeholder="Enter password" required>
                            </div>
                            <div class="form-group">
                                <label for="fotoProfil">Profile Photo</label>
                                <input type="file" class="form-control" id="fotoProfil" name="fotoProfil" required>
                            </div>
                            <button type="submit" class="btn btn-secondary" name="signup">Sign Up</button>
                        </form>
                    </div>
                </div>

                <p class="text-center mt-3">Already have an account? <a href="#">Login here</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
