<!DOCTYPE html>
<html>

<head>
  <title>Testomonial</title>
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
  <div class="row">
    <?php                include("includes/navbar.php");
</div>

    <div class="row">
      <!-- BEGINNING OF CONTENT -->
      <div class="row">

        <div class="col-md-12">
          <h1><b>Testomonials</b></h1>
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
  </body>
  <html>