<?php
$conn = mysqli_connect("localhost" , "root" , "");

mysqli_select_db($conn, "artistdatabase") or die(mysqli_error($conn));

if(!$conn)
	echo "error";
else
	echo "got connected";

?>