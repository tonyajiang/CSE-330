<!DOCTYPE HTML>
<html>
<head>
        <title>File Sharing</title>
	<link rel = "stylesheet" href = "style.css">
</head>
<body>
	<h1>Create an Account</h1>
	<p>Join the file sharing community!</p>
	<form name = "input" action = "addUser.php" method = "POST">
        Username* : <input type = "text" name = "newUser"/>
        <input type="submit" value="Create an account"/>
	</form>
<br/>
<br/>
<form name = "input" action = "filesharing.php" method = "POST">
        <input type="submit" value="Return to Login"/>
</form>  

</body>
</html>