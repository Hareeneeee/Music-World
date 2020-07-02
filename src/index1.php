<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<body background="abc.jpg">
<div id="header">
<div align="center">
<br>
<br>
<br>
<label>UPLOAD UR OWN MUSIC</label>
<br>
<br>
<br>
<br>
<div id="body">
   <form action="upload.php" method="post" enctype="multipart/form-data">
<div class="fileUpload btn btn-primary">
   
    
 <input type="file" name="file" />
<button type="submit" name="btn-upload">upload</button></div>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view1.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label></label>
        <?php
	}
	?>
</div>
<div id="footer">
<label></label>
</div>
</div>
</body>
</html>