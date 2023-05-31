<?php
session_start();
// echo isset($_SESSION['loggedin']);
// // echo loggedin;

// if((!isset($_SESSION['loggedin'])) || $_SESSION['loggedin']!=true){
//     header("location: index.php");
//     exit;
// }
// else{
//     $_SESSION['loggedin'] = false;
  
// }
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
</head>
<body>
    <nav>
        <div class="left">
            <a href="#">Eshop</a>
        </div>
        <div class="mid">
            <a    href="#home">Home</a>
            <a   href="#products">Product</a>
            <a   href="#footer">About</a>
            <a   href="#footer">Contact</a>
        </div>
        <div class="right">
            
        <a href="logout.php">LogOut</a>
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
            <img src="image/home.png" alt="">
        </div>
    </section>
    <section id="products">
        <h1>Products</h1>
        <div class="prosuctsContainer">
            <!-- ...................... -->
            <div class="product">
                <img src="image/1.webp" alt="Img1">
                <h4>CYAN T-SHIRT</h4>
                <h5>$100</h5>
            </div>
            <!-- ...................... -->
            <!-- ...................... -->
            <div class="product">
                <img src="image/2.webp" alt="Img1">
                <h4>CYAN T-SHIRT</h4>
                <h5>$100</h5>
            </div>
            <!-- ...................... -->
            <!-- ...................... -->
            <div class="product">
                <img src="image/3.webp" alt="Img1">
                <h4>CYAN T-SHIRT</h4>
                <h5>$100</h5>
            </div>
            <!-- ...................... -->
            <!-- ...................... -->
            <div class="product">
                <img src="image/4.webp" alt="Img1">
                <h4>CYAN T-SHIRT</h4>
                <h5>$100</h5>
            </div>
            <!-- ...................... -->
            <!-- ...................... -->
            <div class="product">
                <img src="image/5.webp" alt="Img1">
                <h4>CYAN T-SHIRT</h4>
                <h5>$100</h5>
            </div>
            <!-- ...................... -->
            <!-- ...................... -->
            <div class="product">
                <img src="image/6.jpg" alt="Img1">
                <h4>CYAN T-SHIRT</h4>
                <h5>$100</h5>
            </div>
            <!-- ...................... -->
            <!-- ...................... -->
            <div class="product">
                <img src="image/7.webp" alt="Img1">
                <h4>CYAN T-SHIRT</h4>
                <h5>$100</h5>
            </div>
            <!-- ...................... -->
            <!-- ...................... -->
            <div class="product">
                <img src="image/8.webp" alt="Img1">
                <h4>CYAN T-SHIRT</h4>
                <h5>$100</h5>
            </div>
            <!-- ...................... -->
            
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
    
</body>
</html> 