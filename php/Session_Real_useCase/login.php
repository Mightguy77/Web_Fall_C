<?php
// Start the session
session_start();
// If the user is already logged in, redirect to the dashboard
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Dummy authentication for demonstration
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // In a real application, you would verify the username and password
        if($username === 'admin' && $password === 'password') {
            $_SESSION['user'] = "admin";
            header('Location: adminHome.php');
            
        } else {
            if($username === 'employee' && $password === 'password') {
                $_SESSION['user'] = "employee";
                header('Location: employeeHome.php');
                
            } else {
                echo "Invalid credentials!";
            }
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <h2>Login Page</h2>
    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    </body>
</html>