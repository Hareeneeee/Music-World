<html>

<?php
if($_POST)
{
$host="localhost";
$user="root";
$pass="";
$db="php";
$username=$_POST['username'];
$password=$_POST['password'];
$conn=mysqli_connect($host,$user,$pass,$db);

$query="SELECT * from login where username='$username' and password='$password'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1)
{
session_start();
$_SESSION['php']='true';
header('location:index.html');
}
else
{
echo'wrong ';
}


}
?>
<style>
body {
    background: url("music.jpg");
    background-size: 1500px 680px;
    background-repeat: no-repeat;
    
}
</style>
<body background="music.jpg" width="1000" height="1000">
<center>
<h1> LOGIN</h1>
<form method="POST">
<font size="5" color="black"><em>username:</em>
<input type="text" name="username"><br><br>
<em>password:</em>
<input type="password" name="password">
<br>
<br>
<input type="submit" name="ok">
<p><em>If U R NEW USER PLEASE SIGNUP</em></p>
<a href="anu.html"><em>SIGNUP</em></p>
</form>
</center>
</html>
