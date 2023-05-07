
<html>
<head>
<title>Forget Password</title>

<link rel="stylesheet" type="text/css" href="css/cust_forgetpass.css"/>
<link rel="stylesheet" type="text/css" href="css/customer_login.css">
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
<?php include 'header.php'; ?>
<video autoplay muted loop id="myVideo">
    <source src="img/forget.mp4" type="video/mp4">
  </video>
<div class="login_container">
<form method="post">
<br>
        <div class="formspace">
		<p class="formspace2">
    
        <div class="form">
            
        <div class="input_field">  
           
        <input class="cust_id" type="text" name="cust_id" placeholder="Customer Id" required /><br>
        <input class="dbt_crd" type="text" name="dbt_crd" placeholder="Debit card No" required/><br>
        <input class="dbt_crdpin" type="text" name="dbt_crdpin" placeholder="Debit card Pin" required/><br>
        <input class="mobile_no" type="text" name="mobile_no" placeholder="Registered Mobile No" required/><br>
        <input class="sendotp" type="submit" name="sendotp" value="Submit"/><br>
            <img class="userloginimg" src="img/pass-unscreen.gif" height="90px" width="90px">
</form><br>
</div>
</div>
</body>
</html>


<?php 
if(isset($_POST['sendotp'])){
	session_start();
	include 'cust_forgetpass_validate.php';

}


?>

