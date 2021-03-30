
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
  <title>CENTRES | මධ්‍යස්ථාන</title>

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
      <td><a class="active2" href="">CENTRES<br>මධ්‍යස්ථාන</a></td>  
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

  <!--CENTRE DETAIL SECTION-->

  <div class="content">
    <table>
      <tr>
        <td><div class="space"></div></td>
        <td><div class="splitleftcart"><br>
          <table class="cart">
        <tr>
          <th colspan="3">PRODUCT<br>භාණ්ඩ</th>
          <th>UNIT PRICE<br>ඒකක මිල</th>
          <th>QUANTITY<br>ප්‍රමාණය</th>
          <th>TOTAL<br>මුළු මුදල</th>
        </tr>

      <form method="post">
        <?php
        
          $tsql = "SELECT CartID, ProductName, Price, Date, Quantity, ImageName, Unit FROM Cart WHERE UserID = ".$_SESSION['UserID'];

          $stmt = sqlsrv_query( $conn, $tsql);  
          $sum=0;

        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))  
        {  
             echo "
                <tr>
                <td><input type='submit' value='X' class='deleteCartRecord'/>".$row[0]."</td>
                <td><img src='../images/".$row[5].".png'/></td>
                <td>".$row[1]."</td>
                <td>Rs.".$row[2]."/-</td>
                <td>".$row[4]." ".$row[6]."/s</td>
                <td>Rs.".$row[2]*$row[4]."/-</td>
              </tr>
              ";  

              $sum+=$row[2]*$row[4];

        }

        ?>  
        </form>
              </table>
              <form method="post">
        <table>
          <tr>
            <td><select name="adcode">
                            
              <?php
            $tsql = "SELECT CartID FROM Cart WHERE UserID = ".$_SESSION['UserID'];

        /* Execute the query. */  

        $stmt = sqlsrv_query( $conn, $tsql);  

        /* Iterate through the result set printing a row of data upon each iteration.*/  

        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))  
        {  
             echo "<option>".$row[0]."</option>";  
        }  
        ?>  
            </select></td>
            <td><input type="submit" name="deletebtn" value="Remove"></td>
          </tr>
        
        </table>
        <?php

        
        if (isset($_POST['deletebtn'])) {
          $adcode = $_POST['adcode'];

          $sqlq = "DELETE FROM Cart WHERE CartID = '$adcode'";
          if ($stmtq = sqlsrv_query($conn, $sqlq)==true) {
            echo "<script type='text/javascript'>loadPage(9);</script>";
          }else{
            echo "<script type='text/javascript'>alert('An error occured')</script>";
          }
          
        }
        
      ?>
        
      </form>



  <!--CHECKOUT CONTENT-->

        </div></td>
        <td>
          <div id="carttotal">
            
            <table class="checkout">
              <tr>
                <td>Total Price:<br>එකතුව:</td>
              </tr>
              <tr>
                <?php
                if ($sum > 3000) {
                  echo "<td style='color:red' align='center' class='totalPrice'><h2>Rs.".$sum."/-</h2></td>";
                }else
                {
                  echo "<td align='center' class='totalPrice'><h2>Rs.".$sum."/-</h2></td>";
                }
                ?>
                
              </tr>
              <tr>
                <td class="payment">
                  Select payment method:<br>ගෙවීම් ක්‍රමය තෝරන්න:<br><br>
                  <input type="radio" name="p" checked=""><img src="../images/money.png"><br>
                  <input type="radio" name="p"><img src="../images/visa.png"><br>
                  <input type="radio" name="p"><img src="../images/mastercard.png"><br>
                </td>
              </tr>
              <form method="post">
              <tr>
                <td align="center"><input type="submit" value="Buy | මිලදී ගන්න" name="buybtn" class="buybtn"></td>
              </tr>
                              <tr>
                  <td class="payment" align="center"><input type="checkbox" name="checkbtn">Tick to approve</td>
                </tr>
              </form>
            </table>

            <?php 
              if (isset($_POST['buybtn'])) 
              {
                if (isset($_POST['checkbtn'])) 
                {
                  if ($sum < 3000) 
                  {
                    $tsql2 = "SELECT CartID, ProductName, Price, Date, Quantity, ImageName, Unit FROM Cart WHERE UserID = ".$_SESSION['UserID'];

                $stmt2 = sqlsrv_query( $conn, $tsql2);  
                

                while( $row2 = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_NUMERIC))  
                {
                  try {

                  $sqlq = "INSERT INTO Orders (ProductName, UserID, Unitprice, Totalprice, Quantity) VALUES ('".$row2[1]."',".$_SESSION['UserID'].",".$row2[2].",".$row2[2]*$row2[4].",".$row2[4].")";

                        if (sqlsrv_query( $conn, $sqlq) == true) {
                          $sqldq = "DELETE FROM Cart WHERE CartID = $row2[0]";
                          sqlsrv_query( $conn, $sqldq);
                        }
                  
                  } catch (Exception $e) {
                    
                  }finally{
                    echo "<script> loadPage(9); </script>";
                  }
                }
                  } else{
                    echo "<script>alert('You are only allowed to make purchases below Rs.3000/-. Install our app to do unlimited purchases. (ඔබට අවසර දී ඇත්තේ රු .3000 / - ට අඩු මිලදී ගැනීම් පමණි. අසීමිත මිලදී ගැනීම් කිරීමට අපගේ යෙදුම ස්ථාපනය කරන්න.)')</script>";
                  }
                  
                } else
                {
                  echo "<script>alert('Approve to proceed. (ඉදිරියට යාමට අනුමත කරන්න)')</script>";
                }
              }
            ?>

          </div>
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
