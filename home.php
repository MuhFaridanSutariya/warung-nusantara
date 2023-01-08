<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="./images/FARIDAN.png" type="image/x-icon">
   <title>Warung Nusantara</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="./frontend/static/components.css">
  <!-- Add your custom css -->
  <link rel="stylesheet" href="./frontend/styles/home.css">

</head>
<body>
<style type="text/css">
   .sub-title{
   text-align: center;
   font-size: 1.4rem;
   margin-bottom: 1.5rem;
   }

   .header .flex .navbar a{
   font-size: 2rem;
   color:var(--black);
   margin:0 1rem;
   }

   .header .flex .navbar a:hover{
   color:var(--yellow);
   text-decoration: none;
   }

   .btn {
   color: var(--green-1);
   /*border: 3px solid black;*/
   font-family: Poppins;
   font-weight: bold;
   border-radius: 8px;
   font-size: 1.9rem;
   padding: 1.2rem 2rem;
   border: none;
   }

   .primary-btn {
   color: white;
   background: #26643b;
   }

   a:hover{
      text-decoration: none;
   }

   .hero__imgWrapper img{
      margin-top: 70px;
      margin-bottom: 100px;
   }

   .storeInfo__item {
    background-color: #d6e5d8;
   }

   .storeInfo__item .storeInfo__title {
    font-weight: bold;
   }

   .testimonial__item__img{
    border-radius: 20px;
    overflow: hidden;

   }
 
   .testimonial__item__img img {
    object-fit: cover;
    width: 100px;
    height: 200px;
   }
</style>

<?php include 'components/user_header.php'; ?>



<section id="hero">
    <div class="container">
      <div class="hero__wrapper">
        <div class="hero__left" data-aos="fade-left">
          <div class="hero__left__wrapper">

            <h1 class="hero__heading">Warung Nusantara</h1>
            <p class="hero__info">
              Kami menyediakan banyak menu makanan khas indonesia dengan harga yang murah dan pelayanan terbaik untuk pemesanan online maupun offline. 
            </p>
            <div class="button__wrapper">
              <a href="./menu.php" class="btn primary-btn">Explore Menu</a>
            </div>
          </div>
        </div>
        <div class="hero__right" data-aos="fade-right">
          <div class="hero__imgWrapper">
            <img src="./images/heroImg.png">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->
  
  <!-- Store Info Section -->
  <section id="storeInfo" data-aos="fade-up">
    <div class="container">
      <h2 class="testimonial__title">Tentang Kami</h2>
      <div class="storeInfo__wrapper">

        <div class="storeInfo__item">
          <div class="storeInfo__icon">
            <img src="./images/wall-clock-icon.svg" alt="clock icon">
          </div>
          <h3 class="storeInfo__title">
            08:30 - 23:00
          </h3>
          <p class="storeInfo__text">
            Jam Operasional
          </p>
        </div>
        <div class="storeInfo__item">
          <div class="storeInfo__icon">
            <img src="./images/address-icon.svg" alt="clock icon">
          </div>
          <h3 class="storeInfo__title">
            Jl. MT Haryono, Balikpapan
          </h3>
          <p class="storeInfo__text">
            Alamat
          </p>
        </div>
        <div class="storeInfo__item">
          <div class="storeInfo__icon">
            <img src="./images/phone-icon.svg" alt="clock icon">
          </div>
          <h3 class="storeInfo__title">
            +6281212550227
          </h3>
          <p class="storeInfo__text">
            Call Center
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Store Info Section -->
  <!-- Testimonial Section -->
  <section id="testimonial">
    <div class="container">
      <div class="testimonial__wrapper" data-aos="fade-up">
        <h2 class="testimonial__title">Testimoni</h2>
        <div class="testimonial__items__wrapper">
          <div class="testimonial__item">
            <div class="testimonial__item__img">
              <img src="./images/danny.jfif" alt="Danny Putra">
            </div>
            <div class="testimonial__item__info">
              <h3 class="testimonial__item__name">Danny Putra</h3>
              <div class="testimonial__item__stars">
                <img src="./images/3star.png" alt="3 star">
              </div>
              <p class="testimonial__item__text">
                “restoran ini menyajikan makanan nusantara yang sangat enak.saya merekomendasikan untuk kalian semua untuk datang kemari dan berlibur bersama keluarga kalian”
              </p>
            </div>
          </div>
          <div class="testimonial__item">
            <div class="testimonial__item__img">
              <img src="./images/faridan1.jpg" alt="Muh Faridan">
            </div>
            <div class="testimonial__item__info">
              <h3 class="testimonial__item__name">Muh Faridan</h3>
              <div class="testimonial__item__stars">
                <img src="./images/3star.png" alt="3 star">
              </div>
              <p class="testimonial__item__text">
                "makanan disini sangat enak enakk rasanya seperti ingin terbang melayang.kalian harus mencoba makanan disini guyss.."
              </p>
            </div>
          </div>
          <div class="testimonial__item">
            <div class="testimonial__item__img">
              <img src="./images/ziksi.jfif" alt="Zhicxi Aziz">
            </div>
            <div class="testimonial__item__info">
              <h3 class="testimonial__item__name">Zhicxi Aziz</h3>
              <div class="testimonial__item__stars">
                <img src="./images/3star.png" alt="3 star">
              </div>
              <p class="testimonial__item__text">
                “untuk pelayanan di restoran ini sangat baguss selalu on time dan pelayanan yg sangat ramah,dan juga makanan nya pun enak enak"
              </p>
            </div>
          </div>
          <div class="testimonial__item">
            <div class="testimonial__item__img">
              <img src="./images/safari.jfif" alt="safari">
            </div>
            <div class="testimonial__item__info">
              <h3 class="testimonial__item__name">Safari</h3>
              <div class="testimonial__item__stars">
                <img src="./images/3star.png" alt="3 star">
              </div>
              <p class="testimonial__item__text">
                “makanannya sangat enak, pelayanan sangat cepat dan modern, terimakasih cayang“
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- End Newsletter Section -->

<?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>

</body>
</html>