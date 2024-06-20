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
            position: relative;
        }
        .logo {
            position: absolute;
            top: 30px; /* Ubah nilai ini untuk memindahkan logo lebih ke bawah */
            left: 40px;
            width: 100px; /* Ubah ukuran sesuai kebutuhan */
            height: auto; /* Mempertahankan rasio aspek gambar */
        }
        .welcome-box { 
            background-color: #F7DDD0;
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
            background-color: whitesmoke;
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
    <div class="container">
        <!-- Logo -->
        <img src="logo.png" alt="Logo" class="logo">
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
                    <div class="tab-pane fade show <?php echo (!isset($_GET['signup']) || $_GET['signup'] != 'success') ? 'active' : ''; ?>" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <?php if (isset($_GET['login']) && $_GET['login'] == 'failed'): ?>
                        <div class="alert alert-danger" role="alert">
                            Invalid email or password!
                        </div>
                        <?php endif; ?>
                        <form method="POST" action="login_seller.php">
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
                    <div class="tab-pane fade <?php echo (isset($_GET['signup']) && $_GET['signup'] == 'success') ? 'show active' : ''; ?>" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                        <form method="POST" action="signup_seller.php" enctype="multipart/form-data">
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
                                <label for="kategoriUsaha">Kategori Usaha</label>
                                <input type="text" class="form-control" id="kategoriUsaha" name="kategoriUsaha" placeholder="Enter business category" required>
                            </div>
                            <div class="form-group">
                                <label for="namaUsaha">Nama Usaha</label>
                                <input type="text" class="form-control" id="namaUsaha" name="namaUsaha" placeholder="Enter business name" required>
                            </div>
                            <div class="form-group">
                                <label for="fotoProfil">Profile Photo</label>
                                <input type="file" class="form-control" id="fotoProfil" name="fotoProfil" required>
                            </div>
                            <button type="submit" class="btn btn-secondary" name="signup">Sign Up</button>
                        </form>
                        <p class="text-center mt-3">Already have an account? <a href="#" id="login-link">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php if (isset($_GET['login']) && $_GET['login'] == 'success'): ?>
                alert('Login successful!');
            <?php elseif (isset($_GET['login']) && $_GET['login'] == 'failed'): ?>
                alert('Invalid email or password!');
            <?php elseif (isset($_GET['signup']) && $_GET['signup'] == 'success'): ?>
                alert('Sign Up successful!');
            <?php endif; ?>

            <?php if (isset($_GET['signup']) && $_GET['signup'] == 'success'): ?>
                var loginTab = document.getElementById('login-tab');
                var signupTab = document.getElementById('signup-tab');
                var loginPane = document.getElementById('login');
                var signupPane = document.getElementById('signup');
                loginTab.classList.add('active');
                signupTab.classList.remove('active');
                loginPane.classList.add('show', 'active');
                signupPane.classList.remove('show', 'active');
            <?php endif; ?>

            // Handle the "Already have an account? Login here" link
            document.getElementById('login-link').addEventListener('click', function(event) {
                event.preventDefault();
                var loginTab = document.getElementById('login-tab');
                var signupTab = document.getElementById('signup-tab');
                var loginPane = document.getElementById('login');
                var signupPane = document.getElementById('signup');
                loginTab.classList.add('active');
                signupTab.classList.remove('active');
                loginPane.classList.add('show', 'active');
                signupPane.classList.remove('show', 'active');
            });
        });
    </script>
</body>
</html>
