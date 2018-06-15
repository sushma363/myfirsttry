<?php
$connection=mysql_connect("localhost","root","");
echo $connection;
if(!$connection){

	die("error".mysql_error());
}
function Upload()
{
session_start();   //starting the session for user profile page
	mysql_select_db('asian') or DIE('Database name is not available!');;
	$userName=$_POST['path'];
	$sql="INSERT INTO image
			(Pathimg)
			VALUES
			('$userName')";
$result = mysql_query($sql);	
if($result){
	header('Location: upload.php');
} else{
	header('Location: upload.php');
}
}
if(isset($_POST['upload']))
{
	Upload();
}
?>