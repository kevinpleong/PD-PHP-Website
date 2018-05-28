<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pawsitively Delicious</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="login/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="login/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="login/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Pawsitively Delicious : Login</h2>
               
                <h5>( Login yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" action="login.php" method="post">
                                       <br />
                                   
                                        <label for="username">Username:</label>
									   <div class="form-group input-group">
    										<span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="uname" class="form-control" placeholder="Your Username " required/>
                                        </div>
										
                                         <label for="password">Password:</label>
										<div class="form-group input-group">
										<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                    <input type="password" class="form-control" name="pass" placeholder="Your Password" required />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="#" >Forget password ? </a> 
                                            </span>
                                        </div>

                    <button type="submit" class="btn btn-primary " name="submit">
                   <span ></span> Login Now
                 
				       </button>
                                                             
								  <hr />
									         Not register ? <a href="registration.php" >click here </a> 
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="login/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="login/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="login/assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="login/assets/js/custom.js"></script>
   
</body>
</html>



<?php
include 'login/db/connection.php';
if(isset($_POST['submit'] ) ){
	 
	 $uname=$_SESSION['uname']=$_POST['uname'];
	  $pass=$_POST['pass'];
	$query="SELECT * FROM `registration` WHERE uname='$uname' and password='$pass'";
  $run=mysqli_query($con,$query);	
	  if(mysqli_num_rows($run)>0){
		echo"<script>window.open('index.php','_self')</script>";
		}
		else
		{
		  echo "<script>alert('User Name or Password are wrong')</script> ";
	  }

	  }

?>