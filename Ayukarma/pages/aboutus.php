
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
	<title>ABOUT US | අප පිළිබඳ</title>
</head>
<body>

<!--HEADER AND NAVIGATION-->

<div class="mastercontainer"><div>
	<form method="post" action="search.php">
  <table class="navi navi1">

<!--CHECKS SESSION AND PREPARES HEADER-->  	

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
<!--DESTROYS SESSION-->
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
			  		<a class="active2" href="../pages/aboutus.php#aboutus">ABOUT US<br>අප පිළිබඳ</a>
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

<!--SETS UP THE STICKY NAVBAR-->

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

<!--ABOUT US CONTENT-->

	<div class="content aboutus">
			<div id="aboutus">
				<table>
					<tr><td colspan="6"><h4>About Us | අප පිළිබඳ</h4></td></tr>
					<tr>
						<td><img src="../images/boy.png"></td>
						<td><img src="../images/boy.png"></td>
						<td><img src="../images/girl.png"></td>
						<td><img src="../images/boy.png"></td>
						<td><img src="../images/boy.png"></td>
						<td><img src="../images/boy.png"></td>
					</tr>
					<tr>
						<td colspan="6"><p>We are a team of six, each following the BSc (Hons) Software Engineering degree affiliated by the Plymouth University at the National School of Business Management, Sri Lanka.<br><br>The objective of this system is to fulfill the coursework assigned for the Intergrating Project module whislt developing a system which benefits the country and us indirectly.<br><br><br><br>
							ශ්‍රී ලංකාවේ ජාතික ව්‍යාපාර කළමනාකරණ පාසලේ ප්ලයිමූත් විශ්ව විද්‍යාලයට අනුබද්ධිත BSc (ගෞරව) මෘදුකාංග ඉංජිනේරු උපාධිය හැදෑරූ අපි හය දෙනෙකුගෙන් යුත් කණ්ඩායමක්.<br><br>අන්තර් ක්‍රියාකාරී ව්‍යාපෘති මොඩියුලය සඳහා පවරා ඇති අතර රටට සහ අපට වක්‍රව ප්‍රතිලාභ සැලසෙන පද්ධතියක් සංවර්ධනය කිරීම.</p></td>
					</tr>
				</table>
			</div>
			<div id="sitemap">
				<table>
					<tr><td colspan="6"><h4>Site Map | අඩවි සිතියම</h4></td></tr>
					<tr>
						<td colspan="6"><img src="../images/sitemap.png" class="sitemap"></td>
					</tr>
				</table>
			</div>
			<div id="termsandconditions">
				<table>
					<tr><td colspan="6"><h4>Terms and Conditions | නියම සහ කොන්දේසි</h4></td></tr>
					<tr>
						<td colspan="6"><p>Last updated [March 06, 2021]

AGREEMENT TO TERMS<br><br>

These Terms and Conditions constitute a legally binding agreement made between you, whether personally or on behalf of an entity (“you”) and [business entity name] (“we,” “us” or “our”), concerning your access to and use of the [website name.com] website as well as any other media form, media channel, mobile website or mobile application related, linked, or otherwise connected thereto (collectively, the “Site”).<br><br>

You agree that by accessing the Site, you have read, understood, and agree to be bound by all of these Terms and Conditions. If you do not agree with all of these Terms and Conditions, then you are expressly prohibited from using the Site and you must discontinue use immediately.<br><br>

Supplemental terms and conditions or documents that may be posted on the Site from time to time are hereby expressly incorporated herein by reference. We reserve the right, in our sole discretion, to make changes or modifications to these Terms and Conditions at any time and for any reason.<br><br>

We will alert you about any changes by updating the “Last updated” date of these Terms and Conditions, and you waive any right to receive specific notice of each such change.<br><br>

It is your responsibility to periodically review these Terms and Conditions to stay informed of updates. You will be subject to, and will be deemed to have been made aware of and to have accepted, the changes in any revised Terms and Conditions by your continued use of the Site after the date such revised Terms and Conditions are posted.<br><br>

The information provided on the Site is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation or which would subject us to any registration requirement within such jurisdiction or country.<br><br>

Accordingly, those persons who choose to access the Site from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable.<br><br>

