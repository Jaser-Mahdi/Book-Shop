<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/About.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Welcome to our BookShop! We are a one-stop destination for all your reading needs. Our aim is to provide you with a hassle-free shopping experience and a wide range of books to choose from.</p>
         <p>We offer a vast collection of books spanning across genres such as fiction, non-fiction, self-help, history, politics, biographies, and more. Our platform is designed to cater to the needs of all kinds of readers, whether you're an avid reader or just picking up a book for the first time.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Custmer's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic1.png" alt="">
         <p>It's so convenient to be able to browse and buy books from the comfort of my own home. Overall, a great experience and I will definitely be shopping here again.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Customer 01</h3>
      </div>

      <div class="box">
         <img src="images/pic2.png" alt="">
         <p>The website is easy to navigate, and I love being able to read reviews and see recommendations from other readers. Plus, the shipping is always fast and reliable.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Customer 02</h3>
      </div>

      <div class="box">
         <img src="images/pic3.jpg" alt="">
         <p>If you're looking for an online bookshop with excellent customer service, look no further! I highly recommend this shop to anyone in search of their next great read.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Customer 03</h3>
      </div>

      

   </div>

</section>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>