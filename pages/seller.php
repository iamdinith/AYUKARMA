
<!--INCLUDED THE DATABASE CONNECTION-->
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
	<title>ABOUT US | අප පිළිබඳ</title>
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
			        echo "<a class='active2' href='../pages/publish.php'>SELL<br>විකිණීම්</a>";
			    }
			    else
			    {
			    	echo "<a class='active2' href='../pages/login.php'>SELL<br>විකිණීම්</a>";
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
			<br>
			<form method="post">
				<?php
            $tsql = "SELECT SellingID, Item, Category, Price, Quantity, Unit, Address, Telephone, ImageName1, ImageName2, ImageName3, ImageName4, ImageName5 FROM Selling WHERE UserID = ".$_SESSION['UserID'];

				/* Execute the query. */  

				$stmt = sqlsrv_query( $conn, $tsql);  

				/* Iterate through the result set printing a row of data upon each iteration.*/  

				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))  
				{  
				     echo "
				    <table class='seller'>
				      <tr>
				        <td colspan='2'><img src='../images/".$row[8]."'></td>
				        <td colspan='2'><img src='../images/".$row[9]."'></td>
				        <td colspan='2'><img src='../images/".$row[10]."'></td>
				        <td colspan='2'><img src='../images/".$row[11]."'></td>
				        <td colspan='2'><img src='../images/".$row[12]."'></td>
			          </tr>
			          <tr class='design'><td></td></tr>
			          <tr>
				        <td class='black' colspan='3'><strong>Advertisement ID:<br>විකුණන ද්‍රව්‍යයේ / නිෂ්පාදනයේ නම:</strong></td>
				        <td class='yellow' colspan='2'>&nbsp;&nbsp;".$row[0]."</td>
				    
				        <td class='black' colspan='3'><strong>Name of the Item:<br>විකුණන ද්‍රව්‍යයේ / නිෂ්පාදනයේ නම:</strong></td>
				        <td class='yellow' colspan='2'>&nbsp;&nbsp;".$row[1]."</td>
				      </tr>
				      <tr class='design'><td></td></tr>
			          <tr>
				        <td class='black' colspan='3'><strong>Category:<br>වර්ගය:</strong></td>
				        <td class='yellow' colspan='2'>&nbsp;&nbsp;".$row[2]."</td>
				        
				        <td class='black' colspan='3'><strong>Price of the Item:<br>විකුණන ද්‍රව්‍යයේ / නිෂ්පාදනයේ මිල:</strong></td>
				        <td class='yellow' colspan='2'>&nbsp;&nbsp;".$row[3]."</td>
				      </tr>
				      <tr class='design'><td></td></tr>
			          <tr>
				        <td class='black' colspan='3'><strong>Available quantity:<br>පවතින ප්‍රමාණය:</strong></td>
				        <td class='yellow' colspan='2'>&nbsp;&nbsp;".$row[4]."&nbsp;".$row[5]."</td>
				        
				        <td class='black' colspan='3'><strong>Address:<br>පවතින ප්‍රමාණය:</strong></td>
				        <td class='yellow' colspan='2'>&nbsp;&nbsp;".$row[6]."</td>
				      </tr>
				      <tr class='design'><td></td></tr>
				      <tr>
				        <td class='black' colspan='3'><strong>Telephone:<br>පවතින ප්‍රමාණය:</strong></td>
				        <td class='yellow' colspan='2'>&nbsp;&nbsp;".$row[7]."</td>
				      </tr>
				      
				    </table><br>";  
				}  
				?>  

			</form>
			<form method="post">
				<table class="publish2">
					<tr>
						<td><select name="adcode">
														
							<?php
            $tsql = "SELECT SellingID FROM Selling WHERE UserID = ".$_SESSION['UserID'];

				/* Execute the query. */  

				$stmt = sqlsrv_query( $conn, $tsql);  

				/* Iterate through the result set printing a row of data upon each iteration.*/  

				while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))  
				{  
				     echo "<option>".$row[0]."</option>";  
				}  
				?>  
						</select></td>
						<td><input type="submit" name="deletebtn" value="Delete Advertisement bearing the given code | දී ඇති කේතය දරණ දැන්වීම මකන්න"></td>
					</tr>
					<tr>
						<td><br><br><br><br><input type="button" value="Back" class="publish2btn btn navibtnu3" onclick="loadPage(8)"></td>
					</tr>
				</table>
				<?php

				
				if (isset($_POST['deletebtn'])) {
					$adcode = $_POST['adcode'];

					$sqlq = "DELETE FROM Selling WHERE SellingID = '$adcode'";
					if ($stmtq = sqlsrv_query($conn, $sqlq)==true) {
						echo "<script type='text/javascript'>loadPage(7);</script>";
					}else{
						echo "<script type='text/javascript'>alert('An error occured')</script>";
					}
					
				}
				
			?>
				
			</form>

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