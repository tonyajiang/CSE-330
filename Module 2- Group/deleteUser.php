<!DOCTYPE html>
<html>
<head>
        <title>Delete User</title>
	<link rel = "stylesheet" href = "style.css">
</head>
<body>
	<h1>Deleting User...</h1>
<?php
session_start();

$username = $_SESSION['user'];


$full_path = sprintf("/srv/uploads/%s",$username);
if (!rmdir($full_path)){
  echo htmlentities("Error deleting account");
}else{
  echo htmlentities("Successfully removed account");
}

$DELETE = $username; 

$data = file("/srv/uploads/Users.txt"); 

$out = array(); 

foreach($data as $line) { 
    if(trim($line) != $DELETE) { 
        $out[] = $line; 
    } 
} 

$fp = fopen("/srv/uploads/Users.txt", "w+"); 
flock($fp, LOCK_EX); 
foreach($out as $line) { 
    fwrite($fp, $line . "\r\n"); 
} 
flock($fp, LOCK_UN); 
fclose($fp);
//Code from: http://board.phpbuilder.com/showthread.php?10275400-deleting-specific-line-in-a-txt-file
?>
<form name = "input" action = "filesharing.php" method = "POST">
        <input type="submit" value="Return to Homepage"/>
</form>
</body>
</html>