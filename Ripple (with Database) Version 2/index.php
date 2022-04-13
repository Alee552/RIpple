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
       //read from database
       $query = "select * from users where user_name = '$user_name' limit 1"; 

       $result = mysqli_query($con, $query);


       if($result)
       {
        if($result &&  mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['password'] === $password)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: home.php");
                die;
            }
        }
       }
       echo "Wrong username or password!";
    }
    else
    {
          echo "Wrong username or password!";
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
            <div class="logincontent"> <h2>Login</h2>
            <form method="post">
                     Username
                     <input id="text" type="text" name="user_name"><br><br>
                     Password
                     <input id="text" type="password" name="password"><br><br>

                <button id="button" type="submit" value="Login">Login</button>
                <a href="signup.php">Create an Account</a>
            </form>
        </div>
    </div>
           </div>
       
    </body>
</html>