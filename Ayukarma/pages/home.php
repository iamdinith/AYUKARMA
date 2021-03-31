
<!--INCLUDED THE DATABASE CONNECTON-->
<?php include 'database.php'; ?>

<!--SESSION-->
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="../javascript/javascript.js"></script>
	<link rel="icon" href="../images/ayukarmaicon.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<title>HOME | මුල් පිටුව</title>
</head>
<body class="home">

	<!--HEADER AND NAVIGATION-->

<div class="mastercontainer"><div>
	<form method="post" action="search.php">
  <table class="navi navi1">

<!--CHECKS SESSION TO PREPARE HEADER-->  	

  	<?php

    if (isset($_SESSION['UserID'])) 
    {
        echo 

		"<tr>
			<td rowspan='2' colspan='4'><img src='../images/ayukarmalogo.png' class='navilogo'></td>
			<td colspan='2'><!--space--></td>
			<td colspan='2'><input type='button' onclick='loadPage(9)' class='navibtn' value='MY CART&nbsp;&nbsp;|&nbsp;&nbsp;මගේ කූඩය'/></td>
			<td colspan='2'><input type='submit' name='logoutbtn' class='navibtn'value='LOG OUT&nbsp;&nbsp;|&nbsp;&nbsp;ඉවත් වන්න'/></td>
		</tr>";

    }
    else
    {
    	echo 

    	"<tr>
			<td rowspan='2' colspan='4'><img src='../images/ayukarmalogo.png' class='navilogo'></td>
			<td colspan='2'><!--space--></td>
			<td colspan='2'><input type='button' onclick='loadPage(3)' class='navibtn' value='REGISTER&nbsp;&nbsp;|&nbsp;&nbsp;ලියාපදිංචිය'/></td>
			<td colspan='2'><input type='button' onclick='loadPage(2)'' class='navibtn'value='LOGIN&nbsp;&nbsp;|&nbsp;&nbsp;ඇතුල්වීම'/></td>
		</tr>";
    }

?>

			<?php
					if (isset($_POST['logoutbtn'])) {
						if(session_destroy() == true)
						{
							echo "<script> loadPage(0); </script>";
						}
					}
			 ?>
  	
		<tr class="searchbar">
			<td>
				<select name="table">
					<option>Products</option>
					<option>Raw Materials</option>
				</select>
			</td>
			
			<td colspan="3">
				<input type="text" placeholder="Search Items to Buy | මිලදී ගැනීමට භාණ්ඩ සොයන්න" class="naviinsert" name="searchtext">
			</td>
			<td colspan="2">
				<input type="submit" name="searchbtn" class="navibtn" value="SEARCH&nbsp;&nbsp;|&nbsp;&nbsp;සොයන්න">
			</td>
		</tr>
  </table></form>
</div>

<div id="navbar">
	<table class="navi">

		<tr>
			<td><img src="../images/ayukarmalogo2.png" id="stickylogo" class="stickylogo"></td>
			<td><a class="active2" href="">HOME<br>මුල් පිටුව</a></td>
			<td><a href="../pages/knowledge.php">INFO PORTAL<br>තොරතුරු පියස</a></td>
			<td><a href="../pages/doctor.php">DOCTORS<br>වෛද්‍යවරු</a></td>
			<td><a href="../pages/centre.php">CENTRES<br>මධ්‍යස්ථාන</a></td>	
			<td>
				<?php

			    if (isset($_SESSION['UserID'])) 
			    {
			        echo "<a href='../pages/publish.php'>SELL<br>විකිණීම්</a>";
			    }
			    else
			    {
			    	echo "<a href='../pages/login.php'>SELL<br>විකිණීම්</a>";
			    }

			    ?>
			</td>		
			<td class="dropdown">
			  		<a href="../pages/aboutus.php#aboutus">ABOUT US<br>අප පිළිබඳ</a>
				  		<div class="dropdown-content" id="dropdown-content">
						    <a class="dropdownlinks" href="../pages/aboutus.php#sitemap">SITE MAP<br>අඩවි සිතියම</a>
						    <a class="dropdownlinks" href="../pages/aboutus.php#termsandconditions">TERMS AND CONDITIONS<br>නියම සහ කොන්දේසි</a>
						    <a class="dropdownlinks" href="../pages/aboutus.php#privacypolicy">PRIVACY POLICY<br>රහස්යතා ප්රතිපත්තිය</a>
						    <a class="dropdownlinks" href="../pages/aboutus.php#qualitypolicy">QUALITY POLICY<br>ගුණාත්මක ප්රතිපත්තිය</a>
						    <a class="dropdownlinks" href="../pages/aboutus.php#contactus">CONTACT US<br>අප අමතන්න</a>
						    <center><img src="../images/ayukarmaicon.png"></center>
			 			</div>
			</td>
		</tr>
	</table>

