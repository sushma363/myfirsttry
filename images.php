<?php
ini_set('mysql_connect_timeout',300);
ini_set('default_socket_timeout',300);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
<br/>
<input type="file" name="image">
<br/>
<br/>
<input type="submit" name="submit" value="Upload">	
</form>
<?php
if (isset($_POST['submit'])) {
	if(getimagesize($_FILES['image']['tmp_name'])== FALSE){
		echo "please select an image";
	}
	else{
		$image=addslashes($_FILES['image']['tmp_name']);
		$name=addslashes($_FILES['image']['name']);
		 $filePath = "upload/" . $name;
		saveimage($name, $image);
	}	
}
function saveimage($name, $image)
{
	$connection=mysql_connect("localhost","root","");
	mysql_select_db("asian", $connection);
	$query="INSERT INTO images
	(Name, Image) VALUES ('$name','$image')";
	$result=mysql_query($query, $connection);
	if($result){
		echo "<br/> Image Uploaded.";
	}
	else{
		echo "<br/> Image not Uploaded.";
	}
}
?>
</body>
</html>