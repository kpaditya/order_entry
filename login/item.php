<?php
//header("Location:print.php");
?>

<html>
<head>
<title>Item Entry Form</title>
<style type="text/css">
h3{font-family: Calibri; font-size: 22pt; font-style: normal; font-weight: bold; color:SlateBlue;
text-align: center; text-decoration: underline }
table{font-family: Calibri; color:white; font-size: 11pt; font-style: normal;
text-align:; background-color: SlateBlue; border-collapse: collapse; border: 2px solid navy}
table.inner{border: 0px}
<link rel="stylesheet" type="text/css" href="sow.css" media="all" />
</style>
</head>
<body>
<h3>ITEM ENTRY FORM:</h3>
<!--<form action="itemreg.php" method="POST">
<table align="center" cellpadding = "10">
<tr>
<td>Item Name</td>
<td>   <input type="text" name="iname" maxlength="20"/>
</td>
</tr>
<tr>
<td>Maximum No of Plants</td>
<td>   <input type="number" name="maxplant">
</td>
</tr>

<tr>
<td>Quantity per plant</td>
<td>   <input type="number" name="quantplant">
</td>
</tr>
<td>Stock limit</td>
<td>   <input type="number" name="stocklimit">
</td>
</tr>
<td>Category</td>
<td>   <input type="text" name="category" maxlength="30"/>
</td>
</tr>
<tr>
<td></td><td><br/><INPUT type="Submit" onClick="return validateForm()" value="Submit">
<input type="reset" onClick="return confirmreset()"></td>
</tr></table>-->

Select the required items
<form action="print.php" method="POST">
<input type="checkbox" name="check[]" value="item1"/>item1<br>
<input type="checkbox" name="check[]" value="item2"/>item2<br>
<input type="checkbox" name="check[]" value="item3"/>item3<br>
<input type="checkbox" name="check[]" value="item4"/>item4<br>
<input type ="submit" name="order" value="order"/> 
</form>
</form>
</html>
</body>
</form>
</body>
</html>