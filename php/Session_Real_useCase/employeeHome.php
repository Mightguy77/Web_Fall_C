<?php
// Start the session
session_start();
if($_SESSION['user']!="employee")
{
    header("Location: login.php");
    
}
echo "welcome ".$_SESSION['user'];

?>