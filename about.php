<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="./images/FARIDAN.png" type="image/x-icon">
   <title>Tentang | Warung Nusantara</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

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
   font-family: 'Poppins';
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
 
</style>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Mengapa memilih kami?</h3>
         <p>Kualitas Layanan, Makanan, Suasana, dan Harga adalah fokus utama kami untuk customer restoran. Terlebih lagi restoran ini bertempat di dekat pantai Melawai sehingga customer dapat melihat keindahan pantai tersebut secara langsung.</p>
         <a href="menu.php" class="btn primary-btn">Lihat menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">Alur Pembelian</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Memilih Makanan</h3>
         <p>Langkah pertama memilih menu makanan sesuai keinginan lalu order.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p>Selanjutnya, menunggu pengiriman makanan dari restoran kami ke tempat anda.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p>Menyantap makanan yang sangat enak dari restoran kami.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->


















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>