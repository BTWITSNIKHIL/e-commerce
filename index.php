<?php
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "eshp";
$insert = false;
$showAlert = false;
$showError = false;

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
  die("Sorry we failed to connect: " . mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <title>Shopping Website</title>
  <style>
    .login {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
      width: 100%;
    }

    .login>form {
      display: flex;
      align-items: center;
      flex-direction: column;
      padding: 30px;
      border-radius: 10px;
      background-color: #fff;
      border: 1px solid rgb(0, 0, 0, 0.1);
    }

    .login .title {
      color: rgb(30, 30, 30);
      font-size: 18px;
      font-weight: bold;
      margin: 30px auto 20px;
    }

    .login input {
      width: 300px;
      border-radius: 4px;
      margin: 10px auto;
      padding: 11px 15px;
      background-color: rgb(245, 245, 245);
      outline: none;
      border: 1px solid rgb(0, 0, 0, 0);
      font-size: 15px;
      color: rgb(30, 30, 30);
      transition: 0.3s;
    }

    .login input::placeholder {
      color: rgb(200, 200, 200);
    }

    .login input:hover {
      background-color: #f1eff1;
    }

    .login input:focus {
      background-color: #fff;
      border: 1px solid rgb(87, 126, 219);
      box-shadow: 0 0 4px 2px rgb(50, 50, 50, 0.1);
    }

    .login input:valid {
      border: 1px solid rgb(220, 220, 220);
    }

    .login button {
      border-radius: 4px;
      background-color: rgb(87, 126, 219);
      height: 45px;
      padding: 12px;
      width: 260px;
      font-size: 14px;
      font-weight: 500;
      color: #fff;
      border: none;
      cursor: pointer;
      margin: 20px auto;
      transition: 0.3s;
    }

    .login button:hover {
      background-color: #3a6dd8;
    }

    .login button i {
      font-size: 16px;
    }

    .login .buttonShadow {
      background-color: #fff;
      color: rgb(100, 100, 100);
      border: 1px solid rgb(50, 50, 50, 0.1);
    }

    .login .buttonShadow:hover {
      background-color: rgb(50, 50, 50, 0.2);
    }

    .login a {
      text-decoration: none;
      color: rgb(160, 160, 160);
      font-size: 12px;
    }

    .login .text {
      font-size: 15px;
      margin: 40px auto 0;
      color: rgb(20, 20, 20);
    }

    @media only screen and (max-width: 830px) {
      .login>div {
        border-radius: 0;
        width: 100%;
        height: 100%;
        padding: 0;
        overflow: auto;
        box-shadow: none;
      }
    }

    #rightContainer {
      position: relative;
      right: 70px;
    }
  </style>
</head>

<body>
  <nav>
    <div class="left">
      <a href="#">Eshop</a>
    </div>
    <div class="mid">
      <a href="#home">Home</a>
      <a href="#products">Product</a>
      <a href="#footer">About</a>
      <a href="#footer">Contact</a>
    </div>
    <div class="right">
      <a href="">Login</a>
    </div>
  </nav>
  <section class="home" id="home">
    <div class="container" id="leftContainer">
      <h1>Live Your Life In</h1>
      <h2>A new style!</h2>
      <p>They say first impression is the last impression. Don't wait, Bless yourself with perfect clothing.</p>
      <button>Explore Now →</button>
    </div>
    <div class="container" id="rightContainer">
      <div id="img">
        <div class="login">

          <form action="welcome.php" method="post">
            <p class="title">Log In</p>
            <input placeholder="Email" required name="email" />
            <input placeholder="Password" type="password" required name="password" />
            <button type="submit" class="loader">Sign in</button>
            <p class="text">Don't have an account?</p>
            <button type="button" class="buttonShadow" onclick="window.location.href='SignUp.php'">Create new account</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <footer id="footer">
    <div class="leftFooter">
      <h4>DOWNLOAD OUR APK</h4>
      <p>Download App for Android and IOS mobile phone</p>
      <img src="./image/playstore.png" alt="playstore" />
      <img src="./image/Appstore.png" alt="Appstore" />
    </div>

    <div class="midFooter">
      <h1>EShop</h1>
      <p>
        Our Purpose Is To Sustainably Make the Pleasure and Benefits of
        Clothes Accessible to the Many
      </p>

      <p>Copyrights 2023 &copy; Shahid Khan</p>
    </div>

    <div class="rightFooter">
      <h4>Follow Me</h4>
      <a href="https://www.instagram.com/shahid_vk18/"><i style="font-size:24px" class="fa">&#xf16d;</i>Shahid_vk18</a>
      <a href="https://www.linkedin.com/in/md-shahid-khan-1a471b153/"><i style="font-size:24px" class="fa">&#xf08c;</i>ShahidKhan</a>
      <a href="https://github.com/VampsDamon"><i style="font-size:24px" class="fa">&#xf09b;</i>VampsDamon</a>
    </div>
  </footer>

  <?php
  $login = false;
  $showError = false;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $password = $_POST["password"];
    $email = $_POST["email"];

    $checksql = "SELECT * FROM `signup` where  password='$password' AND email='$email'";
    $result = mysqli_query($conn, $checksql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
      $login = true;
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $email;
      header("location: welcome.php");
    }
    else {
      $showError = true;
    }
  
  

  if ($login) {
    echo '<script>alert("You are logged in ")</script>';
  }
  if ($showError) {
    echo '<script>alert("Invalid Credentials ")</script>';
  }
}

  ?>
</body>

</html>