<!DOCTYPE html><?php
session_start();


       include("connection.php");
       include("functions.php");

       $user_data = check_login($con);
?>
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
    
        <div class="header"></div>
        <div class="subheader"></div>
        <div class="main"><p><strong>Welcome, <?php echo $user_data['user_name']; ?></strong>
        </p><p><em>"Believe you can and you're halfway there"</em>  -Theodore Roosevelt</p><br>
        <p>Greetings! Welcome to Ripple, our social platform that is devoted to connecting you with other peers who struggle with their mental health on a day to day basis.
            We are here to help you and give you the opportunity to share your experience with other's who would understand these predicaments far better than the occassional doctor or psychiatrist.
            <br><br>
            <em>Disclaimor: This platform should never be used as a primary source for treatment or habilitation. If you are experiencing any negative or suicidal thoughts, please contact your local phycisian or psychiatrist.
                Your life matters. </em></div>
        </p>
        <div class="navigation"> 
            
            <nav>
                <a class="active" href="home.php"><img id="navimage" src="images/house2.png" alt="home"></a>
               <a href="search.html"><img id="navimage" src="images/search.png" alt="search"></a>
               <a href="timeline.html"><img id="navimage" src="images/timeline.png" alt="timeline"></a>
                <a href="dm.html"><img id="navimage" src="images/message.png" alt="message"></a>
                <a href="profile.html"><img id="navimage" src="images/profile.png" alt="profile"></a>
            </nav></div>
    </div>
    </body>
</html>