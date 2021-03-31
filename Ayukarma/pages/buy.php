
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
	<title>BUY | මිලදී</title>
</head>
<body>

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

</div>
	
<!--SCROLL TO TOP-->

	<a href="#" class="scrollToTop" data-original-title="" title="" style="display: block;"></a>

<!--PUBLISHED AD DETAILS-->

		<div class="content">
			<div class=""><br><br>

<!--GETS THE VALUE SENT THROUGH THE EGET METHOD AND ASSIGNS IT TO THE $page VARIABLE-->				

<?php 

	$page = $_GET['page'];

	if ($page == 0) 
	{
		$id = $_GET['id'];
		$table = 'Featured';
	}


	$tsql = "SELECT  ItemName, ImageName, Price, Unit FROM $table where ID= $id";  

	$stmt = sqlsrv_query( $conn, $tsql);  

	$row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC );
	
	//CREATES THE PRODUCT VIEW

	     echo "
	     <form method='post'>
	    <table class='productcard'>
	    	<tr>
	        	<td rowspan='5' id='size'><div class='imgContainer'><img src='../images/".$row[1].".png'></div></td>
	      	</tr>
	      	<tr>
	      		<td colspan='2' class='pricetd'><h1><strong>".$row[0]."</strong></h1><br>Rs.<strong>".$row[2].".00</strong> per <strong>".$row[3]."</strong></td>
	      	</tr>
	 		<tr>
	 			<td class='quantitytd'>
					<input type='number' step='1' min='1' max='' name='quantity' value='1' title='Quantity | ප්‍රමාණය' class='quantityinput' size='' pattern='' inputmode=''/>
				</td>
				<td><input type='submit' name='cartbtn' value='Add to Cart | කූඩයට එක් කරන්න' class='cartbtn'/></td>
			</tr>
			<tr>
			<td><br><br></td>
			</tr>
			<tr>
			<td><br></td>
			</tr>
	     
	    </table>
	    </form>";  

//ADD TO CART BUTTON FUNCTIOANLITY

	    if (isset($_POST['cartbtn'])) 
	    {

			    if (isset($_SESSION['UserID'])) 
			    {
			        $quantity = $_POST['quantity'];
	    	
			    	$tsql = "INSERT into Cart (ProductName,UserID,Price,Quantity,ImageName,Unit) VALUES ('".$row[0]."',".$_SESSION['UserID'].",".$row[2].",$quantity,'".$row[1]."','".$row[3]."');";  

					/* Execute the query. */  
					if ($stmt = sqlsrv_query( $conn, $tsql) == true ) {
						echo "<script>alert('Record successfully added. (වාර්තාව සාර්ථකව එකතු කරන ලදි)');</script>";
					}
					else
					{
						echo "<script>alert('An Error Occured. (දෝෂයක් ඇතිවිය)');</script>";
					}
				}
			    else
			    {
			    	echo "<script>loadPage(2);</script>";
			    }

	    }
?>

<br><br>
</div>
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