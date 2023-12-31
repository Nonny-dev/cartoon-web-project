<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form id="loginForm">
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" id="username" name="username" required>
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" id="password" name="password" required>
                </div>

                <button type="button" onclick="login()">Login</button>
                You have member ?<a href="register.php">Register</a>
            </form>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/your-fontawesome-kit-id.js" crossorigin="anonymous"></script>
    <script src="login.js"></script>
</body>

</html>