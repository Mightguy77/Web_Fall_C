<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        echo $_FILES['myFile']['name']."<br>";
        echo $_FILES['myFile']['type']."<br>";
        echo $_FILES['myFile']['size']."<br>";
        echo $_FILES['myFile']['tmp_name']."<br>";
        echo $_FILES['myFile']['error']."<br>";
    }

?>


<!doctype html>
<html>
    <head>
        <title>Post Page</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="post" action="" enctype="multipart/form-data">
            <input type="file" name="myFile"><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>