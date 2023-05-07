<?php
session_start();
if(isset($_SESSION['staff_login'])){
	
	header('location:staff_profile.php') ;
	
}


 ?>
<html>
<head>
    <title>Staff Page</title>
    <link rel="stylesheet" type="text/css" href="css/staff_login.css" />
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
    <source src="img/staff.mp4" type="video/mp4">
  </video>
        <div class="staff_login_container">
            
            <form method="post"> 
                
      <br>
        <div class="formspace">
		<p class="formspace2">
    
        <div class="form">
            
        <label class="login">Staff</label>
        <div class="input_field">  
        <label class="userdetail">Staff ID</label><br>
        <input class="customer_id" type="text" name="staff_id" required /><br>
        <label class="userdetail">Password</label><br>
        <input class="password" type="password" name="password" required/><br>
        <input class="login-btn" type="submit" name="staff_login-btn" value="LOGIN"/><br>
        <a class="help"><label class="label_help" >FORGET PASSWORD ?</label></a>
            <img class="userloginimg" src="img/remy-unscreen.gif" height="90px" width="90px">
        </div>
                </div>
							</div>  </div>
            </form>
        <br>
        
        <?php include 'footer.php' ?>
    </body>
</html> 

<?php include 'staff_login_process.php'?>

