<!DOCTYPE html>
<html>

<head>
  <title>Contact Us</title>
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
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<?php                include("includes/navbar.php");
<body class="container">
  <div class="jumbotron jumbotron-sm">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-12">
          <h1 class="h1">
                      Contact us <small>Feel free to contact us</small></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="well well-sm">
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">
                                  Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                </div>
                <div class="form-group">
                  <label for="email">
                                  Email Address</label>
                  <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </span>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                </div>
                <div class="form-group">
                  <label for="subject">
                                  Subject</label>
                  <select id="subject" name="subject" class="form-control" required="required">
                                  <option value="na" selected="">Choose One:</option>
                                  <option value="General Customer Service">General Customer Service</option>
                                  <option value="Suggestions">Suggestions</option>
                                  <option value="Product Support">Product Support</option>
                              </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">
                                  Message</label>
                  <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">              Send Message</button>
              </div>
            </div>

            <script type="text/javascript">
              $(function() {
                $("#btnContactUs").click(function() {
                  var name = $("#name").val();
                  var subject = name + " " + $("#subject").val();
                  var body = $("#message").val();
                  console.log(subject, body, name);

                  window.open(`mailto:pawsitivelyhomemadetreats@gmail.com?subject=${subject}&body=${body}`);
                });
              });
            </script>

          </form>
        </div>
      </div>
    </div>
  </div>

  <br><br>
  <hr><br>

    <?php                include("includes/Footer.php");
    
  <br>
  </div>
</body>
<html>
