
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
	<title>HOME | මුල් පිටුව</title>
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
			<td><a class="active2" href="#">HOME<br>මුල් පිටුව</a></td>
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

		<div class="slideshow-container">

		<div class="mySlides">
		  <center><img src="../images/service1.jpg" class="services"></center>
		</div>

		<div class="mySlides">
		  <center><img src="../images/service2.jpg" class="services"></center>
		</div>

		<div class="mySlides">
		  <center><img src="../images/herbs2.jpg" class="services"></center>
		</div>

		</div>
		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span>
		</div>
		<br><br><br><br>
		  <div >
			<form method="get" action="../pages/buy.php">
			<table class="products">

				<tr>
				<?php
				$tsql1 = "SELECT  imagename, price FROM product where id= 1";
				$stmt = sqlsrv_query( $conn, $tsql1);
				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))
					echo "
				
		<td><a href='http://localhost/ayukarma/pages/buy.php?id=1'><img src='../images/".$row[0].".jpg'><br>".$row[0]."</a><br>Rs.".$row[1].".00</td>
					";
					$tsql2 = "SELECT  imagename, price FROM product where id= 2";
				$stmt = sqlsrv_query( $conn, $tsql2);
				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))
					echo "
				
					<td><a href='http://localhost/ayukarma/pages/buy.php?id=2'><img src='../images/".$row[0].".jpg'><br>".$row[0]."</a><br>Rs.".$row[1].".00</td>
					";
					$tsql3 = "SELECT  imagename, price FROM product where id= 3";
				$stmt = sqlsrv_query( $conn, $tsql3);
				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))
					echo "
				
					<td><a href='http://localhost/ayukarma/pages/buy.php?id=3'><img src='../images/".$row[0].".jpg'><br>".$row[0]."</a><br>Rs.".$row[1].".00</td>
					";
					$tsql4 = "SELECT  imagename, price FROM product where id= 4";
				$stmt = sqlsrv_query( $conn, $tsql4);
				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))
					echo "
				
					<td><a href='http://localhost/ayukarma/pages/buy.php?id=4'><img src='../images/".$row[0].".jpg'><br>".$row[0]."</a><br>Rs.".$row[1].".00</td>
					";

			?></tr>
				
			</table>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br>			</form>
		</div>

         <!---rwmat-->
          <div >
			<form method="get" action="../pages/buy.php">
			<table class="products">

				<tr>
				<?php
				$tsql5 = "SELECT  imagename, price FROM product where id= 5";
				$stmt = sqlsrv_query( $conn, $tsql5);
				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))
					echo "
				
		<td><a href='http://localhost/ayukarma/pages/buy.php?id=5'><img src='../images/".$row[0].".jpg'><br>".$row[0]."</a><br>Rs.".$row[1].".00</td>
					";
					$tsql6 = "SELECT  imagename, price FROM product where id= 6";
				$stmt = sqlsrv_query( $conn, $tsql6);
				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))
					echo "
				
					<td><a href='http://localhost/ayukarma/pages/buy.php?id=6'><img src='../images/".$row[0].".jpg'><br>".$row[0]."</a><br>Rs.".$row[1].".00</td>
					";
					$tsql7 = "SELECT  imagename, price FROM product where id= 7";
				$stmt = sqlsrv_query( $conn, $tsql7);
				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))
					echo "
				
					<td><a href='http://localhost/ayukarma/pages/buy.php?id=7'><img src='../images/".$row[0].".jpg'><br>".$row[0]."</a><br>Rs.".$row[1].".00</td>
					";
					$tsql8= "SELECT  imagename, price FROM product where id= 8";
				$stmt = sqlsrv_query( $conn, $tsql8);
				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))
					echo "
				
					<td><a href='http://localhost/ayukarma/pages/buy.php?id=8'><img src='../images/".$row[0].".jpg'><br>".$row[0]."</a><br>Rs.".$row[1].".00</td>
					";
			?></tr>
				
			</table>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</form>
		</div>

		
		</div>
		<script>
		showSlides();
		</script>
		<footer>testt</footer>
		
	</div>
</body>
</html>