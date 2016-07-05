
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <script>
    function validateForm() {
    	var x = document.forms["login"]["username"].value;
    	var y = document.forms["login"]["password"].value;
    	if (x == null || x == "") {
    		alert("Field cannot be empty");
    		return false;
    	}
    	if (y == null || x == "") {
    		alert("Field cannot be empty");
    		return false;
    	}
    }

    </script>
    <title>CUSTOMER LOGIN</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="wrapper">
	<div class="container">
		<h1>Customer Login:</h1>
		
		<form name="login" method="POST" action="customerlogin.php" onsubmit="return validateForm()">
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<input type="submit" action="item.php" value="Sign-In">
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
    <script src="js/index.js"></script>

    
    
    
  </body>
</html>
