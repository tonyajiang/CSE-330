<?php
session_start();
if(!isset($_SESSION['user'])){ //if login in session is not set
    header("Location: logoutPage.php");
}
//checks to see if there is a session, logs them out if not
 
// Get the filename and make sure it is valid
// appears that you can't upload a file with spaces in its name
$filename = basename($_FILES['uploadedfile']['name']);
if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
	echo "Invalid filename";
	exit;
}
 
// Get the username and make sure it is valid
$username = $_SESSION['user'];
if( !preg_match('/^[\w_\-]+$/', $username) ){
	echo "Invalid username";
	exit;
}

$full_path = sprintf("/srv/uploads/%s/%s",$username, $filename);
$files_path = sprintf("/srv/uploads/%s",$username);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Uploading</title>
		<link rel = "stylesheet" href = "style.css">
	</head>
	<body>
		<h1>Uploading...</h1>
<?php
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $full_path) ){
		echo htmlentities("file upload success");
	}
	else{
		echo htmlentities("file upload failure");
	}
?>
		<form name = "input" action = "fileget.php" method = "POST">
        <input type="submit" value="Return to files"/>
		</form>
	</body>
</html>
