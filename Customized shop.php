<!DOCTYPE html>
<html>

<head>
  <title>Customize</title>
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

  <?php include("includes/navbar.php"); ?>

<!-- BEGINNING OF SHOP CONTENT -->
  <div class="row ">
    <div class="col-md-12 " <form>
      <h3>
  <b>Please refer to the ingredient health benefits before customizing your order. Thank you.</b>
</h3>
      <h5><a href="Herb Health Benefits.html">Herb Health Benefits</a></h5>
      <!-- BEGINNING OF NUMBER OF PACKAGES -->
      <h3>
    <b>How many packages would you like? </b>
  </h3>
      <input type="number" name="Number of Packages" value="Number of Packages" placeholder="Number">
      <br>
      <br>
      <h3>What size would you like your dog treats to be?</h3>
      <select>
<label for="Size" placeholder="Size">Cookie size</label>
<option>Small about 1/4 inch</option>
<option>Medium about 1/2 an inch</option>
<option>Large about 1 inch</option>
</select>
      <br>
      <br>
      <!-- BEGINNING OF TYPES OF BINDING AGENTS -->
      <h3>
  <b>Please choose what type of Flour or binding agent you would like me to use. Please make sure that you choose a type of binding agent that your dog is not allergic to.</b>
</h3>
      <h4>
    <b>Please refer to the page <a href="Herb Health Benefits.html">Ingredient Health Benefits</a></b> before choosing.
  </h4>
      <select name="Binding Agent" placeholder="Please choose a binding agent">
<option>All-Purpose Flour</option>
<option>Almond Flour</option>
<option>Barley Flour</option>
<option>Brown Rice Flour</option>
<option>Buckwheat</option>
<option>Coconut Flour</option>
<option>Corn Flour</option>
<option>
Garbanzo Bean Flour</option>
<option>Hazelnut Flour</option>
<option>Lentil Flour</option>
<option>Millet</option>
<option>Oats</option>
<option>Oat Flour</option>
<option>Peas Flour</option>
<option>Quinoa Flour</option>
<option>Sorghum Flour</option>
<option>Wheat Flour</option>
<option>White Rice Flour</option>
</select>
      <!-- END OF TYPES OF BINDING AGENTS -->
      <br>
      <br>
      <!-- BEGINNING OF TYPE OF LIQUID BINDING AGENT OF DOG TREATS -->
      <h3>
  <b>What type of dog treat base would you like?</b>
</h3>
      <input type="checkbox" name="Applesauce" value="">
      <label for="liquid binding">Apples</label>
      <br>

      <input type="checkbox" name="Bananas" value="">
      <label for="liquid binding">Banana</label>
      <br>

      <input type="checkbox" name="Carrot" value="">
      <label for="liquid binding">Carrots</label>
      <br>

      <input type="checkbox" name="Peanut butter" value="">
      <label for="liquid binding">Peanut butter</label>
      <br>

      <input type="checkbox" name="Pumpkin" value="">
      <label for="liquid binding">Pumpkin Purée</label>
      <br>

      <input type="checkbox" name="Red Cabbage" value="">
      <label for="liquid binding">Red Cabbage</label>
      <br>
      <input type="checkbox" name="Spinach" value="">
      <label for="liquid binding">Spinach</label>
      <br>

      <input type="checkbox" name="Sweet Potato" value="">
      <label for="liquid binding">Sweet Potatoes</label>

      <br>
      <!-- END OF TYPE OF LIQUID BINDING AGENT OF DOG TREATS -->
      <br>
      <!-- END OF TYPES OF DOG TREATS -->
      <!-- BEGINNING OF DIFFERENT TYPES OF HERBS -->
      <h3>
<b>Please select the herbs you would like me to put in the dog treats.</b>
</h3>
      <h4>
  <b>Please refer to the page <a href="Herb Health Benefits.html">Ingredient Health Benefits</a></b> before choosing.
</h4>
      <input type="checkbox" name="Sage" value="">
      <label for="Herbs">Sage</label>
      <br>
      <input type="checkbox" name="Thyme" value="">
      <label for="Herbs">Thyme</label>
      <br>
      <input type="checkbox" name="Basil" value="">
      <label for="Herbs">Basil</label>
      <br>
      <input type="checkbox" name="Rosemary" value="">
      <label for="Herbs">Rosemary</label>
      <br>
      <input type="checkbox" name="Oregano" value="">
      <label for="Herbs">Oregano</label>
      <br>
      <input type="checkbox" name="Parsley" value="">
      <label for="Herbs">Parsley</label>
      <br>
      <input type="checkbox" name="Garlic" value="">
      <label for="Herbs">Garlic</label>
      <br>
      <input type="checkbox" name="turmeric" value="">
      <label for="Herbs">Turmeric</label>
      <br>
      <input type="checkbox" name="Egg Shell Calcium" value="">
      <label for="Herbs">Egg Shell Calcium</label>

      <h3>Additional add-ins that you can choose.</h3>
      <h4>
  <b>Please refer to the page <a href="Add-in Health Benefits.html">Add-in ingredient health benefits</a></b> before choosing.
</h4>
      <input type="checkbox" name="Honey" value=""> <label for="Add-in">Honey</label>
      <br>
      <input type="checkbox" name="Pumpkin Seeds" value=""> <label for="Add-in">Pumpkin Seeds</label>
      <br>
      <input type="checkbox" name="Cranberries" value=""> <label for="Add-in">Cranberries</label>
      <br>
      <br>
      <!-- END OF DIFFERENT TYPES OF HERBS -->
      <input type="submit" name="Add to cart">

      </form>
    </div>
  </div>

  <!-- END OF SHOP CONTENT -->
  <br><br>
  <hr><br>

    <?php include("includes/Footer.php"); ?>
    
  <br>
  </div>
</body>
<html>
