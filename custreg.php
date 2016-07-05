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
$sname=$_POST['sname'];
$susername=$_POST['susername'];
$spassword=$_POST['spassword'];
$permaddr=$_POST['permaddr'];
$shipaddr=$_POST['shipaddr'];
$balamnt=$_POST['balamnt'];
$credit=$_POST['credit'];
$limit=$_POST['limit'];
//$sql="insert into customers(sname,susername,spassword,permaddr,shipaddr,balamnt,credit,limit) values('$sname','$susername','$spassword','$permaddr','$shipaddr','$balamnt','$credit','$limit')";
$sql = "insert into customers values('$sname','$susername','$spassword','$permaddr','$shipaddr','$balamnt','$credit','$limit')";
$sql = "insert into customerlogin values('$susername','$spassword')";
/*echo $sname;
echo $susername;
echo $spassword;
echo $permaddr;
echo $shipaddr;
echo $balamnt;
echo $credit;
echo $limit;*/
if(!mysql_query($sql))
{
	echo "invalid";
}
else
{
echo "registration is completed";
}

mysql_close();
?>
