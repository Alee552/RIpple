<?php
session_start();

       include("connection.php");
       include("functions.php");

       if($_SERVER['REQUEST_METHOD'] == "POST")
       {
           //something was posted
           $user_name = $_POST['user_name'];
           $password = $_POST['password'];

           if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
           {
              //save to database
              $user_id = random_num(20);
              $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

              mysqli_query($con, $query);

              header("Location: index.php");
              die;

           }
           else
           {
                 echo "Please enter some valid information!";
           }
       }
?>


<!DOCTYPE html>
<!-- The "INDEX" page here functions as the login page-->
<html lang="en">
    <head>
        <title>Group 2- Interaction Design</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <link rel="stylesheet" href="homegridtemplate.css">
        <link rel="stylesheet" href="main.css">

    </head>
    <body>
        <div class="grid-container">
        <div class="main">
            <div class="logincontent"> <h2>Signup</h2>
            <form method="post">
                     Username
                     <input id="text" type="text" name="user_name"><br><br>
                     Password
                     <input id="text" type="password" name="password"><br><br>

                <button id="button" type="submit" value="Login">Signup</button>
                <a href="index.php">Click to Login</a>
            </form>
        </div>
    </div>
           </div>
       
    </body>
</html>