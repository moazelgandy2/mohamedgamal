<?php
$host = 'login-do-user-12560860-0.b.db.ondigitalocean.com'; //188.166.....
$user = 'doadmin';
$pass = 'AVNS_OXtkLSFhlOIvZi-wEig';
$db = 'login';
$p = '25060';


$conn=mysqli_connect($host,$user,$pass,$p,$db);

if($conn)
{
	echo "Connection Successful";
}
else
{
	echo "Could not connect";
}
?>
