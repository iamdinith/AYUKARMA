<!DOCTYPE html>
<html>
<head>
	<title>Search Bar</title>
</head>
<body>

 <center><form method="post">
 	<label>Search</label>
 	<input type="text" name="search">
 	<input type="submit" name="submit">
 	 
 </form></center>
</body>
</html>

 <?php

$con = new PDO("mysql:host=localhost;dbname=test01",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `search` WHERE Name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>name</th>
			</tr>
			<tr>
				<td><center><?php echo $row->name; ?></center></td>
			</tr>
			<tr>
				<th>description</th>
			</tr>
			<tr>
				<td><center><?php echo $row->description;?></center></td>
			</tr>
			<tr>  
                               <td>  
                                    <center><img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" /></center>  
                               </td>  
                          </tr>  

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>