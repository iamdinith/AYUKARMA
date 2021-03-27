
<?php Include ('database.php');	 ?>

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
			<form method="POST" action="REGISTER.php">
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