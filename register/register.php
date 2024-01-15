<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>

    <div class="login-container">
        <div class="login-box">
            <h2>สมัครสมาชิก</h2>
            <form id="loginForm">
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" id="username" name="username" required>
                </div>

                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="email" placeholder="Email" id="email" name="email" required>
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" id="password" name="password" required>
                </div>

                <button type="button" onclick="register()">สมัครสมาชิก</button>
                หากเป็นสมาชิกแล้ว<a href="login.php">เข้าสู่ระบบ</a>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function register() {
            var username = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            if (username && email && password) {
                Swal.fire({
                    title: "สมัครสมาชิกสำเร็จ!",
                    text: "คุณได้ทำการสมัครสมาชิกเรียบร้อยแล้ว",
                    icon: "success"
                });
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "กรุณากรอกข้อมูลให้ครบถ้วน",
                });
            }
        }
    </script>
</body>

</html>