<!--STICKY NAVBAR-->

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
	
	<!--SCROLL TO TOP-->

	<a href="#" class="scrollToTop" data-original-title="" title="" style="display: block;"></a>

	<!--SLIDESHOW-->

	<div class="content">

		<div class="slideshow-container">

		<div class="mySlides">
		  <center><img src="../images/service1.jpg" class="services"></center>
		</div>

		<div class="mySlides">
		  <center><img src="../images/service2.jpg" class="services"></center>
		</div>

		<div class="mySlides">
		  <center><img src="../images/service3.jpg" class="services"></center>
		</div>
		</div>

		<div style="margin-left: 50%;">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		</div><br>


	<!--FEATURED PRODUCTS-->

		<form method="get" action="../pages/buy.php">
			<table class="products">
				<tr>
					<td colspan="4"><h1 align="left">Featured Products</h1><h3 align="left">(විශේෂාංග නිෂ්පාදන)</h3></td>
				</tr>
				
				<tr>
				<?php
					$tsql1 = "SELECT  ItemName, ImageName, Price FROM Featured where ID= 1";
				$stmt = sqlsrv_query( $conn, $tsql1);
				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))
					echo "
				
		<td><a href='http://localhost/ayukarma/pages/buy.php?id=1&page=0'><img src='../images/".$row[1].".png'><br>".$row[0]."</a><br>Rs.".$row[2].".00</td>
					";
					$tsql2 = "SELECT  ItemName, ImageName, Price FROM Featured where ID= 2";
				$stmt = sqlsrv_query( $conn, $tsql2);
				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))
					echo "
				
					<td><a href='http://localhost/ayukarma/pages/buy.php?id=2&page=0'><img src='../images/".$row[1].".png'><br>".$row[0]."</a><br>Rs.".$row[2].".00</td>
					";
					$tsql3 = "SELECT  ItemName, ImageName, Price FROM Featured where ID= 3";
				$stmt = sqlsrv_query( $conn, $tsql3);
				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))
					echo "
				
					<td><a href='http://localhost/ayukarma/pages/buy.php?id=3&page=0'><img src='../images/".$row[1].".png'><br>".$row[0]."</a><br>Rs.".$row[2].".00</td>
					";
					$tsql4 = "SELECT  ItemName, ImageName, Price FROM Featured where ID= 4";
				$stmt = sqlsrv_query( $conn, $tsql4);
				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))
					echo "
				
					<td><a href='http://localhost/ayukarma/pages/buy.php?id=4&page=0'><img src='../images/".$row[1].".png'><br>".$row[0]."</a><br>Rs.".$row[2].".00</td>
					";

			?></tr>

			</table>
			</form>

			<br><br>
		  
		<!--FEATURED RAW MATERIALS-->

		<form method="get" action="../pages/buy.php">
			<table class="products">
				<tr>
					<td colspan="4"><h1 align="left">Featured Raw Materials</h1><h3 align="left">(විශේෂාංග අමු ද්රව්ය)</h3></td>
				</tr>
				
				<tr>
				<?php
					$tsql5 = "SELECT  ItemName, ImageName, Price, Unit FROM Featured where ID= 5";
				$stmt = sqlsrv_query( $conn, $tsql5);
				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))
					echo "
				
		<td><a href='http://localhost/ayukarma/pages/buy.php?id=5&page=0'><img src='../images/".$row[1].".png'><br>".$row[0]."</a><br>Rs.".$row[2].".00 per ".$row[3]."</td>
					";
					$tsql6 = "SELECT  ItemName, ImageName, Price, Unit FROM Featured where ID= 6";
				$stmt = sqlsrv_query( $conn, $tsql6);
				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))
					echo "
				
					<td><a href='http://localhost/ayukarma/pages/buy.php?id=6&page=0'><img src='../images/".$row[1].".png'><br>".$row[0]."</a><br>Rs.".$row[2].".00 per ".$row[3]."</td>
					";
					$tsql7 = "SELECT  ItemName, ImageName, Price, Unit FROM Featured where ID= 7";
				$stmt = sqlsrv_query( $conn, $tsql7);
				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))
					echo "
				
					<td><a href='http://localhost/ayukarma/pages/buy.php?id=7&page=0'><img src='../images/".$row[1].".png'><br>".$row[0]."</a><br>Rs.".$row[2].".00 per ".$row[3]."</td>
					";
					$tsql8 = "SELECT  ItemName, ImageName, Price, Unit FROM Featured where ID= 8";
				$stmt = sqlsrv_query( $conn, $tsql8);
				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))
					echo "
				
					<td><a href='http://localhost/ayukarma/pages/buy.php?id=8&page=0'><img src='../images/".$row[1].".png'><br>".$row[0]."</a><br>Rs.".$row[2].".00 per ".$row[3]."</td>
					";

			?></tr>

			</table>
			</form>
			<br><br><br>

<!--OPTIONAL BUTTONS LEADING TO SEVERAL PAGES OF NAVBAR-->			


			<table class="services">
		  	<tr>
		  		<td class="service1"><button onclick="loadPage(5)"><img src="../images/stethoscope.png"><br><br>Get details on well experienced ayurvedic doctors.<br><br>පළපුරුදු ආයුර්වේද වෛද්‍යවරුන් පිළිබඳ විස්තර ලබා ගන්න.</button></td>
		  		<td class="service2"><button onclick="loadPage(6)"><br>Gain ayurvedic knowledge on herbs, seeds, barks and all other kinds of flora.<br><br>පැළෑටි, බීජ, පොතු සහ අනෙකුත් සියලුම ශාක පිළිබඳ ආයුර්වේද දැනුම ලබා ගන්න.<br><br><img src="../images/book.png"></button></td>
		  		<td class="service3"><button onclick="loadPage(4)"><img src="../images/spa.png"><br><br>Get details on well recognised ayurvedic centres<br><br>හොඳින් පිළිගත් ආයුර්වේද මධ්‍යස්ථාන පිළිබඳ විස්තර ලබා ගන්න</button></td>
		  	</tr>
		  </table>
		<br><br><br>
		<script>
		showSlides();
		</script>
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