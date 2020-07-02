<html>
<body background="mok1.jpg">
<center>
<br>
<br>
<br>
<br>

<?php
$server="localhost";
$username="root";
$password="";
$connect_mysql=mysql_connect($server,$username,$password) or die ("Connection Failed!");
$mysql_db=mysql_select_db("account",$connect_mysql) or die ("Could not Connect to Database");
$query = "SELECT * FROM ac";
$result=mysql_query($query) or die("Query Failed : ".mysql_error());
while($rows=mysql_fetch_array($result))
{
	echo "NAME: ".$rows['name']."<br/>";
	echo "EMAIL: ".$rows['email']."<br/>";
	echo "USERNAME: ".$rows['username']."<br/>";
	echo "PASSWORD: ".$rows['password']."<br/>";
	echo "<br/>";
}
?>
<p align=right><a href="index.html">BACK</a></p>
</center>
</body>
</html>