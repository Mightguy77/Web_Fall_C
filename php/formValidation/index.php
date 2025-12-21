<?php

    $name_Err;
    $email_Err;
    $age_Err;
    $gender_Err;
    $food_Err;
    $country_Err;
    $file_Err;
    $hasErr=false;

    $name;
    $email;
    $age;
    $gender;
    $food=[];
    $country;
    $file;
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST['username']))
        {   
            $name_Err="Username is required";
            $hasErr=true;
        }
        else
        {
            if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST['username']))
            {
                $name_Err="Only letters and white space allowed";
                $hasErr=true;
            }
        }
    
        if(empty($_POST['email']))
        {
            $email_Err="Email is required";
            $hasErr=true;
        }

        else{
            if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
            {
                $email_Err="Invalid email format";
                $hasErr=true;
            }
        }

    
        if(empty($_POST['age']))
        {
            $age_Err="Age is required";
            $hasErr=true;
        }
        else
        {
            if(!is_numeric($_POST['age']) || $_POST['age']<1 || $_POST['age']>120)
            {
                $age_Err="Invalid age";
                $hasErr=true;
            }
        }

        if(empty($_POST['gender']))
        {
            $gender_Err="Gender is required";
            $hasErr=true;
        }
        if(empty($_POST['food']))
        {
            $food_Err="At least one food must be selected";
            $hasErr=true;
        }
        if(empty($_POST['country']))
        {
            $country_Err="Country is required";
            $hasErr=true;
        }

        if($_FILES['myFile']['error']==4)
        {
            $file_Err="File is required";
            $hasErr=true;
        }

        else
        {
            $allowedTypes=['image/jpeg','image/png','application/pdf'];
            if(!in_array($_FILES['myFile']['type'],$allowedTypes))
            {
                $file_Err="Only JPG, PNG, and PDF files are allowed";
                $hasErr=true;
            }
            $maxSize=2*1024*1024;
            if($_FILES['myFile']['size']>$maxSize)
            {
                $file_Err="File size must be less than 2MB";
                $hasErr=true;
            }   
        }

        if(!$hasErr)
        {
            $name=$_POST['username'];
            $email=$_POST['email'];
            $age=$_POST['age'];
            $gender=$_POST['gender'];
            $food=$_POST['food'];
            $country=$_POST['country'];
            echo "Name: ".$name."<br>";
            echo "Email: ".$email."<br>";
            echo "Age: ".$age."<br>";
            echo "Gender: ".$gender."<br>";
            echo "Food: ".implode(", ",$food)."<br>";
            echo "Country: ".$country."<br>";
            $dir="uploads/";
            if(!is_dir($dir)){
                mkdir($dir);
            }
            $filePath=$dir.basename($_FILES['myFile']['name']);
            if(move_uploaded_file($_FILES['myFile']['tmp_name'],$filePath))
            {
                echo "File uploaded successfully: ".$filePath."<br>";
            }
            else
            {
                echo "Error uploading file.<br>";
            }       
        }
    }


        

        


?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <form method="post" action="" enctype="multipart/form-data">
        USERNAME: <input type="text"  name="username">
        <br>
        <span style="color:red;"><?php if(isset($name_Err)){echo $name_Err;}?></span>
        <br>
        EMAIL: <input type="text" name="email">
        <br>
        <span style="color:red;"><?php if(isset($email_Err)){echo $email_Err;}?></span>
        <br>
        Age: <input type="text" name="age">
        <br>
        <span style="color:red;"><?php if(isset($age_Err)){echo $age_Err;}?></span>
        <br>
        Gender:
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <br>
        <span style="color:red;"><?php if(isset($gender_Err)){echo $gender_Err;}?></span>
        <br>
        Fav. Food:
        <input type="checkbox" name="food[]" value="pizza"> Pizza
        <input type="checkbox" name="food[]" value="burger"> Burger
        <input type="checkbox" name="food[]" value="pasta"> Pasta
        <br>
        <span style="color:red;"><?php if(isset($food_Err)){echo $food_Err;}?></span>
        <br>
        Country:
        <select name="country"> 
            <option value="">Select A Country</option>
            <option value="usa">USA</option>
            <option value="uk">UK</option>
            <option value="canada">Canada</option>
            <option value="australia">Australia</option>
        </select>
        <br>
        <span style="color:red;"><?php if(isset($country_Err)){echo $country_Err;}?></span>
        <br>
        file: <input type="file" name="myFile"><br>
        <span style="color:red;"><?php if(isset($file_Err)){echo $file_Err;}?></span><br>
        <input type="submit" value="Submit">
        </form>
</body>
</html>