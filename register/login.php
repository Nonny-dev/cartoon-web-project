<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <h2>เข้าสู่ระบบ</h2>
            <form id="loginForm">
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" id="username" name="username" required>
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" id="password" name="password" required>
                </div>

                <button type="button" onclick="login()">เข้าสู่ระบบ</button>
                คุณเป็นสมาชิกแล้วหรือไม่ ?<a href="register.php">สมัครสมาชิก</a>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function login() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            if (username === 'your_username' && password === 'your_password') {
                console.log('Login success!');
                Swal.fire({
                    title: "เข้าสู่ระบบสำเร็จ!",
                    text: "ยินดีต้อนรับกลับ",
                    icon: "success"
                });
            } else {
                console.error('Invalid username or password');
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "ข้อมูลที่คุณกรอกไม่ถูกต้อง",
                });
            }
        }

    </script>
</body>

</html>