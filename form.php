<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<fieldset>
		<legend>Login</legend>
		<font align="center">
		<form method="post" action="login.php">
			Username<input type="text" name="uname">
			<br><br>
			Password<input type="password" name="pass">
			<br><br>
			<input type="submit" value="submit">
			<input type="reset" value="reset">
			
		</form>
	</font>
	<br><br>
	<center>
	</fieldset>
	<fieldset>
		<legend>Registration</legend>
	<form method="POST" action="connect.php">
		<label>Name<input type="text" placeholder="Enter your name" name="name1" size="30"></label>
		<br>
		<br>
		<label>Email<input type="email" placeholder="Enter your email" name="email" size="30"></label>
		<br>
		<br>
		<label>Password<input type="password" placeholder="Enter your password" name="pass1" size="10"></label>
		<br>
		<br>
		<label>Contact<input type="number" placeholder="Enter your contact" name="num" size="10"></label>
		<br>
		<br>
		<input type="submit" value="submit">
		<input type="reset" name="reset">
	</form>
	<center>
	<br><br>

</fieldset>
</body>
</html>