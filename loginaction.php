<?php
$connection=mysql_connect("localhost", "root","");
if (!$connection) {
	die("error".mysql_error());
}
echo "$connection";
function SignIn()
{
session_start();   //starting the session for user profile page
	mysql_select_db('asian') or DIE('Database name is not available!');;
  $GLOBALS['username'] = mysql_real_escape_string($_POST['username']);
  $userName=$GLOBALS['username'] ;
    //userName=mysql_real_escape_string($_POST['username']);
	$passWord=mysql_real_escape_string($_POST['password']);
	 $query = "SELECT * FROM register WHERE Email='$userName' AND  Password='$passWord'";
	 $res = mysql_query($query);
	 echo "$passWord";
     echo "<p>"+$userName+"</p>";
    $rows = mysql_num_rows($res);
    if ($rows==1) 
    {
        
       
        if($GLOBALS['username'] =="admin2016@gmail.com"){
                $_SESSION['Email'] = $userName;
                header("Location: main.php");
            }

            else{
                  $_SESSION['Email'] = $userName;
                header("Location: about.php");
            }

    }
    else 
    {
        echo "user name and password not found";
        // TODO - replace message with redirection to login page
         header("Location: index.php");
	}
}

if(isset($_POST['Login']))
{
	SignIn();
}

?>