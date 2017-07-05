<!DOCTYPE HTML>
<html>
<head>
        <title>File Sharing</title>
        <link rel = "stylesheet" href = "style.css">
</head>
<body>
<?php
    if(empty($_POST['user'])){
        echo '<h1>Oops!</h1>';   
    }
    $username = (string) trim($_POST['user']);
    $loginData = file('/srv/uploads/Users.txt');
    $test = false;
    for($i=0; $i<count($loginData); $i++){
        if(strcmp(trim($loginData[$i]),$username)==0){
            session_start();
            $_SESSION['user'] = $username;
            header("Location: fileget.php");
        }
        //checks to see if the stored usernames match entered username
        //starts the session and redirects them if good
    }
    echo htmlentities("Sorry, we couldn't find an account with that username. ");
    echo htmlentities("Please try again.");
//if a bad username have a return to home option.
?>

<br /><br />
<form name = "input" action = "filesharing.php" method = "POST">
        <input type="submit" value="Return to Login"/>
        </form>  
</body>
</html>