These terms and conditions were generated by Termly’s Terms and Conditions Generator.<br><br>

Option 1: The Site is intended for users who are at least 18 years old. Persons under the age of 18 are not permitted to register for the Site.<br><br>

Option 2: [The Site is intended for users who are at least 13 years of age.] All users who are minors in the jurisdiction in which they reside (generally under the age of 18) must have the permission of, and be directly supervised by, their parent or guardian to use the Site. If you are a minor, you must have your parent or guardian read and agree to these Terms and Conditions prior to you using the Site.<br><br><br><br>
අවසන් වරට යාවත්කාලීන කරන ලද්දේ [මාර්තු 06, 2021]<br><br>

කොන්දේසි වලට එකඟ වීම<br><br>

මෙම නියමයන් සහ කොන්දේසි ඔබ අතර ඇති ප්‍රවේශය සම්බන්ධයෙන් පුද්ගලිකව හෝ ආයතනයක් වෙනුවෙන් (“ඔබ”) සහ [ව්‍යාපාරික ආයතන නාමය) (“අපි,” “අප” හෝ “අපේ”) අතර ඇති කර ගත් නීත්‍යානුකූල ගිවිසුමක් වේ. [වෙබ් අඩවියේ නම.කොම්] වෙබ් අඩවිය මෙන්ම වෙනත් ඕනෑම මාධ්‍ය පෝරමයක්, මාධ්‍ය නාලිකාවක්, ජංගම වෙබ් අඩවියක් හෝ ජංගම යෙදුමක් සම්බන්ධ, සම්බන්ධිත හෝ වෙනත් ආකාරයකින් සම්බන්ධ කර ඇති (සාමූහිකව “වෙබ් අඩවිය”).<br><br>

වෙබ් අඩවියට පිවිසීමෙන්, ඔබ මෙම සියලු නියමයන් හා කොන්දේසි වලට බැඳී සිටීමට කියවා, තේරුම් ගෙන ඇති බව ඔබ එකඟ වේ. මෙම සියලු නියමයන් හා කොන්දේසි සමඟ ඔබ එකඟ නොවන්නේ නම්, ඔබට පැහැදිලිවම වෙබ් අඩවිය භාවිතා කිරීම තහනම් කර ඇති අතර ඔබ වහාම භාවිතය නතර කළ යුතුය.<br><br>

වරින් වර වෙබ් අඩවියේ පළ කළ හැකි අතිරේක නියමයන් සහ කොන්දේසි හෝ ලිපි ලේඛන මෙහි සඳහන් කර ඇත. ඕනෑම වේලාවක සහ ඕනෑම හේතුවක් නිසා මෙම නියමයන් හා කොන්දේසි වෙනස් කිරීම හෝ වෙනස් කිරීම අපගේ අභිමතය පරිදි අප සතුය.<br><br>

මෙම නියමයන් සහ කොන්දේසි වල “අවසන් වරට යාවත්කාලීන කරන ලද” දිනය යාවත්කාලීන කිරීමෙන් අපි ඕනෑම වෙනස්කමක් පිළිබඳව ඔබව දැනුවත් කරනු ඇති අතර, එවැනි එක් එක් වෙනස්වීම පිළිබඳ නිශ්චිත දැනුම් දීමක් ලබා ගැනීමේ අයිතිය ඔබ අතහැර දමනු ඇත.<br><br>

යාවත්කාලීන කිරීම් පිළිබඳව දැනුවත්ව සිටීම සඳහා මෙම නියමයන් සහ කොන්දේසි වරින් වර සමාලෝචනය කිරීම ඔබේ වගකීමකි. එවැනි සංශෝධිත නියමයන් සහ කොන්දේසි පළ කළ දිනට පසුවද ඔබ වෙබ් අඩවිය අඛණ්ඩව භාවිතා කිරීම මගින් සංශෝධිත නියමයන් හා කොන්දේසි වල වෙනස්කම් පිළිබඳව ඔබ දැනුවත් කර ඇති බව පිළිගනු ලැබේ.<br><br>

