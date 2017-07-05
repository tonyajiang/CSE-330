<!DOCTYPE html>
<html>
	<head>
		<title>Removing</title>
		<link rel = "stylesheet" href = "style.css">
	</head>
	<body>
		<h1>Removing...</h1>
<?php
session_start();

$username = $_SESSION['user'];
$files = (string) $_GET["filename"];

$full_path = sprintf("/srv/uploads/%s/%s",$username, $files);
if (!unlink($full_path)){
  echo htmlentities("Error deleting $files");
}else{
  echo htmlentities("Deleted $files");
}

?>
		<form name = "input" action = "fileget.php" method = "POST">
        <input type="submit" value="Return to files"/>
		</form>
	</body>
</html>