<?php
include("include/config.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LogIn Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    body {
      background-color: #555555;
    }
    .container {
      background-color: #e5e4e2;
      padding: 20px;
      border-radius: 10px;
      max-width: 500px;
      margin: 30px auto;
    }
    .form-group {
      margin-bottom: 15px; /* ลดระยะห่างระหว่างฟิลด์ */
    }
    .form-group label {
      font-weight: bold;
    }
    .form-check-label {
      font-size: 14px;
    }
    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
    footer a {
      color: #0dcaf0;
      text-decoration: none;
    }
    footer a:hover {
      text-decoration: underline;
    }
</style>
<body>

<div class="container">
    <h2>Login page</h2>
    <form action="checklogin.php" method="post">

        <div class="form-group">
          <label for="username">UserName:</label>
          <input type="text" class="form-control" id="username" placeholder="Enter UserName" name="username" required>
        </div>
        <div class="form-group">
          <label for="loginpassword">Password:</label>
          <input type="password" class="form-control" id="loginpassword" placeholder="Enter Password" name="loginpassword" required>
        </div>
          
    </form>
    <div class="row">
        <div class="col">ถ้าท่านยังไม่ได้สมัครสมาชิก<a href="signup.php" target="blank1"> >>ลงทะเบียนที่นี่</a></div>
    </div>
    <button type="submit" class="btn btn-success mt-3" name="login" id="login">Login</button>
</div>

<!-- Footer -->
<footer>
<p>© 2025 YourWebsite. All Rights Reserved. <a href="nothing.php">Privacy Policy</a></p>
</footer>

</body>
</html>
