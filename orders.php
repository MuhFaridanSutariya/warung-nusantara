<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:login.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="./images/FARIDAN.png" type="image/x-icon">
   <title>Pesanan | Warung Nusantara</title>

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
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>orders</h3>
   <p><a href="html.php">home</a> <span> / orders</span></p>
</div>

<section class="orders">

   <h1 class="title">your orders</h1>

   <div class="box-container">

   <?php
      if($user_id == ''){
         echo '<p class="empty">please login to see your orders</p>';
      }else{
         $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ?");
         $select_orders->execute([$user_id]);
         if($select_orders->rowCount() > 0){
            while($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box">
      <p>placed on : <span><?= $fetch_orders['placed_on']; ?></span></p>
      <p>name : <span><?= $fetch_orders['name']; ?></span></p>
      <p>email : <span><?= $fetch_orders['email']; ?></span></p>
      <p>number : <span><?= $fetch_orders['number']; ?></span></p>
      <p>address : <span><?= $fetch_orders['address']; ?></span></p>
      <p>payment method : <span><?= $fetch_orders['method']; ?></span></p>
      <p>your orders : <span><?= $fetch_orders['total_products']; ?></span></p>
      <p>total price : <span>Rp. <?= $fetch_orders['total_price']; ?>/-</span></p>
      <p> payment status : <span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){ echo 'red'; }else{ echo 'green'; }; ?>"><?= $fetch_orders['payment_status']; ?></span> </p>
   </div>
   <?php
      }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
      }
   ?>

   </div>

</section>










<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->






<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>