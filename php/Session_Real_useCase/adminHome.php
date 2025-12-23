<?php
// Start the session
session_start();

if($_SESSION['user']!="admin")
{
    header("Location: login.php");
    
}
echo "welcome".$_SESSION['user'];
?>