<?php
            session_start();
            session_destroy();
            header("Location: logoutPage.php");
            //end session to log out user
?>