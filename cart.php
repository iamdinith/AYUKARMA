<?php

$server = "DESKTOP-V5EMRGI";// use your computer server name
$connectionInfo = array("Database"=>"ayukarma");
$conn = sqlsrv_connect($server,$connectionInfo);
if($conn){
  
}
else{
  
die(print_r(sqlsrv_errors(), true));
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="../javascript/javascript.js"></script>
  <link rel="icon" href="../images/ayukarmaicon.png" type="image/icon type">
  <link rel="stylesheet" type="text/css" href="../css/css.css">
  <title>Buy | </title>
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
            <a href="../pages/aboutus.php">About Us<br>අප පිළිබඳ</a>
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
     
  <!--------------------------------------------------
  </div>
      
    </div>----------------------SCROLL TO TOP-->

  <a href="#" class="scrollToTop" data-original-title="" title="" style="display: block;"></a>
<form class="cartform">
    </div>
     <table class="navio" >
    <tr>
       <td>product&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
      <td>price&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
      <td>quantity&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
      <td>total</td> 
      </tr>
      <tr>
      <!--<td>About Us</td>-->
    </tr>


  </table>
  <hr id="hr1"></hr><br><br><br><br>
  <hr id="hr1"></hr>
</form>
<form class="form1">
  <table>
    <tr>
      <td id="carttotal">cart total</td>
    </tr>
    <tr>
      <td id="subtotal"><br><br>Subtotal<br><br><hr id="subhr1"></hr></td> </td>
    </tr>
 <tr>
       <td id="shipping"><br><br><br>Shipping<br><br><hr id="subhr2"></hr> </td>
    </tr>
     <tr>
      <td id="total"><br><br><br>Total</td>
    </tr>
    <tr>
      <td>
          <input type="submit" value="Submit" id="but">       
      </td>
    </tr>
       </table>
 
</form>
<br><br>
</body>
</html>