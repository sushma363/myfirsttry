<?php
$connection=mysql_connect("localhost","root","");

if(!$connection){

	die("error".mysql_error());
}
$content = $_POST['editor'];
mysql_select_db("asian");

$insertSQL="INSERT INTO message (Message) VALUES ('$content')";

if (!mysql_query($insertSQL)) echo "Insert failed: $insertSQL <br />".
mysql_error()."<br /><br />";

header("Location: tinymce.php");  
?>
