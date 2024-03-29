
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
	<title>SEARCH | සෙවීම</title>
</head>
<body>

	<!--HEADER AND NAVIGATION-->

<div class="mastercontainer"><div>
	<form method="post" action="search.php">
  <table class="navi navi1">

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
			<td><a href="../pages/home.php">HOME<br>මුල් පිටුව</a></td>
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

		<div class="content">
    <table>
      <tr>
        <td><div class="space"></div></td>
        <td><div class="splitleftcart"><br>
          <table class="cart">
        
      <form method="post">
      	Search Results :
      	<hr>
      	 <table class='search'>
        <?php

				if (isset($_POST['searchbtn'])) 
				{
					$searchtext = $_POST['searchtext'];
					$table = $_POST['table'];
					if ($table != "Products") {
						$table = "RawMaterials";
						$_SESSION['table'] = "RawMaterials";
					}else
					{
						$_SESSION['table'] = "Products";
					}
				
					$tsql = "SELECT ID, ItemName, Description, Price, Unit, ImageName, Category1, Category2, TAGS FROM $table WHERE TAGS LIKE '%$searchtext%'";  

					$stmt = sqlsrv_query( $conn, $tsql);  

				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))  
				{  
				     echo "

			          <tr>
			          	<td rowspan='4'><img src='../images/".$row[5].".png'></td>
			          	<td>Product Code | Product Code : <strong>".$row[0]."</strong></td>
			          </tr>
			          <tr>
				        <td>Product Name | Product Name : <strong>".$row[1]."</strong></td>
				      </tr>
				      <tr>
				        <td>Price | Price : <strong>Rs.".$row[3]."/- per ".$row[4]."</strong></td>
				      </tr>
				      <tr>
				        <td>Description | Description : <strong>".$row[2]."<br><br><hr></strong></td>
				      </tr>
				      
				    ";  
				}
				}


				function filter($searchtext)
				{
					include 'database.php';

					$_SESSION['table'] = "RawMaterials";

					$tsql2 = "SELECT ID, ItemName, Description, Price, Unit, ImageName, Category1, Category2, TAGS FROM RawMaterials WHERE TAGS LIKE '%$searchtext%'";  

					$stmt2 = sqlsrv_query( $conn, $tsql2);  

					while( $row = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_NUMERIC))  
					{  
					     echo "

				          <tr>
				          	<td rowspan='4'><img src='../images/".$row[5].".png'></td>
				          	<td>Product Code | Product Code : <strong>".$row[0]."</strong></td>
				          </tr>
				          <tr>
					        <td>Product Name | Product Name : <strong>".$row[1]."</strong></td>
					      </tr>
					      <tr>
					        <td>Price | Price : <strong>Rs.".$row[3]."/- per ".$row[4]."</strong></td>
					      </tr>
					      <tr>
					        <td>Description | Description : <strong>".$row[2]."<br><br><hr></strong></td>
					      </tr>
					      
					    ";  
					}
				}

				if (isset($_POST['herbsbtn'])) {
						filter('herb');
					}

				if (isset($_POST['rootsbtn'])) {
						filter('root');
					}

				if (isset($_POST['oilsbtn'])) {
						filter('oil');
					}

				if (isset($_POST['seedsbtn'])) {
						filter('seed');
					}

				if (isset($_POST['barksbtn'])) {
						filter('bark');
					}
				


				?> </table>
        </form>
         
              



  <!--CHECKOUT CONTENT-->

        </div></td>
        <td>
          <div id="categories">
            
            <form method="post">
					<table class="categories">
						<br>
						<tr>
							<td><input type="number" name="buycode" min="1" class="buycodeinsert" placeholder="Product Code | නිෂ්පාදන කේතය"></td>
						</tr>
						<tr>
							<td><input type="submit" name="buybtn" value="PROCEED | ඉදිරියට යන්න" class="buycodebtn navibtnu3"></td>
						</tr>
						<tr>
							<td><br>Quick Links :<br></td>
						</tr>
						<tr>
							<td><input type="submit" value="#HERBS&nbsp;&nbsp;|&nbsp;&nbsp;#ඔසු_පැළෑටි" name="herbsbtn" class="categoriesbtn"></td>
						</tr>
						<tr>
							<td><input type="submit" value="#මුල්&nbsp;&nbsp;|&nbsp;&nbsp;#ROOTS" name="rootsbtn" class="categoriesbtn"></td>
						</tr>
						<tr>
							<td><input type="submit" value="#OILS&nbsp;&nbsp;|&nbsp;&nbsp;#තෙල්_වර්ග" name="oilsbtn" class="categoriesbtn"></td>
						</tr>
						<tr>
							<td><input type="submit" value="#බීජ&nbsp;&nbsp;|&nbsp;&nbsp;#SEEDS" name="seedsbtn" class="categoriesbtn"></td>
						</tr>
						<tr>
							<td><input type="submit" value="#BARKS&nbsp;&nbsp;|&nbsp;&nbsp;#පොතු" name="barksbtn" class="categoriesbtn"></td>
						</tr>
					</table>
				</form>



				<?php
					if (isset($_POST['buybtn'])) 
					{
						$stringcode = $_POST['buycode'];
						$_SESSION['buycode'] = $stringcode;
						if (isset($_SESSION['UserID'])) 
						{
							echo "<script>loadPage(10);</script>";
						}else{
							echo "<script>loadPage(2);</script>";
						}						
					}

					

				?>

          </div>
        </td>
      </tr>
    </table>
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