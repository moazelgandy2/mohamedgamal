<?php
$host = 'login-do-user-12560860-0.b.db.ondigitalocean.com'; //188.166.....
$user = 'doadmin';
$pass = 'AVNS_OXtkLSFhlOIvZi-wEig';
$db = 'login';

$conn=mysqli_connect($host,$user,$pass,$db);

if($conn)
{
	echo "Connection Successful";
}
else
{
	echo "Could not connect";
}
?>
