<!DOCTYPE html>
<html>
<head>
	<title>Upload files</title>
	<link rel = "stylesheet" href = "style.css">
</head>
<body>
	<h1>Upload</h1>
	<form action = "upload.php" method = "post" enctype = "multipart/form-data">
        <p>
		<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
		<label for="uploadfile_input">Choose a file to upload:</label> <input name="uploadedfile" type="file" id="uploadfile_input" />
	</p>
	<p>
		<input type="submit" value="Upload File" />
	</p>
	</form>
	
<?php
session_start();

if(!isset($_SESSION['user'])){ //if login in session is not set
    header("Location: logoutPage.php");
}	
    $username = $_SESSION['user'];
	$files_path = sprintf("/srv/uploads/%s",$username);
	$files = scandir($files_path);
	
foreach($files as $file){
	$_SESSION[$file] = $file;
	echo'<a href="view.php?filename=' . $file . '">'.$file.'</a>';
	echo'<a href="remove.php?filename=' . $file . '"> remove</a>';
	echo "<br/>";
}

// this is code from http://stackoverflow.com/questions/5294266/how-to-write-a-php-coding-to-list-out-all-files-and-directories-as-links-to-them
// it links files to its file path
	
	echo "<br/>";   
	echo ("You are logged in as: ");
	      echo $username;
	      
?>
<br/>
<br/>

	<form name = "input" action = "logout.php" method = "POST">
        <input type="submit" value="Log Out"/>
    </form>
	<br/>
	<br/>
	<form name = "input" action = "deleteUser.php" method = "POST" >
        <input type="submit" value="Delete Account"/>
    </form>
</body>
</html>