වෙබ් අඩවියේ ලබා දී ඇති තොරතුරු කිසියම් අධිකරණ බල ප්‍රදේශයක හෝ රටක බෙදා හැරීම හෝ භාවිතා කිරීම සඳහා අදහස් නොකෙරේ, එවැනි බෙදාහැරීම් හෝ භාවිතය නීතියට හෝ රෙගුලාසියට පටහැනි හෝ එවැනි අධිකරණ බලයක් හෝ රටක් තුළ ලියාපදිංචි වීමේ අවශ්‍යතාවයකට යටත් වේ.<br><br>

ඒ අනුව, වෙනත් ස්ථාන වලින් වෙබ් අඩවියට පිවිසීමට තෝරා ගන්නා අය එසේ කරන්නේ ඔවුන්ගේම මුලපිරීම මත වන අතර ප්‍රාදේශීය නීති අදාළ වන්නේ නම් සහ දේශීය නීතිවලට අනුකූල වීම සඳහා සම්පූර්ණයෙන්ම වගකිව යුතුය.<br><br>

මෙම නියමයන් සහ කොන්දේසි ජනනය කරන ලද්දේ ටර්ම්ලිගේ නියමයන් සහ කොන්දේසි උත්පාදක ය.<br><br>

විකල්ප 1: වෙබ් අඩවිය අවම වශයෙන් අවුරුදු 18 ක් වත් භාවිතා කරන්නන් සඳහා අදහස් කෙරේ. වයස අවුරුදු 18 ට අඩු පුද්ගලයින්ට වෙබ් අඩවිය සඳහා ලියාපදිංචි වීමට අවසර නැත.<br><br>

විකල්ප 2: [වෙබ් අඩවිය අවම වශයෙන් වයස අවුරුදු 13 ට අඩු පරිශීලකයින් සඳහා අදහස් කෙරේ.] ඔවුන් පදිංචිව සිටින අධිකරණ බල සීමාව තුළ බාල වයස්කරුවන් වන (සාමාන්‍යයෙන් වයස අවුරුදු 18 ට අඩු) සියලුම පරිශීලකයින්ගේ අවසරය තිබිය යුතු අතර සෘජුවම අධීක්ෂණය කළ යුතුය. විසින්, ඔවුන්ගේ මවුපියන් හෝ භාරකරු විසින් වෙබ් අඩවිය භාවිතා කිරීමට. ඔබ බාල වයස්කරුවෙකු නම්, වෙබ් අඩවිය භාවිතා කිරීමට පෙර ඔබේ දෙමව්පියන් හෝ භාරකරු මෙම නියමයන් සහ කොන්දේසි කියවා එකඟ විය යුතුය.</p></td>
					</tr>
				</table>
			</div>
			<div id="privacypolicy">
				<table>
					<tr><td colspan="6"><h4>Privacy Policy | රහස්යතා ප්රතිපත්තිය</h4></td></tr>
					<tr>
						<td colspan="6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultrices, ipsum eu facilisis aliquet, dolor ante commodo turpis, a lobortis elit diam non urna. Suspendisse potenti. In porta ipsum eget nulla condimentum, quis cursus dolor viverra. Nam vestibulum laoreet malesuada. Aliquam erat volutpat. Pellentesque sit amet malesuada dolor. Maecenas non tempor nunc, non accumsan elit. Nam eu est pretium purus feugiat lobortis at mollis lectus. Nam vitae dictum quam. Aenean vulputate sed magna eget molestie. Vivamus at urna gravida, condimentum lectus a, fermentum sem. Duis dapibus mi eget sodales porta.<br><br>

Ut et sapien scelerisque, efficitur purus quis, aliquam tortor. In maximus lacinia ligula sollicitudin efficitur. Suspendisse quis tempor lorem. Pellentesque molestie commodo leo at malesuada. Phasellus nec placerat nulla. Curabitur sollicitudin porta lacus facilisis dapibus. Ut hendrerit egestas erat. Pellentesque sed luctus risus. Morbi euismod a turpis eget volutpat. In ullamcorper, mauris id elementum luctus, est turpis lobortis est, sed dignissim tellus nisl sed magna. Pellentesque tincidunt tellus lorem, et vestibulum lectus scelerisque et. Aenean tempor, turpis non ornare posuere, lacus arcu elementum nisl, vel fringilla lectus sapien quis urna. Proin nec elit in magna accumsan placerat vitae sed odio. Donec porttitor dignissim ipsum sed tempus.<br><br>

