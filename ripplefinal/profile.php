<!DOCTYPE html><?php
session_start();


       include("connection.php");
       include("functions.php");

       $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Group 2- Interaction Design</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="homegridtemplate.css">
    </head>
    <body>
        <div class="grid-container">
        <header>
            <a href="home.php"><img id="logoimage" src="images/logo2.png" alt="Logo"></a>
            <a href="settings.html"><img id="settingimage" src="images/set.png" alt="setting"></a>
          
        </header>
        <div class="main">
            <br>
            <br>
            <p><strong><?php echo $user_data['user_name']; ?></strong>
            <br>
            <div class="profile-pic-div">
            <img src="images/stolen hamster.jpg" id="photo" alt="A syrian hamster faces the frame" style="width:150px;height:150px;border-radius:50%;"><br>
            <input type="file" id="file">
            <p>... you currently have no posts on your page</p><br>
            </div>
            <script src="app.js"></script>
        </div>
      
        
        <div class="navigation"> 
            
            <nav>
                <a href="home.php"><img id="navimage" src="images/house2.png" alt="home"></a>
               <a href="search.html"><img id="navimage" src="images/search.png" alt="search"></a>
               <a href="timeline.html"><img id="navimage" src="images/timeline.png" alt="timeline"></a>
                <a href="dm.html"><img id="navimage" src="images/message.png" alt="message"></a>
                <a class="active" href="profile.php"><img id="navimage" src="images/profile.png" alt="profile"></a>
            </nav></div>
        </div>
    </body>
</html>
