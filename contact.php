<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_message->execute([$name, $email, $number, $msg]);

   if($select_message->rowCount() > 0){
      $message[] = 'already sent message!';
   }else{

      $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$user_id, $name, $email, $number, $msg]);

      $message[] = 'sent message successfully!';

   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="./images/FARIDAN.png" type="image/x-icon">
   <title>Kontak | Warung Nusantara</title>

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
   font-family: 'Poppins';
   font-weight: bold;
   border-radius: 8px;
   font-size: 1.9rem;
   padding: 1.2rem 2rem;
   width: 200px;
   border: none;
   }

   .primary-btn {
   color: white;
   background: #26643b;
   }

   a:hover{
      text-decoration: none;
   }

   input {
      border:1px solid black;
   }

   .form__group input {
      background-color: #d6e5d8;
   }

   .form__group textarea {
      background-color: #d6e5d8;
   }
 
</style>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>contact us</h3>
   <p><a href="home.php">home</a> <span> / contact</span></p>
</div>

<!-- contact section starts  -->

<section id="form" data-aos="fade-down">
    <div class="container">
      <h3 class="form__title">
        Pengaduan anda
      </h3>
      <div class="form__wrapper">
        <form action="" name="contact" method="POST" netlify>
          <div class="form__group form__group__full">
            <label for="firstName">Nama Anda</label>
            <input type="text" id="firstName" name="name" placeholder="Masukkan nama anda" required>
          </div>
          <div class="form__group form__group__full">
            <label for="email">Email Anda</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email anda" required>
          </div>
          <div class="form__group form__group__full">
            <label for="subject">No. Telp</label>
            <input type="number" name="number" id="subject" min="0" max="9999999999" maxlength="10"  placeholder="Masukkan no.telp anda" required>
          </div>
          <div class="form__group form__group__full">
            <label for="message">Message</label>
            <textarea name="msg" id="message" cols="30" rows="10" required></textarea>
          </div>
          <input type="submit" name="send" value="kirim pesan" class="btn primary-btn">
        </form>
      </div>
    </div>
  </section>

<!-- contact section ends -->










<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->








<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>