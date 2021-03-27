<?php

$server = "DESKTOP-V5EMRGI";// use your computer server name
$connectionInfo = array("Database"=>"ayukarma");
$conn = sqlsrv_connect($server,$connectionInfo);
if($conn){
	
}
else{
	
die(print_r(sqlsrv_errors(), true));
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="../javascript/javascript.js"></script>
	<link rel="icon" href="../images/ayukarmaicon.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<title>Buy | </title>
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
			  		<a href="../pages/aboutus.php">About Us<br>අප පිළිබඳ</a>
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

		<div class="">

 <?php 
$test = $_GET['id'];



$tsql = "SELECT  imagename, price FROM product where id= $test";  

/* Execute the query. */  

$stmt = sqlsrv_query( $conn, $tsql);  

/* Iterate through the result set printing a row of data upon each iteration.*/  

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))  
{  
     echo "
    <table class='productcard'>
      <tr>
        <td rowspan='3' id='size'><div class='imgContainer'><img src='../images/".$row[0].".jpg'></div></td>
      </tr>
      <tr>  
        <td><strong>".$row[0]."<br><br>Rs.".$row[1].".00 <br><br><input type='number' id='qt' min='1' max='5'><br> <input type='submit' name='submit' value='Submit'></strong></td>
        <td><button>show cart</button></td>     
      </tr>
     
    </table>";  
}
/*sending data to database*/



$tsql = "SELECT  imagename, price FROM product where id= $test";  

/* Execute the query. */  

$stmt = sqlsrv_query( $conn, $tsql);  

/* Iterate through the result set printing a row of data upon each iteration.*/  
  if(isset($_POST['submit'])) 
{  
   while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))  
{		
  /*  $row[o] = $_POST['imagename'];
    $age[1] = $_POST['price'];*/

    $insert = "INSERT INTO cart(imagename, price) VALUES ('$row[0]',$row[1])";
    $stmt = sqlsrv_query( $conn, $tsql);  


   
}

}
?>
</div>

 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

			
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
		</div>
</body>
</html>