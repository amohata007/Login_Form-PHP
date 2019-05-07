<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form</title>
	<link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
	<img src="krishna.jpg"/>
		<form method="POST" action="login.php">
		<div class="form-input">
		<input type="text" name="uname" placeholder="User Name"/>	
		</div>
		<div class="form-input">
		<input type="password" name="password" placeholder="password"/><br><br>
		</div>
		<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
    </div>

</body>
</html>
<?php
session_destroy();
?>