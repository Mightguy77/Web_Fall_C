<?php
     if(isset($_COOKIE['address']))
     {

     }

     else
     {
         $form='<form method="post" action="">
         <label for="address">Enter your address:</label>
            <input type="text" id="address" name="address" required>
            <input type="submit" value="Submit">
         </form>';

         $add=$_POST['address'] ?? '';
         if($add)
         {
             setcookie('address', $add, time() + (86400 * 30), "/"); // 86400 = 1 day
             
         }
         

       

     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
</head>
<body>
<h1>Address Asking System</h1>
<?php echo $form ?? ''; ?>
<span><?php echo $_COOKIE['address'] ?? 'No address set.'; ?></span>
</body>
</html>