<?php
// Example of setting a cookie in PHP
    $name="userName";
    $value="JohnDoe";
    $expire=time()+(3600*24*30); // Cookie expires in 30 days
    $path="/"; // Available within the entire domain
    $domain="example.com"; // Available on example.com
    $secure=false; // Set to true if using HTTPS
    $httponly=true; // Accessible only through the HTTP protocol
    setcookie($name, $value, $expire);

?>