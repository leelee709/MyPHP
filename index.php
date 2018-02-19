<?php
if (isset($_POST['fontsize'],$_POST['fontcolor']))
{
	setcookie('fontsize', $_POST['fontsize']);
	setcookie('fontcolor', $_POST['fontcolor']);
	$msg='Your setting has been enterred';
	print $msg;
}

?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
	<title>homepage</title>
	<style type="text/css">
		p{
			color: white;
			background: gray;
		}

	</style>
</head>
<body>
<p>Please use below form to set your preference:</p>
<form action="cookie.php" method="post">

	<select name="fontsize">
		<!--<option value="">Font Size</option> -->
		<option value="small">small</option>
		<option value="medium">medium</option>
		<option value="big">big</option>

	</select>
	<select name="fontcolor">
		<!--<option value="">Font Color</option> -->
		<option value="red">red</option>
		<option value="yellow">yellow</option>
		<option value="blue">blue</option>

	</select>
<input type="submit" name="submit" name="set your preference" />



</form>
</body>
</html>



