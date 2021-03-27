
<!--INCLUDED THE DATABASE CONNECTON-->
<?php include 'database.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="../javascript/javascript.js"></script>
	<link rel="icon" href="../images/ayukarmaicon.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<title>INFO PORTAL | තොරතුරු පියස</title>
</head>
<body>

	<!--HEADER AND NAVIGATION-->

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
			<td><a class="active2" href="#">INFO PORTAL<br>තොරතුරු පියස</a></td>
			<td><a href="../pages/doctor.php">DOCTORS<br>වෛද්‍යවරු</a></td>
			<td><a href="../pages/centre.php">CENTRES<br>මධ්‍යස්ථාන</a></td>	
			<td><a href="../pages/publish.php">SELL<br>විකිණීම්</a></td>		
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

	<!--PUBLISHED AD DETAILS-->

		<div>
			<table class="alphabet">
				<tr class="design"><td></td></tr>
				<tr>
					<form method="post">
					<td colspan="20"><input type="text" placeholder="Oba kiyanna, mama soyannam" class="navibtn" name="searchtext"></td>
					<td colspan="6"><input type="submit" name="searchbtn" class="navibtnu navibtnu3" value="SEARCH&nbsp;&nbsp;|&nbsp;&nbsp;සොයන්න"></td>
					</form>
				</tr>
				<tr class="design"><td></td></tr>
			</table>
			<table class='knowledge'>
				      <tr>
				        <th>ID<br><br>හැඳුනුම් අංකය</th>
				        <th>Name<br><br>නම</th>
				        <th>Scientific Name<br><br>විද්‍යාත්මක නම</th>
				        <th>Alternative Name<br><br>විකල්ප නම</th>
				        <th>Description<br><br>විස්තර</th>
				        <th>Image<br><br>රූපය</th>
				        <th>Category<br><br>වර්ගය</th>
				      </tr>
			</table>
			<form method="post">
				<?php

				if (isset($_POST['searchbtn'])) 
				{
					$searchtext = $_POST['searchtext'];
				
					$tsql = "SELECT ID, Name, ScientificaName, AlternativeName, DISC, ImageName, Catagory FROM KnowledgePanel WHERE TAGS LIKE '%$searchtext%'";  

					$stmt = sqlsrv_query( $conn, $tsql);  

				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))  
				{  
				     echo "
				     <table class='knowledge'>

			          <tr>
				        <td>".$row[0]."</td>
				        <td>".$row[1]."</td>
				        <td>".$row[2]."</td>
				        <td>".$row[3]."</td>
				        <td>".$row[4]."</td>
				        <td><img src='../images/".$row[5].".jpg'></td>
				        <td>".$row[6]."</td>
				      </tr>
				      
				    </table>";  
				}
				}

				?>  
           
			</form>
			<br><br><br><br><br><br><br>
		</div>
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