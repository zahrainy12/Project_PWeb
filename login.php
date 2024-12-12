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
            margin-bottom: 15px; /* Adding margin below the h2 element */
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
                        <form>
                            <div class="form-group">
                                <label for="emailLogin">Email address</label>
                                <input type="email" class="form-control" id="emailLogin" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="passwordLogin">Password</label>
                                <input type="password" class="form-control" id="passwordLogin"
                                    placeholder="Enter password">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>

                    <!-- Sign Up Tab -->
                    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                        <form>
                            <div class="form-group">
                                <label for="nameSignup">Full Name</label>
                                <input type="text" class="form-control" id="nameSignup"
                                    placeholder="Enter full name">
                            </div>
                            <div class="form-group">
                                <label for="emailSignup">Email address</label>
                                <input type="email" class="form-control" id="emailSignup"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="passwordSignup">Password</label>
                                <input type="password" class="form-control" id="passwordSignup"
                                    placeholder="Enter password">
                            </div>
                            <button type="submit" class="btn btn-secondary">Sign Up</button>
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
