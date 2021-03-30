<?php 

	$errors = array();

	if (isset($_POST['submit'])) {

		$file_name = $_FILES['image']['name'];
		$file_type = $_FILES['image']['type'];
		$file_size = $_FILES['image']['size'];
		$tmp_name = $_FILES['image']['tmp_name'];

		$upload_to = 'images/';

		//checking file type
		if ($file_type != 'image/png' ) {
			$errors[] = 'Only  PNG files are allowed.';
		}

		/* /checking file size
		if ($file_size > 500000) {
			$errors[] = 'File size should be less than 500kb.';
		}*/

		if (empty($errors)) {
			$file_uploaded = move_uploaded_file($tmp_name, $upload_to . $file_name);
		}

	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Image Upload</title>
	<style type="text/css"> 
		.container { width: 960px; margin: 0 auto; }
		.errors { color: red; }
	</style>
</head>
<body>
	<div class="container">
		<h1>Image Upload</h1>
		<h3>Choose an Image and Click Upload</h3>

		<?php 
		 if (!empty($errors)) {
		 	echo '<div class="errors">';
		 	echo '<b>File not uploaded. Check following errors:</b><br>';
		 	foreach ($errors as $error) {
		 		echo '- '. $error;
		 	}
		 	echo '</div>';
		 }

		 ?>

		<form action="index.php" method="post" enctype="multipart/form-data">
			<P>Note: JPEG files less than ****kb only.</P>
			<input type="file" name="image" id="">
			<button type="submit" name="submit">Upload</button>

	    </form>

	    <?php 
	    if (isset($file_uploaded)){
	    	echo '<h3>Uploaded File</h3>';
	    	echo '<img src="'. $upload_to . $file_name . '" style=height:200px>';

	    }

	     ?>
		
	</div><!--container-->

</body>
</html>