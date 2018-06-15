<?php
$connection=mysql_connect("localhost","root","");
echo $connection;
if(!$connection){

	die("error".mysql_error());
}
$name=$_POST["your_name"];
$email=$_POST["your_email"];
$message=$_POST["your_message"];
$ans=$_POST["user_answer"];
if($ans!=12)
{
	echo "Wrong Answer";
}
else{
	mysql_select_db("asian");
	$sql="INSERT INTO contact
			(Name, Email, Message, Answer)
			VALUES
			('$name',
			'$email','$message', '$ans')";
$result = mysql_query($sql);	
if($result){
	echo "successful";
	header("Location: Student's.php");
} 
else{
	echo "unsucessful";
}
}
?>