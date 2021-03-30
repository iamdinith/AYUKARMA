
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
	<title>About Us | අප පිළිබඳ</title>
</head>
<body>
	<!------------------------------------------------------------------------HEADER AND NAVIGATION-->
<div class="mastercontainer"><div>
	<form method="post" action="home.php">
  <table class="navi navi1">

  	<?php

    if (isset($_SESSION['UserID'])) 
    {
        echo 

		"<tr>
			<td rowspan='2' colspan='4'><img src='../images/ayukarmalogo.png' class='navilogo'></td>
			<td colspan='2'><!--space--></td>
			<td colspan='2'></td>
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
				<input type="text" placeholder="Search Items to Buy | මිලදී ගැනීමට භාණ්ඩ සොයන්න" class="naviinsert">
			</td>
			<td colspan="2">
				<button class="navibtn">SEARCH&nbsp;&nbsp;|&nbsp;&nbsp;සොයන්න</button>
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
			<form method="POST" action="Register.php">
		<table class="register">
			<tr>
				<td colspan="4"><center><h1>User Registration</h1></center></td>
			</tr>
			<tr>
				<td colspan="2">First Name :</td>
				<td colspan="2"><input class="text" type="text" name="fntxt" required></td>
			</tr>
			<tr>
				<td colspan="4" class="registerdesign"><br></td>
			</tr>
			<tr>
				<td colspan="2">Middle Name :</td>
				<td colspan="2"><input class="text" type="text" name="mntxt" required></td>
			</tr>
			<tr>
				<td colspan="4" class="registerdesign"><br></td>
			</tr>
			<tr>
				<td colspan="2">Last Name :</td>
				<td colspan="2"><input class="text" type="text" name="lntxt" required></td>
			</tr>

			<tr>
				<td colspan="4" class="registerdesign"><br></td>
			</tr>

			<tr>
				<td colspan="4" class="registerdesign"><br></td>
			</tr>
			<tr>
				<td colspan="2">National Identity number :</td>
				<td colspan="2"><input class="text" type="text" name="nictxt" required></td>
			</tr>
			<tr>
				<td colspan="4" class="registerdesign"><br></td>
			</tr>
			<tr>
				<td colspan="2">E-Mail :</td>
				<td colspan="2"><input class="text" type="text" name="mailtxt" required></td>
			</tr>
			</tr>
			<tr>
				<td colspan="4" class="registerdesign"><br></td>
			</tr>
			<tr>
				<td colspan="4" class="registerdesign"><br></td>
			</tr>

			<tr>
				<td colspan="2">Address Line 1 :</td>
				<td colspan="2"><input class="text" type="text" name="al1txt" required></td>
			</tr>
			<tr>
				<td colspan="4" class="registerdesign"><br></td>
			</tr>
			<tr>
				<td colspan="2">Address Line 2 :</td>
				<td colspan="2"><input class="text" type="text" name="al2txt" required></td>
			</tr>
			<tr>
				<td colspan="4" class="registerdesign"><br></td>
			</tr>
			<tr>
				<td colspan="2">Address Line 3 :</td>
				<td colspan="2"><input class="text" type="text" name="al3txt" required></td>
			</tr>
			<tr>
				<td colspan="4" class="registerdesign"><br></td>
			</tr>
			<tr>
				<td colspan="4" class="registerdesign"><br></td>
			</tr>
			<tr>
				<td colspan="2">Gender :</td>
				<td colspan="2"><select required="required" name="gender">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						</select></td>
			</tr>
			<tr>
				<td colspan="4" class="registerdesign"><br></td>
			</tr>
			<tr>
				<td colspan="2">Telephone :</td>
				<td colspan="2"><input class="text" type="text" name="tptxt" required></td>
			</tr>

			<tr>
				<td colspan="4" class="registerdesign"><br></td>
			</tr>

			<tr>
				<td colspan="2">Username :</td>
				<td colspan="2"><input class="text" type="text" name="untxt" required></td>
			</tr>
			<tr>
				<td colspan="4" class="registerdesign"><br></td>
			</tr>
			<tr>
				<td colspan="2">Password :</td>
				<td colspan="2"><input class="text" type="Password" name="pwtxt" required></td>
			</tr>

		</table>

				<br><center><input type="reset" name="lgsubmitbtn" class="btn registerbtns">&nbsp;&nbsp;&nbsp;<input type="Submit" name="lgresetbtn" class="btn registerbtns"></center><br><br>
	</form>

<?php

	// ADD Users
		if (isset($_POST["fntxt"]) AND isset($_POST["mntxt"]) AND isset($_POST["lntxt"]) AND isset($_POST["nictxt"]) AND isset($_POST["mailtxt"]) AND isset($_POST["al1txt"]) AND isset($_POST["al2txt"]) AND isset($_POST["al3txt"]) AND isset($_POST["gender"]) AND isset($_POST["tptxt"]) AND isset($_POST["untxt"]) AND isset($_POST["pwtxt"]))
{
	
			$count = 0;
			$fname= $_POST['fntxt'];
			$mname= $_POST['mntxt'];
			$lname= $_POST['lntxt'];
			$nic= $_POST['nictxt'];
			$email= $_POST['mailtxt'];
			$address1= $_POST['al1txt'];
			$address2= $_POST['al2txt'];
			$address3= $_POST['al3txt'];
			$gender= $_POST['gender'];
			$telephone= $_POST['tptxt'];
			$username= $_POST['untxt'];
			$password= $_POST['pwtxt'];
			$password1 = md5($password);

			if (preg_match("/^[a-zA-Z]*$/", $fname) == 1) 
			{
				$count +=1;
			}
			else{
				echo '<script type="text/javascript">alert("Please enter a valid first name!");</script>';
			}
			if (preg_match("/^[a-zA-Z]*$/", $mname) == 1) 
			{
				$count +=1;
			}
			else{
				echo '<script type="text/javascript">alert("Please enter a valid Middle Name!");</script>';
			}

			if (preg_match("/^[a-zA-Z]*$/", $lname) == 1) 
			{
				$count +=1;
			}
			else{
				echo '<script type="text/javascript">alert("Please enter a valid last name!");</script>';
			}

			if ((strlen($nic) == 10) AND (preg_match("/^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]V$/i", $nic) == 1))
			{
				$count +=1;
			}
			else{
				echo '<script type="text/javascript">alert("Please enter a valid NIC!");</script>';
			}

			if (preg_match("/@.+(\.com)$/", $email) == 1) 
			{
				$count +=1;
			}
			else{
				echo '<script type="text/javascript">alert("Please enter a valid email!");</script>';
			}


			if ($count == 5)
			{ 
				$tsql = "INSERT INTO USERS  
								        (NICNo,FName,MName,
									     LName,
									     UADLine1,                      
									     UADLine2,						
									     UADLine3,
										 Username ,
									     Password ,
									     Gender,Telephone,Email) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";  

				$params = array($nic,$fname,$mname,$lname,$address1,$address2,$address3,$username,$password1,$gender,$telephone,$email); 

/* Prepare and execute the query. */  
				$stmt = sqlsrv_query($conn,$tsql,$params);  
					if ($stmt) {  
					    echo '<script type="text/javascript">alert("ROW Successfully entered!");</script>';  
								}
					else 	 {  
						echo '<script type="text/javascript">alert("Row insertion failed.\n");</script>';  
							    die(print_r(sqlsrv_errors(), true));  
							}  
			}
		}
  
/* Free statement and connection resources. */ 

sqlsrv_close($conn);  

?>  
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