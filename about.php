<?php

@include 'config.php';

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
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>
<div class="heading">
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>


<section class="about">


   <div class="row">

      <div class="box">
         <img src="images/logo.jpg" alt="">
         <h3>Why choose us?</h3>
         <p>We are of the opinion that no one truly appreciates the value of books other than their readers. Hence, Sattva is an initiative for readers by readers. Choose us because we are driven by the same inner drive as you are: the all-encompassing infatuation for books.</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

      

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>