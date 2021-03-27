
<!--INCLUDED THE DATABASE CONNECTION-->
<?php include 'database.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="../javascript/javascript.js"></script>
  <link rel="icon" href="../images/ayukarmaicon.png" type="image/icon type">
  <link rel="stylesheet" type="text/css" href="../css/css.css">
  <title>DOCTORS | වෛද්‍යවරු</title>

  <!--MAP CODE-->

  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGW_MYkttjLCgzzj7aZYHW1ofNi5Qa-7w&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <script>

      // Initialize and add the map
      function initMap(lat,lng,z) {
        // The location of Uluru
        const uluru = { lat: lat, lng: lng };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: z,
          center: uluru,
        });
        var infoWindow = new google.maps.InfoWindow;
        var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = lat + ", " + lng
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));
        // The marker, positioned at Uluru
        var icon = '../images/placeholder.png'
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
          icon: icon
        });
         marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
      }

    </script>
</head>
<body onload="initMap(7.8731, 80.7718, 7.5)">

  <!--HEADER AND NAVIGATION-->

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

<div id="navbar">
  <table class="navi">
    <tr>
      <td><img src="../images/ayukarmalogo2.png" id="stickylogo" class="stickylogo"></td>
      <td><a href="../pages/home.php">HOME<br>මුල් පිටුව</a></td>
      <td><a href="../pages/knowledge.php">INFO PORTAL<br>තොරතුරු පියස</a></td>
      <td><a class="active2" href="#">DOCTORS<br>වෛද්‍යවරු</a></td>
      <td><a href="../pages/centre.php">CENTRES<br>මධ්‍යස්ථාන</a></td>  
      <td><a href="../pages/publish.php">SELL<br>විකිණීම්</a></td>   
      <td class="dropdown">
            <a href="../pages/aboutus.php">ABOUT US<br>අප පිළිබඳ</a>
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

<!--DOCTOR DETIAL SECTION-->

  <div class="content">
    <table>
      <tr>
        <td><div class="space"></div></td>
        <td><div class="splitleft">
          <?php
            $tsql = "SELECT docname, phone, email, descrip, imagename, lat, lng FROM doctor";  

            $stmt = sqlsrv_query( $conn, $tsql);   

            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))  
            {  
                 echo "
                <table class='docdetails'>
                  <tr>
                    <td rowspan='6'><img src='../images/".$row[4]."'></td>
                    <td colspan='2'><strong>Name | නම:</strong></td>
                  </tr>
                  <tr>
                    <td colspan='2'>&nbsp;&nbsp;Dr. ".$row[0]."</td>
                  </tr>
                  <tr>
                    <td colspan='2'><strong>Contact No. | ඇමතුම් අංකය:</strong></td>
                  </tr>
                  <tr>
                    <td colspan='2'>&nbsp;&nbsp;+94".$row[1]."</td>
                  </tr>
                  <tr>
                    <td colspan='2'><strong>Email | විද්යුත් තැපෑල:</strong></td>
                  </tr>
                  <tr>
                    <td colspan='2'>&nbsp;&nbsp;".$row[2]."</td>
                  </tr>
                  <tr>
                    <td><strong>Other | වෙනත්</strong></td>
                  </tr>
                  <tr>
                    <td colspan='3'>".$row[3]."<br><br></td>
                  </tr>
                  <tr>
                    <td colspan='3' align='right'><button class='locatebtn' onclick='initMap(".$row[5].", ".$row[6].", 9)'><strong>Locate | ස්ථානය</strong></button></td>
                  </tr>
                </table>";  
            }  
            ?> 

  <!--MAP DISPLAY--> 

        </div></td>
        <td><div id="map"></div>
        </td>
      </tr>
    </table>
    </div>

  <!--FOOTER-->

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
