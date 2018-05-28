<?php
 session_start();
 if(!$_SESSION['uname']){
	 header('location:login.php?error=Please Enter Name and Password');
 }
?>

<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <link rel="shortcut icon" href="favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Bootstrap DEPENDENCIES-->
  <!-- JQUERY IS A JAVASCRIPT FRAMEWORK THAT BOOTSTRAP NEEDS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme THAT ENABLES DROPDOWN MENUS AND OTHER FEATURES-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- END OF BOOTSTRAP DEPENDENCIES-->

  <link rel="stylesheet" href="./style.css">


  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <style media="screen">
    body {
      background-color: #b38c19;
    }
  </style> -->
</head>

<body class="container">
  <!-- BEGINNING OF NAVBAR -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Pawsitively Delicious</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="About Us.html">About Us</a></li>

        <!-- BEGINNING OF INGREDIENT DROPDOWN MENU -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="List of Ingredients.html">Ingredients
                          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Types of Dog Treats.html">Types of Dog Treats</a></li>
            <li><a href="List of Ingredients.html">Ingredients</a></li>
            <li><a href="Ingredient Nutrition Facts.html">Ingredient Nutrition Facts</a></li>
          </ul>
        </li>
        <!-- END OF INGREDIENT DROP DOWN BAR -->

        <!-- BEGINNING OF REVIEW DROP DOWN BAR -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reviews
                          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Reviews.html">Reviews</a></li>
            <li><a href="Testomonials.html">Testomonials</a></li>

          </ul>
          <!-- END OF REVIEW DROP DOWN BAR -->

          <!-- BEGINNING OF MEDIA DROP DOWN BAR -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Media Content
                            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Pet Wall.html">Pet Wall</a></li>
<li><a href="Video.html">Pet Wall</a></li>
              <li><a href="Pet Wall.html">Pet Wall</a></li>
            </ul>
          </li>
          <!-- END OF MEDIA DROP DOWN BAR -->
          <!-- BEGINNING OF QUESTIONS SECTION -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Questions?
                    <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Contact Us.html">Contact Us</a></li>
              <li><a href="FAQs.html">FAQs</a></li>
            </ul>
          </li>
          <!-- END OF QUESTIONS SECTION -->
          <!-- BEGINNING OF SHOP DROPDOWN MENU -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Shop
                              <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Shop.html">Shop</a></li>
              <li><a href="Customized shop.html">Customize Dog Treats</a></li>
            </ul>
          </li>
          <!-- END OF SHOP DROPDOWN MENU -->
          <li><a href="login.php">Login</a></li>
          <li><a href="registration.php">Register</a></li>
      </ul>
    </div>
  </nav>
  <!-- END OF NAVBAR -->

  <!-- Beginning of Logo -->
  <div class="row">
    <div class="col-md-12">
      <img class="img-responsive center-block" src="./Assets/Pawsitively Delicious Logo.jpg" alt="Pawsitively Delicious Homemade Dog treat logo. A dog with its tongue out and holding a paw.">
    </div>
  </div>
  <!-- End of Logo Code -->

  <div class="row">
    <!-- Beginning of content -->
    <div class="col-md-12">

      <hr>
      <div class="content">
        <h1>
          <b>Home</b>
        </h1>
        <p>Dogs are an essential part of our lives. They are our best friends!</p>
        <p>What better way to show your dog you love them than to give them amazing and delicious homemade dog treats? Your dogs will love our treats! These healthy nuggets are made from whole ingredients, like pumpkins, sweet potatoes, spinach, peanut butter,
          and bananas. As a source of calcium, we use egg shells. Our treats contain no artificial colors or preservatives. The flour is made from garbanzo beans for extra protein. We only use ingredients that dogs are less likely to cause allergic reactions.
          The dog treats are fully customizable so you will definitely find one that your pooch will love.</p>
        <p>We are a small-batch dog treat bakery in northern California, showing your dogs the same love that we give to our special four-legged friends.</p>
        <p>Check us out-subscribe to our newsletter and your first order is 50% off!</p>



      </div>
      <br><br>
      <hr><br>
    </div>
    <!-- End of Content -->
  </div>

  <br><br>
  <hr><br>

  <!-- BEGINNING OF FOOTER -->
  <footer>

    <div class="row">
      <div class="col-md-12">
        <a href="https://www.facebook.com/PawsitivelyDeliciousHomemadeDogTreats/" class="fa fa-facebook" target="_blank"></a>
        <a href="https://www.instagram.com/pawsitivelydeliciousdogtreats/" class="fa fa-instagram" target="_blank"></a>
        <a href="https://twitter.com/DelishDogTreat" class="fa fa-twitter" target="_blank"></a>
        <a href="#" class="fa fa-youtube" target="_blank"></a>
        <a href="http://www.linkedin.com/in/pawsitivelydelicious" class="fa fa-linkedin" target="_blank"></a>
        <a href="https://www.pinterest.com/pawsitivelydelicious" class="fa fa-pinterest" target="_blank"></a>
        <a href="https://www.flickr.com/photos/156408095@N03/" class="fa fa-flickr"></a>
        <a href="#" class="fa fa-tumblr" target="_blank"></a>
      </div>
    </div>
  </footer>
  <!-- END OF FOOTER -->
  <br>
  </div>
  <script id="mcjs">
    ! function(c, h, i, m, p) {
      m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p)
    }(document, "script", "https://chimpstatic.com/mcjs-connected/js/users/9e8f9bce6c54a8ba509884643/254c2322a32c5635960f01033.js");
  </script>

</body>
<html>
