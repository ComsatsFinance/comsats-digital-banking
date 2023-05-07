<?php
ob_start();
session_start();
if(isset($_SESSION['customer_login'])){
	
	header('location:customer_profile.php') ;
	
}


 ?>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/customer_login.css" />
    <style>
    #myVideo {
      position: fixed;
      right: 0;
      bottom: 0;
      min-width: 100%;
      min-height: 100%;
      z-index: -1;
    }
    </style>
    </head>
    <body>   
	 <?php include'header.php' ?>
  <video autoplay muted loop id="myVideo">
    <source src="img/login.mp4" type="video/mp4">
  </video>
        <div class="login_container">
            
            <form method="post"> 
                
      <br>
        <div class="formspace">
		<p class="formspace2">
    
        <div class="form">
            
        <label class="login">LOGIN</label>
        <div class="input_field">  
           
        <label class="userdetail">Customer ID</label><br>
        <input class="customer_id" type="text" name="customer_id" required /><br>
        <label class="userdetail">Password</label><br>
        <input class="password" type="password" name="password" required/><br>
        <input class="login-btn" type="submit" name="login-btn" value="LOGIN"/><br>
        <a href="cust_forgetpass.php" class="help"><label class="label_help" >FORGET PASSWORD ?</label></a>
            <img class="userloginimg" src="img/logo-unscreen.gif" height="90px" width="90px">
        </div>
                </div>
							</div>  </div>
            </form>
        <br>
        
        <?php include 'footer.php' ?>
    </body>
</html> 

<?php include 'customer_login_process.php'?>

