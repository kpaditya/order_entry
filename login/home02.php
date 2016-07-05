<?php
include "newconnection.php";
   $sid = $_GET['iname'];
   $sql = "SELECT * from items where iname = '$sid'";
   $retval1 = mysqli_query($conn,$sql);
   while($row = mysqli_fetch_array($retval1)){
 
   echo 'Name :' . $row['maxplant'];
   echo '</br>';
   echo 'Address :' . $row['quantplant'];
   echo '</br>';
   echo 'Phone :' . $row['stocklimit'];
   echo '</br>';
   
   }
   echo 'Fetched data successfully\n';
   
   mysqli_close($conn);
?>