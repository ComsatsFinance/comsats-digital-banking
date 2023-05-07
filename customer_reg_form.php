<?php ob_start() ?>

<html>
<head>
    <title>Registration Form</title>
<head>
	<link rel="stylesheet" type="text/css" href="css/customer_reg_form.css"/>
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
	<?php include'header.php';  ?>
    </head>
    <body>
  <video autoplay muted loop id="myVideo">
    <source src="img/video1.mp4" type="video/mp4">
  </video>
	<div class="container_regfrm_container_parent_child">
		<form method="post">
				 <input type="text" name="name" placeholder="Name" required />
				 <select name ="gender" required >
					  <option class="default" value="" disabled selected>Gender</option>
					  <option value="Male" required >Male</option>
					  <option value="Female">Female</option>
					  <option value="Others">Others</option>
				</select>
				 <input type="text" name="mobile" placeholder="Mobile no" required />
				 <input type="text" name="email" placeholder="Email id" />
				 <input type="text" name="landline" placeholder="Landline no" />
				 <input type="text" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')" required />
				 <input type="text" name="pan_no" placeholder="PAN Number" required />
				 <input type="text" name="citizenship" placeholder="Aadhar Number" required />
				 <input class="address" type="text" name="homeaddrs" placeholder="Home Address" required  />
				 <input class="address" type="text" name="officeaddrs" placeholder="Office Address" />
				 <input type="text" name="country" placeholder="India" value="India" readonly="readonly" />



				 <select name ="state" required >
					  <option class="default" value="" disabled selected>State</option>
					  
					  <option value="Tamilnadu">Tamilnadu</option>
					  <option value="Kerala">Kerala</option>
					  <option value="Andhra">Andhra Pradesh</option>
					  <option value="Karnataka">Karnataka</option>
					  <option value="Delhi">Delhi</option>
					  <option value="Maharastra">Maharastra</option>
					  <option value="Haryana">Haryana</option>
					  <option value="Madhya Pradesh">Madhya Pradesh</option>
				</select>



				 <select name ="city" required >
					  <option class="default" value="" disabled selected>City</option>
					  <option value="Chennai">Chennai</option>
					  <option value="Madurai">Madurai</option>
					  <option value="virudunagar">Virudunagar</option>
					  <option value="Trichy">Trichy</option>
					  <option value="vellore">Vellore</option>
					  <option value="Kanchipuram">Kanchipuram</option>
					  <option value="Thiruvallur">Thiruvallur</option>
					  <option value="Namakkal">Namakkal</option>
					  <option value="Thiruvanamalai">Thiruvanamalai</option>
					  <option value="Thirunalveli">Thirunalveli</option>
					  <option value="Hyderabad">Hyderabad</option>
					  <option value="Amaravathi">Amaravathi</option>
					  <option value="Visakhapatnam">Vizag</option>
					  <option value="Vijayawada">Vijayawada</option>
					  <option value="Thirupati">Thirupati</option>
					  <option value="Bengaluru">Bengaluru</option>
					  <option value="Mysuru">Mysuru</option>
					  <option value="Mangaluru">Mangaluru</option>
					  <option value="Ballari">Ballari</option>
					  <option value="Raichur">Raichur</option>
					  <option value="Mumbai">Mumbai</option>
					  <option value="Pune">Pune</option>
					  <option value="Nagpur">Nagpur</option>
					  <option value="Thane">Thane</option>
					  <option value="Aurangabad">Aurangabad</option>
					  <option value="Thiruvananthapuram">Thiruvananthapuram</option>
					  <option value="Kochi">Kochi</option>
					  <option value="Palakkad">Palakkad</option>
					  <option value="Kollam">Kollam</option>
					  <option value="kannur">Kannur</option>
					  <option value="Thrissur">Thrissur</option>
					  <option value="Faridabad">Faridabad</option>
					  <option value="Panipat">Panipat</option>
					  <option value="Ambala">Ambala</option>
					  <option value="Yamunanagar">Yamunanagar</option>
					  <option value="Gurugram">Gurugram</option>
					  <option value="Sonipat">Sonipat</option>
					  <option value="Indore">Indore</option>
					  <option value="Bhopal">Bhopal</option>
					  <option value="Ujjain">Ujjain</option>
					  <option value="Jabalpur">Jabalpur</option>
					  <option value="Sagar">Sagar</option>

					  
				</select>



				 
				 <input type="text" name="pin" placeholder="Pin Code" required />
				 <input type="text" name="arealoc" placeholder="Area/Locality" required />
				 <input type="text" name="nominee_name" placeholder="Nominee Name (If any)" />
				 <input type="text" name="nominee_ac_no" placeholder="Nominee Account no"  />
				 
				 <select name ="acctype" required >
					  <option class="default" value="" disabled selected>Account Type</option>
					  <option value="Saving">Saving</option>
					  <option value="Current">Current</option>
				</select>
				<input type="submit" name="submit" value="Submit">
				</form>
         </div>
		 </div>
		 
<?php include'footer.php';?>
    
</body>
</html>


<?php 

if(isset($_POST['submit'])){

	session_start();
	$_SESSION['$cust_acopening'] = TRUE;
	$_SESSION['cust_name']=$_POST['name'];
	$_SESSION['cust_gender']=$_POST['gender'];
	$_SESSION['cust_mobile']=$_POST['mobile'];
	$_SESSION['cust_email']=$_POST['email'];
	$_SESSION['cust_landline']=$_POST['landline'];
	$_SESSION['cust_dob']=$_POST['dob'];
	$_SESSION['cust_pan=']=$_POST['pan_no'];
	$_SESSION['cust_citizenship']=$_POST['citizenship'];
	$_SESSION['cust_homeaddrs']=$_POST['homeaddrs'];
	$_SESSION['cust_officeaddrs']=$_POST['officeaddrs'];
	$_SESSION['cust_country']=$_POST['country'];
	$_SESSION['cust_state']=$_POST['state'];
	$_SESSION['cust_city']=$_POST['city'];
	$_SESSION['cust_pin']=$_POST['pin'];
	$_SESSION['arealoc']=$_POST['arealoc'];
	$_SESSION['nominee_name']=$_POST['nominee_name'];
	$_SESSION['nominee_ac_no']=$_POST['nominee_ac_no'];
	$_SESSION['cust_acctype']=$_POST['acctype'];
	
	header('location:cust_regfrm_confirm.php');
	
	
}

?>