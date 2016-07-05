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
$db_selected=mysql_select_db(DB_NAME,$link);
if(!$db_selected)
{
	die('Can\t use'.DB_NAME.':'.mysql_error());
}
$iname=$_POST['iname'];
$maxplant=$_POST['maxplant'];
$quantplany=$_POST['quantplant'];
$stocklimit=$_POST['stocklimit'];
$category=$_POST['category'];



$sql="insert into items (iname,maxplant,quantplant,stocklimit,category) values ('$iname','$maxplant','quantplant','stocklimit','category')";

if(!mysql_query($sql))
{
	echo "invalid";
}
else
{
echo "Your Item is Placed..";


}

mysql_close();
?>