Cras id erat fringilla, blandit sem ut, porttitor justo. Curabitur tempor lectus id mi maximus, eget facilisis neque mollis. Aenean egestas, sem eu congue sollicitudin, nisi justo ultrices felis, tristique pellentesque nibh justo sed tortor. Aliquam sed lacus at ipsum iaculis fringilla. Praesent sit amet nibh tempus, vestibulum massa nec, auctor mi. Ut sapien sem, blandit vel sollicitudin ac, venenatis vel ante. Donec elit ex, ullamcorper et ipsum eget, consectetur placerat leo. Nunc iaculis ut risus vel sollicitudin. Suspendisse cursus arcu ligula, nec tempor mi suscipit a.<br><br>

Sed dictum, orci sed mollis varius, urna turpis tempor nisl, ac commodo enim magna pharetra dui. In consequat egestas diam, ut efficitur enim bibendum ut. Morbi quis purus consequat, lacinia orci nec, tincidunt neque. Nulla finibus dolor eget tempor bibendum. Cras consequat ipsum nec tortor interdum convallis. Aenean dignissim nec magna quis ultricies. Phasellus facilisis nulla id aliquet viverra. Mauris placerat urna vitae nisl auctor, et tincidunt tortor lobortis. Curabitur rhoncus leo at tincidunt interdum.<br><br>

Nunc id consequat risus, eu gravida dolor. Mauris non efficitur dui, vitae volutpat lorem. Nulla diam orci, tempus sed turpis in, suscipit tincidunt ante. Nulla ut suscipit purus, ut lacinia dolor. Quisque dolor metus, vehicula id quam eget, dictum aliquam est. Morbi ultrices sodales lacus, eget porta augue sollicitudin ac. Aenean vitae egestas libero. Nunc eget pellentesque justo. Maecenas eget facilisis sapien. Pellentesque viverra vel augue nec condimentum. Fusce ultricies tellus arcu, ac ultricies justo convallis non. Integer aliquet turpis id purus rutrum finibus. Curabitur lobortis ut libero at pretium. Nunc vehicula felis non ultricies interdum. Cras porttitor metus ut finibus blandit.</p></td>
					</tr>
				</table>
			</div>
			<div id="qualitypolicy">
				<table>
					<tr><td colspan="6"><h4>Quality Policy | ගුණාත්මක ප්රතිපත්තිය</h4></td></tr>
					<tr>
						<td colspan="6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultrices, ipsum eu facilisis aliquet, dolor ante commodo turpis, a lobortis elit diam non urna. Suspendisse potenti. In porta ipsum eget nulla condimentum, quis cursus dolor viverra. Nam vestibulum laoreet malesuada. Aliquam erat volutpat. Pellentesque sit amet malesuada dolor. Maecenas non tempor nunc, non accumsan elit. Nam eu est pretium purus feugiat lobortis at mollis lectus. Nam vitae dictum quam. Aenean vulputate sed magna eget molestie. Vivamus at urna gravida, condimentum lectus a, fermentum sem. Duis dapibus mi eget sodales porta.<br><br>

Ut et sapien scelerisque, efficitur purus quis, aliquam tortor. In maximus lacinia ligula sollicitudin efficitur. Suspendisse quis tempor lorem. Pellentesque molestie commodo leo at malesuada. Phasellus nec placerat nulla. Curabitur sollicitudin porta lacus facilisis dapibus. Ut hendrerit egestas erat. Pellentesque sed luctus risus. Morbi euismod a turpis eget volutpat. In ullamcorper, mauris id elementum luctus, est turpis lobortis est, sed dignissim tellus nisl sed magna. Pellentesque tincidunt tellus lorem, et vestibulum lectus scelerisque et. Aenean tempor, turpis non ornare posuere, lacus arcu elementum nisl, vel fringilla lectus sapien quis urna. Proin nec elit in magna accumsan placerat vitae sed odio. Donec porttitor dignissim ipsum sed tempus.<br><br>

