<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="slider.css">
    <title>Home</title>
</head>
<body>
<?php
include('header.php'); ?>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/1.jpg" style="width:100%; height: 400px;" id="img">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/2.jpg" style="width:100%; height: 400px;" id="img">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/3.jpg" style="width:100%; height: 400px;" id="img">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<!-- <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div> -->
<div class="buy">
    <div class="include">
    <img src="images/car1.jpg" alt="">
    </div>
    <div class="include">
    <img src="images/car2.png" alt="">
    </div>
    <div class="include">
    <img src="images/car3.jpeg" alt="">
    </div>
</div>
<div class="buy">
    <div class="include">
    <img src="images/lap1.jpg" alt="">
    </div>
    <div class="include">
    <img src="images/lap2.jpg" alt="">
    </div>
    <div class="include">
    <img src="images/lap3.jpeg" alt="">
    </div>
</div>
<div class="buy">
    <div class="include">
    <img src="images/phone1.webp" alt="">
    </div>
    <div class="include">
    <img src="images/phone2.jpg" alt="">
    </div>
    <div class="include">
    <img src="images/phone3.jpg" alt="">
    </div>
</div>
<footer>
<div class="row primary">
  <div class="column about">

  <h3>JomoShop</h3>

   <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae,
      voluptatem corporis error non,
  </p>

  <div class="social">
    <i class="fa-brands fa-facebook-square"></i>
    <i class="fa-brands fa-instagram-square"></i>
    <i class="fa-brands fa-twitter-square"></i>
    <i class="fa-brands fa-youtube-square"></i>
    <i class="fa-brands fa-whatsapp-square"></i>
  </div>
</div>

<div class="column links">
<h3>Some Links</h3>

 <ul class="ul">

  <li class="li">
   <a href="#faq">F.A.Q</a>
  </li>
  <li class="li">
   <a href="#cookies-policy">Cookies Policy</a>
  </li>
  <li class="li">
   <a href="#terms-of-services">Terms Of Service</a>
  </li>
  <liclass="li" >
   <a href="#support">Support</a>
  </li>
 </ul>

</div>


<div class="column links">
  <h3>Some Links</h3>
   <ul class="ul">
    <li class="li">
     <a href="#faq">F.A.Q</a>
    </li>
    <li class="li">
     <a href="#cookies-policy">Cookies Policy</a>
    </li>
    <li class="li">
    <a href="#terms-of-services">Terms Of Service</a>
    </li>
    <li class="li">
    <a href="#support">Support</a>
    </li>
  </ul>
</div>

<div class="column subscribe">
 <h3>Newsletter</h3>
  <div>
   <input type="email" placeholder="Your email id here" id="input">
   <button class="button">Subscribe</button>
  </div>

</div>

</div>

<div class="row copyright">
  <div class="footer-menu">

  <a href="">Home</a>
  <a href="">About</a>
  <a href="">Contact</a>
  <a href="">Blog</a>
  <a href="">Social</a>

  </div>
   <p>Copyright &copy; 2021 JomoShop</p>
</div>
</footer>
<script src="slider.js"></script>
</body>
</html>