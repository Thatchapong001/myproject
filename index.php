<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background-color: #555555; /* สีพื้นหลังหลัก */
    }

    .jumbotron h1, .jumbotron p {
      font-family: 'Arial', sans-serif;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    img {
      border-radius: 10px;
      max-width: 100%; /* ทำให้รูปยืดหยุ่นตามขนาดหน้าจอ */
      height: auto;
    }

    .navbar, .nav-link.whi {
      color: white !important;
    }

    .jumbotron.text-center {
      color: white;
      text-shadow: 1px 1px 2px black;
    }

    /* กำหนดขนาดของกรอบรูป */
    .container img {
      width: 100%;
      max-width: 550px; /* ขนาดสูงสุดของรูป */
      margin: 0 auto; /* จัดให้อยู่กลาง */
    }

    /* กำหนดให้กรอบมีขนาดพอดีกับเนื้อหา */
    .col-sm-8, .col-sm-4 {
      background-color: #e5e4e2;
      padding: 15px;
      border-radius: 10px;
    }


    /* ปรับขนาดกรอบสำหรับหน้าจอเล็ก */
    @media (max-width: 768px) {
      .col-sm-8, .col-sm-4 {
        padding: 15px;
      }

      .container img {
        max-width: 100%;
      }
    }

    /* ปรับขนาดกรอบสำหรับหน้าจอที่ใหญ่ขึ้น */
    @media (min-width: 768px) {
      .col-sm-8 {
        max-width: 70%;
      }
    }
  </style>
</head>
<body>
 <!-- header -->
<div class="jumbotron text-center" style="margin-bottom:0; background-color:#080808;">
  <h1>Blog of ForWhat </h1>
  <p>I don't have sanity, I don't know what i do</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto"> <!-- เพิ่ม ml-auto ที่นี่ -->
      <li class="nav-item">
        <a class="nav-link" href="index.php" target="blank">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php" target="blank">LogIn</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Signup.php" target="blank">SignUp</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">

    <div class="col-sm-4">
      <h2>About My Luck</h2>
      <h5>Photo of Luck:</h5>
      <div class="fakeimg"> 
        <img src="https://s3.getstickerpack.com/storage/uploads/sticker-pack/3rd-aniv-arknights/sticker_14.gif?174d52872f3de9bf2a6016a9e0c63aa0&d=200x200">
      </div>
      <p>Nah i need to go Sleep</p>
      <h3>Some Links</h3>
      <p>my happiness.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="https://www.arknights.global/" target="blank">Active</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Me in Holiday</h2>
      <div class="fakeimg">
        <img src="https://s3.getstickerpack.com/storage/uploads/sticker-pack/3rd-aniv-arknights/sticker_4.gif?174d52872f3de9bf2a6016a9e0c63aa0">
      </div>
      <p>Someone Help Me..</p>
      <p>I wanna Sleep but I can't</p>
    </div>
  </div>
</div>

<!-- footer -->
<div class="jumbotron text-center" style="margin-bottom:0; background-color: #191970;">
  <h1>See you later monkey friend</h1>
  <p>Stay to be monkey with us!!</p> 
  <p>© 2025 YourWebsite. All Rights Reserved. <a href="nothing.php" target="Blank">Privacy Policy</a></p>
</div>

</body>
</html>
