<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Profile</title>
  <link rel="stylesheet" href="setting.css">
</head>

<body>

  <div class="profile-container">
    <div class="profile-image" id="profile-image" onclick="document.getElementById('profile-input').click()">
      <img src="../img/Nonny.png" alt="Profile Image">
      <input type="file" id="profile-input" accept="image/*" onchange="changeProfilePicture(this)">
    </div>

    <div class="profile-info">
      <div><label>ชื่อผู้ใช้งาน</label></div>
      <div><input type="text"></div>
      <div><button>บันทึก</button></div>
    </div>
  </div>
    
  <div class="profile-container">
    
    <div class="profile-info">
      <div><label>รหัสผ่านเก่า</label></div>
      <div><input type="text"></div>

      <div><label>รหัสผ่านใหม่</label></div>
      <div><input type="text"></div>

      <div><button>บันทึก</button></div>
    </div>
  </div>

  <script>
    function changeProfilePicture(input) {
      const file = input.files[0];

      if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
          document.getElementById('profile-image').getElementsByTagName('img')[0].src = e.target.result;
        };

        reader.readAsDataURL(file);
      }
    }
  </script>

</body>

</html>