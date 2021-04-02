<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="../javascript/javascript.js"></script>
	<link rel="icon" href="../images/ayukarmaicon.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<title>About Us | අප පිළිබඳ</title>
</head>
<body>
	<!------------------------------------------------------------------------HEADER AND NAVIGATION-->
<div class="mastercontainer"><div>
  <table class="navi navi1">
  	<tr>
			<td rowspan="2" colspan="3"><img src="../images/ayukarmalogo.png" class="navilogo"></td>
			<td colspan="2"><!--space--></td>
			<td colspan="1"><button class="navibtnu navibtnu1">REGISTER&nbsp;&nbsp;|&nbsp;&nbsp;ලියාපදිංචිය</button></td>
			<td colspan="1"><button class="navibtnu navibtnu2">LOGIN&nbsp;&nbsp;|&nbsp;&nbsp;ඇතුල්වීම</button></td>
		</tr>
		<tr>
			<td><select class="navibtn">
				<option></option>
			</select></td>
			<td colspan="2"><input type="text" placeholder="Oba kiyanna, mama soyannam" class="navibtn"></td>
			<td><button class="navibtnu navibtnu3">SEARCH&nbsp;&nbsp;|&nbsp;&nbsp;සොයන්න</button></td>
		</tr>
  </table>
</div>

<div id="navbar">
	<table class="navi">
		<tr>
			<td><img src="../images/ayukarmalogo2.png" id="stickylogo" class="stickylogo"></td>
			<td><a href="../pages/home.php">HOME<br>මුල් පිටුව</a></td>
			<td><a href="../pages/knowledge.php">INFO PORTAL<br>තොරතුරු පියස</a></td>
			<td><a href="../pages/doctor.php">DOCTORS<br>වෛද්‍යවරු</a></td>
			<td><a href="../pages/centre.php">CENTRES<br>මධ්‍යස්ථාන</a></td>	
			<td><a href="../pages/sell.php">SELL<br>විකිණීම්</a></td>		
			<td class="dropdown">
			  		<a class="active2" href="#">About Us<br>අප පිළිබඳ</a>
				  		<div class="dropdown-content" id="dropdown-content">
						    <a class="dropdownlinks" href="../pages/aboutus.php">Contact Us</a>
						    <a class="dropdownlinks" href="../pages/aboutus.php">Our Policy</a>
						    <a class="dropdownlinks" href="../pages/aboutus.php">Bla</a>
						    <a class="dropdownlinks" href="../pages/aboutus.php">Bla bla</a>
						    <center><img src="../images/ayukarmaicon.png"></center>
			 			</div>
			</td>
		</tr>
	</table>
  <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var stickylogo = document.getElementById("stickylogo");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
  	stickylogo.classList.remove("stickylogo");
    navbar.classList.add("sticky");
  } else {
  	stickylogo.classList.add("stickylogo");
    navbar.classList.remove("sticky");
  }
}
</script>
</div>
	
	<!------------------------------------------------------------------------SCROLL TO TOP-->

	<a href="#" class="scrollToTop" data-original-title="" title="" style="display: block;"></a>

	<!------------------------------------------------------------------------SLIDESHOW-->
	<form method="POST" action="REGISTER.php">
		<table class="navi">
			<tr>
			</tr>
		</table>
		<table class="register">
			<tr>
				<td colspan="4"><H4>User Registration</H4></td>
			</tr>
			<tr>
				<td colspan="4" class="registerdesign"><!--Empty field for design purposes--></td>
			</tr>
			<tr>
				<td>Username :</td>
				<td><input class="text" type="text" name="username" required></td>
				<td>Password :</td>
				<td><input class="text" type="text" name="password" required></td>
				<td>Repeat Password :</td>
				<td><input class="text" type="text" name="passwordx" required></td>
			</tr>
			
			<tr>
				<td colspan="4" class="registerdesign"><!--Empty field for design purposes--></td>
			</tr>
			<tr>
				
			</tr>
			<tr>
				<td colspan="4" class="registerdesign"><!--Empty field for design purposes--></td>
			</tr>
			
						
			<tr>
				<td colspan="4" class="registerdesign"><!--Empty field for design purposes--></td>
			</tr>

		</table>

				<br><center><input type="reset" name="lgsubmitbtn" class="btn">&nbsp;&nbsp;&nbsp;<input type="Submit" name="lgresetbtn" class="btn"></center>
	</form>

<?php

	#####################################################################
Include ('databaseconnection.php');			
																		
	#####################################################################
	// ADD Users
		if (isset($_POST["username"]) AND isset($_POST["password"]) AND isset($_POST["passwordx"]))
{
	
			$count = 0;
			$username= $_POST['username'];
			$password= $_POST['password'];
			$passwordx+$_POST['passwordx']
			$password1 = md5($password);

			if ($password == $passwordx) 
			{
				$count +=1;
			}
			else{
				echo '<script type="text/javascript">alert("Your password is not matched!");</script>';
			}
			
			if ($count == 1)
			{ 
				$tsql = "UPDATE USERS 
							set Password = $password
							where Username == $username";  

				/* Prepare and execute the query. */  
				$stmt = sqlsrv_query($conn,$tsql);  
					if ($stmt) {  
					    echo '<script type="text/javascript">alert("Password Successfully changed!");</script>';  
								}
					else 	 {  
						echo '<script type="text/javascript">alert("Password change failed. Try again. If not contact the Admins.\n");</script>';  
							    die(print_r(sqlsrv_errors(), true));  
							}  
			}
		}
  
/* Free statement and connection resources. */ 

sqlsrv_close($conn);  

?>  

<div class="content">
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
		<div class="footer">
			<table>
				<tr>
					<td><a href="">CONTACT US</a></td>
					<td>|</td>
					<td><a href="">SITE MAP</a></td>
					<td>|</td>
					<td><a href="">TERMS AND CONDITIONS</a></td>
					<td>|</td>
					<td><a href="">PRIVACY POLICY</a></td>
					<td>|</td>
					<td><a href="">QUALITY POLICY</a></td>
					<td ><span class="fa fa-facebook"></span><span class="fa fa-twitter"></span><span class="fa fa-google"></span></td>
				</tr>
				<tr>
					<td colspan="10"><p>© AYUKARMA All Rights Reserved. Website Designed and Developed by IP Team 43.</p></td>
				</tr>
			</table>
			
		</div>
		</div>


</body>
</html>