Cras id erat fringilla, blandit sem ut, porttitor justo. Curabitur tempor lectus id mi maximus, eget facilisis neque mollis. Aenean egestas, sem eu congue sollicitudin, nisi justo ultrices felis, tristique pellentesque nibh justo sed tortor. Aliquam sed lacus at ipsum iaculis fringilla. Praesent sit amet nibh tempus, vestibulum massa nec, auctor mi. Ut sapien sem, blandit vel sollicitudin ac, venenatis vel ante. Donec elit ex, ullamcorper et ipsum eget, consectetur placerat leo. Nunc iaculis ut risus vel sollicitudin. Suspendisse cursus arcu ligula, nec tempor mi suscipit a.<br><br>

Sed dictum, orci sed mollis varius, urna turpis tempor nisl, ac commodo enim magna pharetra dui. In consequat egestas diam, ut efficitur enim bibendum ut. Morbi quis purus consequat, lacinia orci nec, tincidunt neque. Nulla finibus dolor eget tempor bibendum. Cras consequat ipsum nec tortor interdum convallis. Aenean dignissim nec magna quis ultricies. Phasellus facilisis nulla id aliquet viverra. Mauris placerat urna vitae nisl auctor, et tincidunt tortor lobortis. Curabitur rhoncus leo at tincidunt interdum.<br><br>

Nunc id consequat risus, eu gravida dolor. Mauris non efficitur dui, vitae volutpat lorem. Nulla diam orci, tempus sed turpis in, suscipit tincidunt ante. Nulla ut suscipit purus, ut lacinia dolor. Quisque dolor metus, vehicula id quam eget, dictum aliquam est. Morbi ultrices sodales lacus, eget porta augue sollicitudin ac. Aenean vitae egestas libero. Nunc eget pellentesque justo. Maecenas eget facilisis sapien. Pellentesque viverra vel augue nec condimentum. Fusce ultricies tellus arcu, ac ultricies justo convallis non. Integer aliquet turpis id purus rutrum finibus. Curabitur lobortis ut libero at pretium. Nunc vehicula felis non ultricies interdum. Cras porttitor metus ut finibus blandit.</p></td>
					</tr>
				</table>
			</div>
			<div id="contactus">
				<h4 class="sent-notification"></h4>

		<form id="myForm">
      <table>
      	<tr><td colspan="5"><h4>Contact Us | අප අමතන්න</h4></td></tr>
        <tr>
          <td rowspan="7" colspan="3"><h6>Contact us via our hotlines<br>අපගේ හොට්ලයින් හරහා අප අමතන්න<br><br>011 123 4567 | 022 123 4567</h6></td>
          <td colspan="2"><h6>Send us an email<br>අපට විද්‍යුත් තැපෑලක් එවන්න</h6></td>
        </tr>
        <tr>
          <td><p>Name | නම :</p></td>
          <td><input id="name" type="text" placeholder="Enter Name" ></td>
        </tr>
        <tr>
          <td ><p>Your email | ඔබගේ විද්‍යුත් තැපැල් ලිපිනය :</p></td>
          <td><input id="email" type="text" placeholder="Enter Email" ></td>
        </tr>
        <tr>
          <td><p>Subject | විෂය :</p></td>
          <td><input id="subject" type="text" placeholder=" Enter Subject" > </td>
        </tr>
        <tr>
          <td colspan="2"><p>Message | පණිවුඩය :</p></td>
        </tr>
        <tr>
          <td colspan="2"><textarea id="body" rows="5" cols="47.5" placeholder="Type Message | පණිවිඩය ටයිප් කරන්න"></textarea></td>
        </tr>
        <tr>
          <td colspan="2" align="right"><button type="button" onclick="sendEmail()" value="Send An Email">Send | යවන්න</button> </td>
        </tr>
      </table>

<!--EMAIL CODE-->

		</form>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'email-script-farmerside.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

			</div>
			<div id="app">
				<table>
					<tr>
						<td><h4>AYUKARMA App</h4></td>
					</tr>
					<tr>
						<td><img src="../images/sitemap.png"></td>
					</tr>
					<tr>
						<td><p><center><a href="../pages/aboutus.php#app">>>> CLICK TO DOWNLOAD <<<</a></center></p></td>
					</tr>
				</table>
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