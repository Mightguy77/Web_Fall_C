<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo $_POST['username']."<br>";
        echo $_POST['email'];
    }

?>


<!doctype html>
<html>
    <head>
        <title>Post Page</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="post" action="">
            <input type="text" name="username" placeholder="Enter your username"><br>
            <input type="text" name="email" placeholder="Enter your email"><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>