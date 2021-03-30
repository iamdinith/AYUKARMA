

<?php

#starts a new session
session_start();

#includes a database connection
include 'databaseconnection.php';

#catches user/password submitted by html form
if (isset($_POST["untxt"]) AND isset($_POST["pwtxt"])){
$user = $_POST['untxt'];
$password = $_POST['pwtxt'];
$password1 = md5($password);
}

#checks if the html form is filled
if(empty($_POST['untxt']) || empty($_POST['pwtxt'])){
    echo '<script type="text/javascript">alert("Fill all the fields!.\n");</script>';
}else{

#searches for user and password in the database
$query = "SELECT * FROM USERS WHERE Username='{$user}' AND Password= '{$password1}'";
$result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'

#checks if the search was made
if($result === false){
     die( print_r( sqlsrv_errors(), true));
}

#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($result) != 1){
       echo '<script type="text/javascript">alert("Username/Password not found!");</script>';
}else{

#creates sessions
    while($row = sqlsrv_fetch_array($result)){
       $_SESSION['id'] = $row['id'];
       $_SESSION['name'] = $row['name'];
       $_SESSION['username'] = $row['username'];
       $_SESSION['level'] = $row['level'];
    }
#redirects user
    header("Location: REGISTER.php");
}
}

sqlsrv_close($conn);  

?>


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
<form method="POST" action="login1.php">
		<table class="login">
			<tr>
				<td colspan="3" align="center"><img src="../images/atuwalogo.png" class="loginatuwalogo"><br>Enter your UserName and Password to Login</td>
			</tr>
			<tr>
				<td colspan="3" class="logindesign"><!--Empty field for design purposes--></td>
			</tr>
			<tr>
				<td colspan="3"><input type="text" name="untxt" size="50%" placeholder="Username"></td>
			</tr>
			<tr>
				<td colspan="3" class="logindesign"><!--Empty field for design purposes--></td>
			</tr>
			<tr>
				<td colspan="3"><input type="Password" name="pwtxt" size="50%" placeholder="Password"></td>
			</tr>
			<tr>
				<td colspan="3" class="logindesign"><!--Empty field for design purposes--></td>
			</tr>
			<tr>
				<td align="left"><input type="button" value="Home" name="lgbackbtn" onclick="loadPage(100)" class="btn"></td>
				<td align="center"><input type="button" value="Register" onclick="loadPage(4)" class="btn"></td>
				<td align="right"><input type="Submit" name="lgsubmitbtn" class="btn"></td>
			</tr>
		</table>
	</form>



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