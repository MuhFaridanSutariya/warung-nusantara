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
   <title>Sekilas Menu | Warung Nusantara</title>

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
   }

   a:hover{
      text-decoration: none;
   }
 
</style>
   
<?php include 'components/user_header.php'; ?>

<section class="quick-view">

   <h1 class="title">quick view</h1>

   <?php
      $pid = $_GET['pid'];
      $select_products = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
      $select_products->execute([$pid]);
      if($select_products->rowCount() > 0){
         while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="box">
      <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
      <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
      <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
      <div class="name"><?= $fetch_products['name']; ?></div>
      <div class="flex">
         <div class="price"><span>$</span><?= $fetch_products['price']; ?></div>
         <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
      </div>
      <button type="submit" name="add_to_cart" class="cart-btn">add to cart</button>
   </form>
   <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
   ?>

</section>
















<?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>