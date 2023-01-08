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
   <title>Menu | Warung Nusantara</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="./frontend/static/components.css">
  <!-- Add your custom css -->
  <link rel="stylesheet" href="./frontend/styles/menu.css">


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

    
  .jumlah-barang input{
   width: 75px;
   background-color: #e2e2e2;
   font-size: 1.8rem;
   font-family: Raleway;
   font-weight: 600;
   padding: 0.7rem ;
   border-radius: 3px;
   margin-top: 1rem;
   margin-left: 0px;
   border: none;
   color: var(--black-2);
  }

.category {
  margin-bottom: 100px;
}

   </style>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>our menu</h3>
   <p><a href="home.php">home</a> <span> / menu</span></p>
</div>

<!-- menu section starts  -->

<section class="category">

   <h1 class="title">Jenis Makanan</h1>

   <div class="box-container">

      <a href="category.php?category=fast food" class="box">
         <img src="images/cat-1.png" alt="">
         <h3>fast food</h3>
      </a>

      <a href="category.php?category=main dish" class="box">
         <img src="images/cat-2.png" alt="">
         <h3>main dishes</h3>
      </a>

      <a href="category.php?category=drinks" class="box">
         <img src="images/cat-3.png" alt="">
         <h3>drinks</h3>
      </a>

      <a href="category.php?category=desserts" class="box">
         <img src="images/cat-4.png" alt="">
         <h3>desserts</h3>
      </a>

   </div>

</section>


  <section class="popular" id="popular">
    <h1 class="title">Semua Menu</h1>

    <div class="box-container">
        <?php
         $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 12");
         $select_products->execute();
         if($select_products->rowCount() > 0){
            while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
        ?>
        <form class="box" action="" method="post">
            
            <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
             <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
             <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
             <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">

          <a href="#" class="fas fa-heart"></a>
          <div class="image">
                <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
          </div>  
          <div class="content">
                <h3 class='name'><?= $fetch_products['name']; ?></h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">Rp. <?= $fetch_products['price']; ?></div>
               <div class="jumlah-barang">
                    <input type="number" id="guestNumber" name="qty" min="1" max="99" value="1" maxlength="2" required>
                </div>
                <button name="add_to_cart" class="btn-order" type="submit">Add To Cart</button>
                </div> 
          </form>  
          <?php
                }
             }else{
                echo '<p class="empty">no products added yet!</p>';
             }
          ?>
          </div> 


</section>


<!-- menu section ends -->

<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->








<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>