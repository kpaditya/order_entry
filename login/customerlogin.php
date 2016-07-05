<?php

define('DB_NAME','order_entry');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$link)
{
	die('Could not Connect:'.mysql_error());
}
$db_selected = mysql_select_db(DB_NAME,$link);
if(!$db_selected)
{
	die('Can\t use'.DB_NAME.':'.mysql_error());
}
$username=$_POST['username'];
$password=$_POST['password'];
$sql="insert into customerlogin(username,password) values('$username','$password')";
if(!mysql_query($sql))
{
	echo "invalid ";
}
else
{
echo "You are Successfully Logged in!!!!!!!";
?>
<form action="item.php" method="POST">
	<input type="submit" value="Enter Items">
</form>
<?php
}
mysql_close();
?>