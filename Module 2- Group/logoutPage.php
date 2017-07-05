<!DOCTYPE HTML>
<html>
<head>
        <title>File Sharing</title>
        <link rel = "stylesheet" href = "style.css">
</head>
<body>
        <h1>File Sharing</h1>
        <p>You are not logged in. Please log in to view/upload files!</p>
        <br />
        <form name = "input" action = "login.php" method = "POST">
        Username: <input type = "text" name = "user"/>
        <input type="submit" value="Log In"/>
        </form>
        <br/>
        <p>New user? No problem!</p>
        <form name = "input" action = "newUser.php" method = "POST">
        <input type="submit" value="Create an Account"/>
        </form>
        </body>
</html>