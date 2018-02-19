<!DOCTYPE html>
<html>
<head>
	<title>Upload Files</title>
</head>
<body>
<?php
	
	$stuff=scandir(".");
	foreach ($stuff as $item) {
	print $item."<BR>";
}

?>
<form action="Upload.php" enctype="multipart/form-data" method="post">
<input type="hidden" name="MAX_FILE_SIZE" Value="300000" />
<input type="file" name="the_file"	/>
<input type="submit" name="submitted" value="submit the form">

</form>
</body>
</html>