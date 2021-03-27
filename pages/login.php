

<?php

#starts a new session
session_start();

#includes a database connection
include 'database.php';

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
       $_SESSION['UserID'] = $row['UserID'];
    }
#redirects user
    header("Location: home.php");
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




<div class="content">
			<form method="POST" action="login.php">
		<table class="login">

			<tr>
				<td class="login-banner">
					<h1>Log in to</h1>
					<ul>
						<li><strong>Buy</strong> raw materials, products and many more.</li><br>
						<li><strong>Sell</strong> raw materials, products and many more.</li><br>
					</ul>

					<h2>ලොග් වන්න</h2>
					<ul>
						<li>අමුද්රව්ය, නිෂ්පාදන සහ තවත් බොහෝ දේ <strong>මිලදී ගන්න.</strong></li><br>
						<li>අමුද්රව්ය, නිෂ්පාදන සහ තවත් බොහෝ දේ <strong>විකුණන්න.</strong></li><br><br>
					</ul>
				</td>

				<td class="login-info">
					<input type="text" name="untxt" size="45%" placeholder="Username | පරිශීලක නාමය"/><br><br>
					<input type="Password" name="pwtxt" size="45%" placeholder="Password | රහස් පදය"/><br><br>
					<input type="Submit" name="lgsubmitbtn" value="Submit | ඉදිරිපත් කරන්න" class="btn navibtnu3">
				</td>
			</tr>
			<tr>
				<td></td>
				<td class="login-info-bottom" align="left">
					<input type="button" value="Home | මුල් පිටුව" name="lgbackbtn" onclick="loadPage(1)" class="btn"/>
					<input type="button" value="Register | ලියාපදිංචි වන්න" onclick="loadPage(3)" class="btn">
				</td>
			</tr>
		</table>
	</form>
		</div>
		<footer>
      <table>
        <tr>
          <td><a href="../pages/aboutus.php#contactus">CONTACT US<br>අප අමතන්න</a></td>
          <td>|</td>
          <td><a href="../pages/aboutus.php#sitemap">SITE MAP<br>අඩවි සිතියම</a></td>
          <td>|</td>
          <td><a href="../pages/aboutus.php#termsandconditions">TERMS AND CONDITIONS<br>නියම සහ කොන්දේසි</a></td>
          <td>|</td>
          <td><a href="../pages/aboutus.php#privacypolicy">PRIVACY POLICY<br>රහස්යතා ප්රතිපත්තිය</a></td>
          <td>|</td>
          <td><a href="../pages/aboutus.php#qualitypolicy">QUALITY POLICY<br>ගුණාත්මක ප්රතිපත්තිය</a></td>
          <td ><span class="fa fa-facebook"></span>&nbsp;&nbsp;&nbsp;<span class="fa fa-twitter"></span>&nbsp;&nbsp;&nbsp;<span class="fa fa-google"></span></td>
        </tr>
        <tr>
          <td colspan="10"><p>© AYUKARMA All Rights Reserved. Website Designed and Developed by IP Team 43.<br>© ආයුර්මා සියලුම හිමිකම් ඇවිරිණි. IP කණ්ඩායම 43 විසින් නිර්මාණය කරන ලද සහ සංවර්ධනය කරන ලද වෙබ් අඩවිය.</p></td>
        </tr>
      </table>
    </footer>
		</div>


</body>
</html>