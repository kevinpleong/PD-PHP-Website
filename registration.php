<?php
include 'login/db/connection.php';
?>

<html>
<head>
<title>Site Name</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="login/register/bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="login/register/assets/signup-form.css" type="text/css" />
<style>

</style>
</head>
</head>

<body >

	<div class="container">
    <div class="signup-form-container">
    
         <!-- form start -->
         <form method="post" role="form" id="register-form" autocomplete="off" action="">
         
         <div class="form-header">
         	<h3 class="form-title"><i class="fa fa-user"></i>Create an Account</h3>
                      
         <div class="pull-right">
             <h3 class="form-title">Pawsitively Delicious<span class="glyphicon glyphicon-pencil"></span></h3>
         </div>
                      
         </div>
                  
         <div class="form-body">
         
         	  <div class="alert alert-info" id="message" style="display:none;">
              submitted
			  
              </div>
			  
			  <div class="row">
			   <div class="form-group col-lg-6">
			  <b> First Name *</b>
			  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="fname" type="text" class="form-control" placeholder="First Name">
                   </div>
				   
                   <span class="help-block" id="error"></span>
              </div>
			  </div>
               <div class="form-group col-lg-6">  
			  <b> Last Name *</b>
			  
			  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="lname" type="text" class="form-control" placeholder="Last Name">
                   </div>
				   
                   <span class="help-block" id="error"></span>
              </div>
			  </div>
                  </div> 
          <div class="row">
			  <b> User Name *</b>
			  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="uname" type="text" class="form-control" placeholder="Last Name">
                   </div>
				   
                   <span class="help-block" id="error"></span>
              </div>
                  </div> 				  
              
                        
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="cpassword" type="password" class="form-control" placeholder="Retype Password">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
             </div>
         <div class="row">
                        
                   
                    <b>How many Dogs do you have *</b>
			    <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-dog"></span></div>
                   <select  name="dog_quantity" class="form-control" required>
                    <option  value="1">1</option>
				          	<option  value="2">2</option>
							<option  value="3">3</option>
							<option  value="4">4</option>
							<option  value="5">5</option>
							<option  value="6">6</option>
							<option  value="7">7</option>
                   </select>
                   </div>  <span class="help-block" id="error"></span>
				   </div>
				 
				
			  </div>
            
              <div class="row">
                            
       <b> Dog's Name *</b>
                <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                    <input name="dname" type="text" class="form-control" placeholder="Dog Name" required>
                   </div>
                   <span class="help-block" id="error"></span>                     
              </div>

			  </div>
			  <div class="row">
                        
                   
			  <b>Dog's Birthday *</b>
			  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-apple"></span></div>
                   <input name="dob" type="date" class="form-control"  required>
                   </div>
				   
                   <span class="help-block" id="error"></span>
              </div>
			  
			  </div>
			  
          <div class="row">
                        
                    <b>Breed of dog(That You have) *</b>
			    <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-dog"></span></div>
                   <select  name="breed" class="form-control" required>
                    <option  value="1">1</option>
				          	<option  value="2">2</option>
							<option  value="3">3</option>
							<option  value="4">4</option>
							<option  value="5">5</option>
							<option  value="6">6</option>
							<option  value="7">7</option>
                   </select>
                   </div>  <span class="help-block" id="error"></span>
				   </div>
				   
				
			  </div>		
   <div class="row">
                            
       <b> Allergies</b>
                <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                    <input name="allergies" type="text" class="form-control" placeholder="Allergies(If your Dog have)">
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>

			  </div>
   <div class="row">
                            
       <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea name="comment" class="form-control" rows="5" id="comment"></textarea>
    </div>

			  </div>
			  
			 </div>
			 
			 
		<!--	 
       
		<div class="form-item form-type-checkbox form-item-field-terms-of-service-und">
     <input type="checkbox" id="edit-field-terms-of-service-und" name="field_terms_of_service[und]"
	 value="1" class="form-checkbox required" required>  <label class="option" 
	 for="edit-field-terms-of-service-und">I have read and accept<a href="#">Terms of Service</a>
	 and <a href="#">Privacy Policy</a> <span class="form-required" title="This field is required.">*</span></label>

</div>
-->
            <div class="form-footer">
                 <button type="submit" class="btn btn-info" name="submit">
                 <span class="glyphicon glyphicon-log-in"></span> Sign Me Up !
                 
				 </button>
            </div>


            </form>
            
           </div>

	</div>
    
    <script src="login/register/bootstrap/js/bootstrap.min.js"></script>
    <script src="login/register/assets/jquery-1.11.2.min.js"></script>
    <script src="login/register/assets/jquery.validate.min.js"></script>
    <script src="login/register/assets/register.js"></script>

</body>
</html>
<?php
if(isset($_POST['submit'])){
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
     $uname=$_POST['uname'];
	$pass=$_POST['password'];
	$dog_quantity=$_POST['dog_quantity'];
	$dogname=$_POST['dname'];
	$dob=$_POST['dob'];
    $breed=$_POST['breed'];
	$allergies=$_POST['allergies'];
	$comment=$_POST['comment'];

$query=	"INSERT INTO `registration`( `fname`, `lname`, `uname`, `password`, `dog_quantity`, `dogname`, `dob`, `breed`, `allergies`, `comment`)
	VALUES ('$fname','$lname','$uname','$pass','$dog_quantity','$dogname','$dob','$breed','$allergies','$comment')";
	 $insert=mysqli_query($con,$query);
    if($insert){
	echo "<script>alert('Sign up Completed!We Will Response as soon as Possible ');
                 window.location.href='index.php';    	</script>";}
		else{
			echo "<script>alert('Something Goes wrong'); </script>";
		}
                                        }
                                       
                

?>

