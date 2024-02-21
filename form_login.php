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
  <h1>Auto&RayShop</h1>
</div>
<div class="wrapper">
<div class="inner-warpper text-center">
    <h2 class="title">เข้าสู่ระบบ</h2>
    <form action="process_login.php" method="POST">
      <div>
        <input name = "email_account" type="text" placeholder="อีเมลผู้ใช้" required>
      </div><br>
      
      <div>
        <input name = "password_account" type="password" placeholder="รหัสผ่าน" required>
      </div><br>
      
      <button type = "submit">Login</button>
        
    </form>
  </div>
  <div class="signup-wrapper text-center">
    <a href="form_register.php">Don't have an accout? <span class="text-primary">Create One</span></a>
  </div>
</div>



<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="login/script.js"></script>

</body>
</html>
