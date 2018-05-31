<!DOCTYPE html>
<html>

<head>
  <title>Buckwheat Flour Nutrition Facts</title>
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
</head>

<body class="container">
  <!-- BEGINNING OF NAVBAR -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Pawsitively Delicious</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="About Us.html">About Us</a></li>

        <!-- BEGINNING OF INGREDIENT DROPDOWN MENU -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="List of Ingredients.html">Ingredients
                          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Types of Dog Treats.html">Types of Dog Treats</a></li>
            <li><a href="List of Ingredients.html">Ingredients</a></li>
            <li><a href="Ingredient Nutrition Facts.html">Ingredient Nutrition Facts</a></li>
            <li><a href="Storing.html">How to store the treats</a></li>
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
      <div id="search">
        <form action="">
          <input type="text" name="text" placeholder="Search">
          <input type="submit" name="submit" value="SEARCH">
      </div>
    </div>
  </nav>
  <!-- END OF NAVBAR -->

  <!-- Beginning of content -->
  <div class="row ">

    <div class="col-md-12 ">
      <h2>Buckwheat Flour Nutrition Facts</h2>
      <hr>
      <h2>
          <b>Buckwheat</b>
        </h2>
      <div class="row">
        <div class="col-md-4">
          <img class="img-responsive" src="./Assets/buckwheat.jpg" alt="Lot of buckwheat grains">
        </div>
      </div>
      <ul>
        <li>Contains lots of Soluble Fiber</li>
        <li>Promotes Colon Health</li>
        <li>High Protein levels</li>
        <li>Full of:</li>
        <ul>
          <li>Vital Minerals</li>
          <li>Vitamins</li>
          <li>Helps with normalizing their digestive tract</li>
          <li>Slows down Glucose absorption</li>
        </ul>
        <ul>
          <li>Source of:</li>
          <ul>
            <li>Magnesium</li>
            <li>Manganese</li>
            <li>Potassium</li>
            <li>B-Vitamins</li>
            <li>Polyphenol compounds (Plant based antioxidants)</li>
            <li>Rutin (powerful bioflavonoid)</li>
          </ul>
        </ul>
      </ul>
      <br><br>
      <hr><br>
    </div>
    <!-- End of content -->
  </div>
  <!-- End of row -->

       <?php include("includes/Footer.php"); ?>
    <br>
    </div>
</body>
</html>