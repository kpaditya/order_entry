<?php
?>
<html>
<head>
<title>Customer Registration Form</title>
<style type="text/css">
h3{font-family: Calibri; font-size: 22pt; font-style: normal; font-weight: bold; color:SlateBlue;
text-align: center; text-decoration: underline }
table{font-family: Calibri; color:white; font-size: 11pt; font-style: normal;
text-align:; background-color: SlateBlue; border-collapse: collapse; border: 2px solid navy}
table.inner{border: 0px}
<link rel="stylesheet" type="text/css" href="sow.css" media="all" />
</style>
</style>
</head>
<body>
<h3>CUSTOMER REGISTRATION FORM:</h3>
<form name="customer" 
.method="post" action="custreg.php">
<table align="center" cellpadding = "10">
<tr>
<td>NAME</td>
<td>   <input type="text" name="sname" value="">
</td>
</tr>
<tr>
<td>UserName</td>
<td>   <input type="text" name="susername" value="">
(max 10 characters a-z,A-Z And 0-9)
</td>
</tr>

<tr>
<td>Password</td>
<td>   <input type="password" name="spassword" value="">
(max 10 characters combination of A-Z,a-z,0-9 and Symbols)
</td>
</tr>
<td>Permanent Address:</td>
<td>   <input type="text" name="permaddr" value="">
</td>
</tr>
<td>Ship-to-Address:</td>
<td>   <input type="text" name="shipaddr" value="">
</td>
</tr>
<tr>
<td>Balance Amount:</td>
<td>Rs:<input type="number" name="balamnt" value="">
</td>
</tr>
<tr>
<td>Credit Amount:</td>
<td>Rs:<input type="number" name="credit" value="">
</td>
</tr>
<tr>
<td>Limit:</td>
<td>Rs:<input type="number" name="limit" value="">
</td>
</tr>
<tr>
<td></td><td><br/><input type="submit" onClick="return validateForm()" value="Submit">
<input type="reset" value="Reset"></td>
</tr>
</table>
</form>
</body>
</html>