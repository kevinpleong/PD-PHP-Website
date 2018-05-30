<!DOCTYPE html>
<html>

<head>
  <title>Shop</title>
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
<?php                include("includes/navbar.php");  
  ?>  
  <!-- Beginning of content -->
  <div class="row ">
    <div class="col-md-12 ">
      <h1>
Shop
</h1>
      <!-- End of row -->
      <p>Fully customize the dog treats to what your dog likes. If your dog is picky or has very serious allergies then click the customize button below. You can fully customize the dog treats so that you do not have to worry. You won't have to loose sleep
        over what your dog might have eaten to get such a horrible allergic reaction. You can fully customize the dog treats so that you only give your dog what you <em>know</em> they can eat. Stop buying treats that have artificial colors or flavors
        and buy the right dog treats. Dogs are a part of our family so treat them like you should.</p>
      <button type="button" name="button"><a href="Customized shop.html">Customize</a></button>

      <!-- BEGINNING OF TYPES OF BINDING AGENTS -->
      <h3>
<b>Please choose what type of flour or binding agent you would like me to use. Please make sure that you choose a type of binding agent that your dog is not allergic to.</b>
</h3>
      <h4>
<b>Please refer to the page <a href="Herb Health Benefits.html">Ingredient Health Benefits</a></b> before choosing.
</h4>
      <select name="Binding Agent" placeholder="Please choose a binding agent">
<option>All-purpose Flour</option>
<option>Brown Rice flour</option>
<option>Cornflour</option>
<option>
Garbanzo Bean flour</option>
<option>Oats</option>
<option>Wheat flour</option>
<option>White rice flour</option>
</select>
      // END OF TYPES OF BINDING AGENTS

      <!-- BEGINNING OF TYPES OF DOG TREATS -->
      <h3>
<b>What type of dog treat base would you like?</b>
</h3>
      <input type="radio" name="Type of Dog Treats" value="Apple and Peanut butter">
      <label for="Dog Treats">Apple and Peanut butter</label>
      <br>
      <input type="radio" name="Type of Dog Treats" value="Apple and Spinach">
      <label for="Dog Treats">Apple and Spinach</label>
      <br>
      <input type="radio" name="Type of Dog Treats" value="">
      <label for="Dog Treats">Banana and Peanut butter</label>
      <br>
      <input type="radio" name="Type of Dog Treats" value="Carrot and Spinach">
      <label for="Dog Treats">Carrot and Spinach</label>
      <br>
      <input type="radio" name="Type of Dog Treats" value="Carrot and Pumpkin">
      <label for="Dog Treats">Carrot and Pumpkin</label>
      <br>
      <input type="radio" name="Type of Dog Treats" value="Carrot and Sweet Potato">
      <label for="Dog Treats">Carrot and Sweet Potato</label>
      <br>
      <input type="radio" name="Type of Dog Treats" value="Pumpkin and Sweet Potato">
      <label for="Dog Treats">Pumpkin and Sweet Potato</label>
      <br>
      <h3>Click the button to see how you should store your dog treats when you get them.</h3>
      <button type="button" name="button"><a href="Storing.html">How to store your dog treats</a></button>
      <br>
      <br>
      <input type="submit" name="Add to cart">
      <br>
      <!-- END OF TYPES OF DOG TREATS -->
    </div>
  </div>

  <?php include("includes/Footer.php");  
  ?>  

  <br>
  </div>
</body>
<html>
