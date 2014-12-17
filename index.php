<!DOCTYPE HTML> 
<html>
<head>
<title>PupilTracker Backend</title>
<style>.error {color: #FF0000;}</style>
</head>
<body> 

<?php
// define variables and set to empty values
$name = test_input($_POST["name"]);
$pkey = test_input($_POST["pkey"]);

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<h1>PupilTracker Backend</h1>
<form method="post" enctype="multipart/form-data" action="upload.php"> 
	Name: <input type="text" name="name" value="<?php echo $name;?>">
	<br><br>
	ID: <input type="text" name="pkey" value="<?php echo $pkey;?>">
	<br><br>
	lol: <input name="vid" type="file" />
	<br><br>
	<input type="submit" name="submit" value="Submit"> 
</form>

</body>
</html>
