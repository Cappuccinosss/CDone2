<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="login/styles.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="logo text-center">
  <h1>Logo</h1>
</div>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">สร้างบัญชี</h2>
    <form action="process_register.php" method="POST">
      <div>
        <input name = "username_account" type="text" placeholder="ชื่อผู้ใช้" required>
      </div><br>
      <div>
        <input name = "email_account" type="email" placeholder="อีเมล" required>
      </div><br>
      <div>
        <input name = "password_account1" type="password" placeholder="รหัสผ่าน" required>
      </div><br>
      <div>
        <input name = "password_account2" type="password" placeholder="ยืนยัน" required>
      </div><br>
      <button type = "submit">สร้างบัญชี</button><br>
      <a href="form_login.php">มีบัญชีแล้ว</a><br>
        
    </form>
  </div>
  
</div>


  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="login/script.js"></script>

</body>
</html>
