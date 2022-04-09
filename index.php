<?php

$conn = mysqli_connect('localhost', 'root', '', 'oculist') or die('connection failed');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];
 
    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');
 
    if($insert){
       $message[] = 'appointment made successfully!';
    }else{
       $message[] = 'appointment failed';
    }
 
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oculist</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Header Start -->

<header class="header fixed-top">

    <div class="container">

    <div class="row align-items-center justify-content-between">

    <a href="#" class="logo">better<span>Eyes</span></a>

    <nav class="nav">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#doctors">doctors</a>
        <a href="#reviews">reviews</a>
        <a href="#contact">contact</a>
    </nav>

    <a href="#contact" class="link-btn">make appointment</a>

    <div id="menu-btn" class="fas fa-bars"></div>

    </div>

    </div>

</header>

<!-- Header End -->

<!-- Home Start -->

<section class="home" id="home">

<div class="container">

<div class="row min-vh-100 align-items-center">

<div class="content text-center text-md-left">
    <h3>with us you will see more</h3>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis harum exercitationem expedita illo itaque esse!</p>
    <a href="#contact" class="link-btn">make appointment</a>
</div>

</div>

</div>

</section>

<!-- Home End -->

<!-- About Start -->

    <section class="about" id="about">

    <div class="container">

    <div class="row align-items-center">

    <div class="col-md-6 image">
        <img src="images/about.png" alt="" class="w-100 mb-5 mb-md-0">
    </div>

    <div class="col-md-6 content">
        <span>about us</span>
        <h3>the quality of your eyesight is our priority</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo, vitae repellendus ullam dicta tenetur corporis dignissimos error quis ea modi. Odio repudiandae eligendi maxime nam dolores? Accusantium, eum. Quisquam, itaque?</p>
        <a href="#contact" class="link-btn">make appointment</a>
    </div>

    </div>

    </div>

    </section>

<!-- About End -->

<!-- Services Start -->

    <section class="services" id="services">

    <h1 class="heading">our services</h1>

    <div class="box-container container">

    <div class="box">
        <img src="images/icon1.png" alt="">
        <h3>professional lens replacement</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, quis?</p>
    </div>

    <div class="box">
        <img src="images/icon2.png" alt="">
        <h3>immediate selection of glasses</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, quis?</p>
    </div>

    <div class="box">
        <img src="images/icon3.png" alt="">
        <h3>eye ultrasound</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, quis?</p>
    </div>

    <div class="box">
        <img src="images/icon4.png" alt="">
        <h3>anesthesia</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, quis?</p>
    </div>

    <div class="box">
        <img src="images/icon5.png" alt="">
        <h3>all eye examinations</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, quis?</p>
    </div>

    <div class="box">
        <img src="images/icon6.png" alt="">
        <h3>all kinds of operations</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, quis?</p>
    </div>

    </div>
    
    </section>

<!-- Services End -->

<!-- Doctors Start -->

    <section class="doctors" id="doctors">

    <h1 class="heading">our doctors</h1>

    <div class="box-container container">

    <div class="box">
        <img src="images/doctor1.jpg" alt="">
        <span>specialist</span>
        <h3>john deo</h3>
        <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="images/doctor2.jpg" alt="">
        <span>specialist</span>
        <h3>john deo</h3>
        <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="images/doctor3.jpg" alt="">
        <span>specialist</span>
        <h3>john deo</h3>
        <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

     <div class="box">
        <img src="images/doctor4.jpg" alt="">
        <span>specialist</span>
        <h3>john deo</h3>
        <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="images/doctor5.jpg" alt="">
        <span>specialist</span>
        <h3>john deo</h3>
        <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="images/doctor6.png" alt="">
        <span>specialist</span>
        <h3>john deo</h3>
        <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    </div>

    </section>

<!-- Doctors End -->

<!-- Reviews Start -->

    <section class="reviews" id="reviews">

    <h1 class="heading">satisfied clients</h1>

    <div class="box-container container swiper reviews-slider">

    <div class="swiper-wrapper">

    <div class="swiper-slide box">
    <img src="images/pic-1.png" alt="">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur eius obcaecati quis ipsum ratione ea commodi quae quidem dignissimos nam.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>john deo</h3>
        <span>satisfied client</span>
    </div>

    <div class="swiper-slide box">
    <img src="images/pic-2.png" alt="">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur eius obcaecati quis ipsum ratione ea commodi quae quidem dignissimos nam.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>john deo</h3>
        <span>satisfied client</span>
    </div>

    <div class="swiper-slide box">
    <img src="images/pic-3.png" alt="">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur eius obcaecati quis ipsum ratione ea commodi quae quidem dignissimos nam.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>john deo</h3>
        <span>satisfied client</span>
    </div>

    <div class="swiper-slide box">
    <img src="images/pic-4.png" alt="">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur eius obcaecati quis ipsum ratione ea commodi quae quidem dignissimos nam.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>john deo</h3>
        <span>satisfied client</span>
    </div>

    <div class="swiper-slide box">
    <img src="images/pic-5.png" alt="">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur eius obcaecati quis ipsum ratione ea commodi quae quidem dignissimos nam.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>john deo</h3>
        <span>satisfied client</span>
    </div>

    <div class="swiper-slide box">
    <img src="images/pic-6.png" alt="">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur eius obcaecati quis ipsum ratione ea commodi quae quidem dignissimos nam.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>john deo</h3>
        <span>satisfied client</span>
    </div>




    </div>

    </div>

    </section>

<!-- Reviews End -->

<!-- Contact Stars -->

<section class="contact" id="contact">

<h1 class="heading">make appointment</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   <?php 
      if(isset($message)){
         foreach($message as $message){
            echo '<p class="message">'.$message.'</p>';
         }
      }
   ?>
   <span>your name :</span>
   <input type="text" name="name" placeholder="enter your name" class="box" required>
   <span>your email :</span>
   <input type="email" name="email" placeholder="enter your email" class="box" required>
   <span>your number :</span>
   <input type="number" name="number" placeholder="enter your number" class="box" required>
   <span>appointment date :</span>
   <input type="datetime-local" name="date" class="box" required>
   <input type="submit" value="make appointment" name="submit" class="link-btn">
</form>  

</section>

<!-- Contact End -->

<!-- Footer Start -->

    <section class="footer">

      <div class="box-container container">

      <div class="box">
          <i class="fas fa-phone"></i>
          <h3>phone number</h3>
          <p>123-456-789</p>
          <p>111-222-333</p>
      </div>

      <div class="box">
          <i class="fas fa-envelope"></i>
          <h3>email address</h3>
          <p>random123@wp.pl</p>
        <p>random123@wp.pl</p>
      </div>

      <div class="box">
          <i class="fas fa-clock"></i>
          <h3>opening hours</h3>
                <p> <span>monday - friday :</span> 10:00 am to 00:09 pm </p>
                <p> <span>sunday :</span> closed </p>
      </div>

      <div class="box">
          <i class="fas fa-map-marker-alt"></i>
          <h3>our address</h3>
          <p>warsaw, poland</p>
      </div>

      </div>

      <div class="credit"> &copy; copryright @ <?php echo date('Y') ?> by <span>greemi</span> </div>

    </section>

<!-- Footer End -->






<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="script.js"></script>
    
</body>
</html>