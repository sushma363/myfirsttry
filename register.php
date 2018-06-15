<?php
$connection=mysql_connect("localhost","root","");
echo $connection;
if(!$connection){

	die("error".mysql_error());
}
$user=$_POST["usernamesignup"];
$email=$_POST["emailsignup"];
$pwd=$_POST["passwordsignup"];
$con_pass=$_POST["passwordsignup_confirm"];
if($pwd!=$con_pass)
{
	echo "Password do not match";
}
else{
	mysql_select_db("asian");
	$sql="INSERT INTO register
			(Username, Email, Password, Conpassword)
			VALUES
			('$user',
			'$email','$pwd', '$con_pass')";
$result = mysql_query($sql);	
if($result){
	header('Location: index.php');
} else{
	header('Location: index.php');
}
}
?>