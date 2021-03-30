
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
	<title>SELL | විකිණීම්</title>
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
			<td colspan='2'><input type='button' onclick='loadPage(9)' class='navibtn' value='My Cart&nbsp;&nbsp;|&nbsp;&nbsp;මගේ කූඩය'/></td>
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
			
			<td colspan="4">
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

  <!--PUBLISH AD DETAILS-->

		<div class="content">
			<form method="post">
			<table class="publish">
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="sellerbtn" value="Seller Profile | විකුණුම් පැතිකඩ" class="spread navibtnu3"></td>
				</tr>
			</form>
			<form method="post" action="publish.php" enctype="multipart/form-data">
				<tr class="design"><td></td></tr>
				<tr>
					<td>Upload 5 images of the item:<br>අයිතමයේ පින්තූර 5 ක් උඩුගත කරන්න:</td>
					<td>
						<input type="file" name="file1" required=""/><br/><br/>
						<input type="file" name="file2" required=""/><br/><br/>
						<input type="file" name="file3" required=""/><br/><br/>
						<input type="file" name="file4" required=""/><br/><br/>
						<input type="file" name="file5" required=""/><br/><br/>
					</td>
				</tr>
				<tr class="design"><td></td></tr>
				<tr>
					<td>Name of the Item:<br>විකුණන ද්‍රව්‍යයේ / නිෂ්පාදනයේ නම:</td>
					<td colspan="2"><input type="text" name="itemname" required="" class="spread" ></td>
				</tr>
				<tr class="design"><td></td></tr>
				<tr>
					<td>Category:<br>වර්ගය:</td>
					<td colspan="2"><select required="" name="itemcategory" class="spread">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select></td>
				</tr>
				<tr class="design"><td></td></tr>
				<tr>
					<td>Price of the Item:<br>විකුණන ද්‍රව්‍යයේ / නිෂ්පාදනයේ මිල:</td>
					<td colspan="2"><input type="text" name="itemprice" required="" class="spread"/></td>			
				</tr>
				<tr class="design"><td></td></tr>
				<tr>
					<td>Available quantity:<br>පවතින ප්‍රමාණය:</td>
					<td><input type="text" name="itemquantity" required=""/></td>
					<td><select required="" name="itemunit">
						<option selected="">g</option>
						<option>ml</option>
						<option>l</option>
						<option>m</option>
						<option>pieces</option>
					</select></td>
				</tr>
				<tr class="design"><td></td></tr>
				<tr>
					<td>Address:<br>ලිපිනය:</td>
					<td colspan="2"><input type="text" name="address" required="" class="spread"/></td>			
				</tr>
				<tr class="design"><td></td></tr>
				<tr>
					<td>Contact Number:<br>ඇමතුම් අංකය:</td>
					<td colspan="2"><input type="text" name="contactno" required="" class="spread"/></td>			
				</tr>
				<tr class="design"><td></td></tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="publishbtn" value="Publish | ප්‍රකාශ කරන්න" class="spread navibtnu3"/></td>
				</tr>
			</table>
		</form>
		<?php

				if (isset($_POST['sellerbtn'])) 
				{
					$tsql = "SELECT Position FROM USERS WHERE UserID = ".$_SESSION['UserID'];

					

					$stmt = sqlsrv_query( $conn, $tsql);  
					$result = 0;

					

					while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))  
					{  
						$result+=1;
					     

						if ($result == 1) {
							echo "
							     <script type='text/javascript'>
									if (".$row[0]." == 1) 
									{
										open('../pages/seller.php','_self');
									}else
									{
										alert('You should become a seller to proceed. (ඉදිරියට යාමට ඔබ විකුණුම්කරුවෙකු විය යුතුය.)');
									}
								</script>";
						}

					}  
				}


				if (isset($_POST['publishbtn'])) 
				{
					$tsql = "SELECT * FROM PastSelling WHERE UserID = ".$_SESSION['UserID'];  

					

					$stmt = sqlsrv_query( $conn, $tsql);  
					$result = 0;

					

					while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))  
					{  
						$result+=1;
					}

					if ($result == 0) 
					{
						echo "<script type='text/javascript'>
								var r = alert('Henceforth you will be registered as a seller');
							</script>";

						$tsql2 = "UPDATE USERS SET Position = 1 WHERE UserID = ".$_SESSION['UserID'];  
						$stmt2 = sqlsrv_query($conn, $tsql2);


						$itemname = $_POST['itemname'];
						$itemcategory = $_POST['itemcategory'];
						$itemprice = $_POST['itemprice'];
						$itemquantity = $_POST['itemquantity'];
						$itemunit = $_POST['itemunit'];
						$address = $_POST['address'];
						$contactno = $_POST['contactno'];

						$imagename1 = rand(1000,100000)."-".$_FILES["file1"]["name"];
						$filepath = "../images/" . $imagename1;
						move_uploaded_file($_FILES["file1"]["tmp_name"], $filepath);

						$imagename2 = rand(1000,100000)."-".$_FILES["file2"]["name"];
						$filepath = "../images/" . $imagename2;
						move_uploaded_file($_FILES["file2"]["tmp_name"], $filepath);

						$imagename3 = rand(1000,100000)."-".$_FILES["file3"]["name"];
						$filepath = "../images/" . $imagename3;
						move_uploaded_file($_FILES["file3"]["tmp_name"], $filepath);

						$imagename4 = rand(1000,100000)."-".$_FILES["file4"]["name"];
						$filepath = "../images/" . $imagename4;
						move_uploaded_file($_FILES["file4"]["tmp_name"], $filepath);

						$imagename5 = rand(1000,100000)."-".$_FILES["file5"]["name"];
						$filepath = "../images/" . $imagename5;
						move_uploaded_file($_FILES["file5"]["tmp_name"], $filepath);

						
						$tsql = "INSERT INTO Selling (UserID, Item,	Category, Price, Quantity, Unit, Address, Telephone, ImageName1, ImageName2, ImageName3, ImageName4, ImageName5) VALUES(".$_SESSION['UserID'].",'$itemname','$itemcategory','$itemprice',$itemquantity,'$itemunit','$address',$contactno,'$imagename1','$imagename2','$imagename3','$imagename4','$imagename5')"; 

						$stmt = sqlsrv_query( $conn, $tsql);
						
					}

					else if ($result >= 3) 
					{
						echo "<script type='text/javascript'>alert('You can only publish 3 ads here. Use our App to publish more ads.') ;</script>";
					}	
					else
					{
						$itemname = $_POST['itemname'];
						$itemcategory = $_POST['itemcategory'];
						$itemprice = $_POST['itemprice'];
						$itemquantity = $_POST['itemquantity'];
						$itemunit = $_POST['itemunit'];
						$address = $_POST['address'];
						$contactno = $_POST['contactno'];

						$imagename1 = rand(1000,100000)."-".$_FILES["file1"]["name"];
						$filepath = "../images/" . $imagename1;
						move_uploaded_file($_FILES["file1"]["tmp_name"], $filepath);

						$imagename2 = rand(1000,100000)."-".$_FILES["file2"]["name"];
						$filepath = "../images/" . $imagename2;
						move_uploaded_file($_FILES["file2"]["tmp_name"], $filepath);

						$imagename3 = rand(1000,100000)."-".$_FILES["file3"]["name"];
						$filepath = "../images/" . $imagename3;
						move_uploaded_file($_FILES["file3"]["tmp_name"], $filepath);

						$imagename4 = rand(1000,100000)."-".$_FILES["file4"]["name"];
						$filepath = "../images/" . $imagename4;
						move_uploaded_file($_FILES["file4"]["tmp_name"], $filepath);

						$imagename5 = rand(1000,100000)."-".$_FILES["file5"]["name"];
						$filepath = "../images/" . $imagename5;
						move_uploaded_file($_FILES["file5"]["tmp_name"], $filepath);

						
						$tsql = "INSERT INTO Selling (UserID, Item,	Category, Price, Quantity, Unit, Address, Telephone, ImageName1, ImageName2, ImageName3, ImageName4, ImageName5) VALUES(".$_SESSION['UserID'].",'$itemname','$itemcategory','$itemprice',$itemquantity,'$itemunit','$address',$contactno,'$imagename1','$imagename2','$imagename3','$imagename4','$imagename5')"; 

						$stmt = sqlsrv_query( $conn, $tsql);
							
					}

				} 
				
			?> 

			
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