<!DOCTYPE HTML>
<html>
<head>
        <title>Adding New User...</title>
	<link rel = "stylesheet" href = "style.css">
</head>
<body>
<?php
$userlog = "/srv/uploads/Users.txt";
// Open the file to get existing content
$current = file_get_contents($userlog);
// Append a new person to the file
$newUser = (string) $_POST['newUser'];
$current .= $newUser;
// Write the contents back to the file
if(!file_put_contents($userlog, $current."\n")){
	echo htmlentities("Failure to add new user. ");
}
else{
	echo htmlentities("Success! ");
}
if(!mkdir(sprintf("/srv/uploads/%s",$newUser), 0777, true)){
	echo htmlentities("Sorry.");
}
else{
	echo htmlentities("Go back and log in!");
}
?>
<form name = "input" action = "filesharing.php" method = "POST">
        <input type="submit" value="Return to Login"/>
</form>
</body>
</html>