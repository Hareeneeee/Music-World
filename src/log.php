<?php

if(isset($_POST['email']))
{
	$servername="localhost";
	$username="root";
	$password="";
	$conn=new mysqli($servername,$username,$password,"example");
	
	$email=$_POST['email'];
	
	$sql="INSERT INTO music(email) values('$email')";
	$conn->query($sql);
}


?>
<!DOCTYPE html>

<html >
 
 <head>
    
<meta charset="UTF-8">
  
  <title>login</title>
    
    

  <link rel="stylesheet" href="css/style.css">

    
    
    
 
 </head>

  <body>

    
<div class="wrapper">
	
<div class="container">
		
<h1>Welcome </h1>
	
	
		
<form name="login-form" method="post" id="login-form">

<label for="email"></label>
<br>		
	<em>USERNAME:</em><input type="text" id="email" name="email"/>

	
	<label for="password"></label>	
<em>PASSWORD:</em><input type="password" id="password" name="password"/>
	
		<button type="submit" id="login-button">Login</button>
	

	</form>
	</div>
	
	<ul class="bg-bubbles">
		
<li></li>
		<li></li>
		<li></li>


		<li></li>
		<li></li>

		<li></li>
		<li></li>

		<li></li>
		<li></li>

		<li></li>
	</ul>
</div>
 
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
      <script src="js/index.js"></script>

    

    
    
  </body>
</html>
