<?php

    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        if(isset($_GET['username']))
        {
            echo $_GET['username']."<br>";
        }

        if(isset($_GET['email']))
        {
            echo $_GET['email'];
        }
        
        
    }

?>


<!doctype html>
<html>
    <head>
        <title>Post Page</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="get" action="">
            <input type="text" name="username" placeholder="Enter your username"><br>
            <input type="text" name="email" placeholder="Enter your email"><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>