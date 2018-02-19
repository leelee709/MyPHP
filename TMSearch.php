<!DOCTYPE html>
<html>
<head>
<META CHARSET='UTF-8'>
	<title>TM Search</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
			
		}

		html,body {
			
			
			height: 100%;
			width: 100%;
		}
		#container {
			height: 100%;
			width: 100%;

		}
		#header {
			background-color: black;
			width: 100%;
			height:10%;
			color: white;
			background-repeat:no-repeat;
			background-attachment:fixed;
		}
		.blank {
			height: 5%;
			background-color: white;
		}



		table {

			border: 1px solid black;
			border-collapse: collapse;
			width: 70%;
		}
		th{
			background-color: black;
			color: white;
		}
		.highlight
		{
			background-color: yellow;
		}

		tr.alt td {
			background-color: #EAF2D3;
		}
		#search{
			margin: 10px;
			height: 100%;
			width: 100%;
			

		}

		#leftcolor {
			width: 10px;
			height: inherit;
			
			
			background-color: purple;
			position:absolute;
			margin-right: 10px;
		}
		#banner{
			float: right;
			list-style-type: none;
			color: black;
			position: absolute;
		}


	</style>
</head>
<body>
<div id="container">
<div class="header" id="header">
<img src="images/pactera-logo.png" height=100% />

		<div class="banner">
			<ul class="bannerlist">
				<li>Menu</li>
				<li class="lidiv"></li>
				<li>Edit</li>
				<li class="lidiv"></li>
				<li>View</li>
			</ul>
		</div>

</div>


<div class='blank'>
</div>
<div id="leftcolor">

</div>






<div id='search'>

<div id='searchtable'>

<form action="TMSearch.php" method="post">
<p>Source:<input type="text" name="source" value="eg.view"></p>
<br>

<p>Target:&nbsp;<input type="text" name="target"></p>
<br>
<input type="submit" name="submit" value="Search" />
</form>
<?php
$dbconnect=mysql_connect('localhost','root','123');

mysql_select_db('tm',$dbconnect);


if ($_SERVER['REQUEST_METHOD']==='POST') {

	$source=$_POST['source'];
print '<table border="1"><tr><th>TMID</th><th>Source</th><th>Target</th></tr>';

	
	if(!empty($source))
	{
		$query="SELECT * From tm1 Where Source LIKE '%{$source}%'";
		print $query;
		
		if($r=mysql_query($query,$dbconnect)) {

			$count=1;

			while($row=mysql_fetch_array($r)) {

				if ($count==1) {
				$replacetarget="<span class='highlight'>{$source}</span>";
				
				$sourcetemp=str_ireplace($source, $replacetarget ,$row['Source']);
				
				print "<tr><td>{$row['TMID']}</td><td>{$sourcetemp}</td><td>{$row['Target']}</td></tr>"."\r\n";
				$count=$count-1;
				}
				else {
				$replacetarget="<span class='highlight'>{$source}</span>";
				
				$sourcetemp=str_ireplace($source, $replacetarget ,$row['Source']);
				
				print "<tr class='alt'><td>{$row['TMID']}</td><td>{$sourcetemp}</td><td>{$row['Target']}</td></tr>"."\r\n";
				$count=$count+1;
				}
				
			}
		}


	}
print "</table>";
}


?>
</div> <!-- table -->
</div> <!-- Search -->

</div> <!-- container -->
</body>
</html>