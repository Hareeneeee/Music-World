<html>
<?php

$host="localhost";
$user="root";
$pass="";
$db="account";

$conn=mysql_connect($host,$user,$pass,$db);
$mysql_db=mysql_select_db("account",$conn);
$query="SELECT * from ac ";
$result=mysql_query($query);
$i=0;
while($rows=mysql_fetch_array($result))
{
$name[$i]=$rows['name'];
$i++;
}
$total_elmt=count('$name');
?>


<?php

$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
echo "$name";
$query2="UPDATE ac SET name='$name',email='$email',username='$username',password='$password' 
WHERE name='$name'";
$result2=mysql_query($query2);
 
?>
<p align=right><a href="view.php">VIEW RECORDS</a></p>
