<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="setting.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <video autoplay loop muted plays-inline>
        <source src="../img/bg1.mp4" type="video/mp4">
    </video>

    <?php require_once('../components/header.php') ?>

    <div class="wrapper">
        <form action="#">
            <h1>เปลี่ยนชื่อผู้ใช้</h1>

            <div class="centered-container">
                <div class="profile-picture">
                    <label for="profile-image">
                        <img src="../img/Nonny.png" alt="Profile Image">
                    </label>
                    <input type="file" id="profile-image" accept="image/*" style="display: none;">
                </div>
            </div>
        </form>

        <form action="#">
            <div class="input-box">
                <input type="text" id="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
        </form>

        <button type="submit" class="btn">บันทึก</button>

    </div>

    <div class="wrapper">
        <form action="#">
            <h1>เปลี่ยนรหัสผ่าน</h1>
            <div class="input-box">
                <input type="password" id="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <button type="submit" class="btn">บันทึก</button>

        </form>
    </div>

    <div class="wrapper-mag">
        <form action="#">
            <h1>จัดการผู้ใช้งาน</h1>
            <div class="input-box">
                <tr>
                    <td><label>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam deleniti eaque
                            molestias aut cumque minus.</label>
                    </td>
                    <td> <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                    </td>
                    
                </tr>
            </div>

        </form>
    </div>
    </div>


</body>

</html>