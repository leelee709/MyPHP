<!DOCTYPE html>
<html>
<head>
<meta content="text/php" charset="utf-8">
	<title>Login Page</title>
</head>
<body>


<?php
$name =$_POST['name'];
$Password =$_POST['Password'];
print $name;
print $Password;

if ((!empty($name)) && (!empty($Password)) )
{
	if (strtolower($name) =='lee' && strtolower($Password) =='lee')
	{
		print 'login sucess!';
	}
	else
	{
		print 'name and password does\'t match';
		print '
		<form action="login.php" method="post">
		<p>
		Account Name:<input type="text" name="name" />
		</p>
		<p>Password:<input type="Password" name="Password" /></p>
		<input type="submit" name="submit" value="Login" />
	</form>
	';
	}
}
else
{
	print "please don't leave any field empty";
print '
		<form action="login.php" method="post">
		<p>
		Account Name:<input type="text" name="name" />
		</p>
		<p>Password:<input type="Password" name="Password" /></p>
		<input type="submit" name="submit" value="Login" />
	</form>
	';
}

?>





</body>
</html>