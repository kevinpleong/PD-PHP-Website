<!DOCTYPE html>
<html>

<head>
  <title>Pet Wall</title>
  <link rel="shortcut icon" href="favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="./style.css">

  <!-- Bootstrap DEPENDENCIES-->
  <!-- JQUERY IS A JAVASCRIPT FRAMEWORK THAT BOOTSTRAP NEEDS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme THAT ENABLES DROPDOWN MENUS AND OTHER FEATURES-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- END OF BOOTSTRAP DEPENDENCIES-->




  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="container">
  <?php include("includes/navbar.php");   
  ?>  
  <div class="row">

// BEGINNING OF CONTENT    
<div class="row">

      <div class="col-md-12">
        <h1><b>Pet Wall</b></h1>
        <div id="disqus_thread"></div>
        <script>
          /**
           *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
           *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
          /*
          var disqus_config = function () {
          this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
          this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
          };
          */
          (function() { // DON'T EDIT BELOW THIS LINE
            var d = document,
              s = d.createElement('script');
            s.src = 'https://pawsitively-delicious-com.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
          })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      </div>
    </div>
    <!-- END OF CONTENT -->

    <br><br>
    <hr><br>

    <!-- BEGINNING OF FOOTER -->
    <?php include("include/Footer.php");  
  ?>  
    <!-- END OF FOOTER -->
    <br>
  </div>
</body>
<html>