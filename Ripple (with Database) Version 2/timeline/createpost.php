<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Group 2- Interaction Design</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <link rel="stylesheet" href="../homegridtemplate.css">
        <link rel="stylesheet" href="../main.css">
        </head>
    <body>
        <div class="grid-container"> 
        <header>
                <a href="../home.php"><img id="logoimage" src="../images/logo2.png" alt="Logo"></a>
                <a href="../settings.html"><img id="settingimage" src="../images/set.png" alt="setting"></a>
        </header>
            <div class="main">
        <form action="" method="POST">
            <label>Topic:<br><input type="text" name="Name" height="10" width="50"><br></label><br>
            <label>Message:<br><textarea cols="45" rows="5" name="Comment"></textarea></label>
            <br>
           <button type="submit" value="Submit" class="Submit" name="Submit">Post It!</button>
            <br>
        </form><br>

        <a href="../timeline.html">(back to timeline)</a><br>

        <?php
 if (isset($_POST['Submit'])){
  $Name = $_POST['Name'];
  $Comment = $_POST['Comment'];

  #Get old comments
  $old = fopen("comments.html", "r+t");
  $old_comments = fread($old, 1024);

  #Delete everything, write down new and old comments
  $write = fopen("comments.html", "w+");
  $string = "<b>".$Name."</b><br>".$Comment."<br><br>".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }

 #Read comments
 $read = fopen("comments.html", "r+t");
 echo "<br><br><b>Posts</b><hr>".fread($read, 1024);
 fclose($read);
 

?>
        <div class="navigation"> 
            
            <nav>
                <a href="../home.php"><img id="navimage" src="../images/house2.png" alt="home"></a>
               <a href="../search.html"><img id="navimage" src="../images/search.png" alt="search"></a>
               <a class="active" href="../timeline.html"><img id="navimage" src="../images/timeline.png" alt="timeline"></a>
                <a href="../dm.html"><img id="navimage" src="../images/message.png" alt="message"></a>
                <a href="../profile.html"><img id="navimage" src="../images/profile.png" alt="profile"></a>
            </nav></div>
            </div>
        </div>
    </body>
    
</html>
