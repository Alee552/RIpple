<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Group 2- Interaction Design</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <link rel="stylesheet" href="../homegridtemplate.css">
        <link rel="stylesheet" href="../main.css">
        <script src="../like.js"></script>

    </head>
    <body>
        <div class="grid-container">
        <header>
                <a href="../home.php"><img id="logoimage" src="../images/logo2.png" alt="Logo"></a>
                <a href="../settings.html"><img id="settingimage" src="../images/set.png" alt="setting"></a>
        </header>
            <div class="main">
        <fieldset>
            <p><strong>Anthony:</strong>:</strong></p>
            <p>Anyone want to be friends? I could probably use a few haha</p>
            <button onclick="imagefun11()" value="Change Image4"><img id="loveimage6" src="../images/love.png" alt="like"></button>
            <button onclick="imagefun12()" value="Change Icon"><img id="timeimage6" src="../images/repost.png" alt="like"></button>
        </fieldset>
        <form action="" method="POST">
        <label>Comment:<br><textarea cols="45" rows="5" name="Comment3"></textarea></label><br>
        <button type="submit" value="Submit" class="Submit" name="Submit">Post reply</button>
        </form><br><br>

        <a href="../timeline.html">(back to timeline)</a> 

        <?php
 if (isset($_POST['Submit'])){

  $Comment = $_POST['Comment3'];

  #Get old comments
  $old = fopen("comment3.html", "r+t");
  $old_comments = fread($old, 1024);

  #Delete everything, write down new and old comments
  $write = fopen("comment3.html", "w+");
  $string = "<br>".$Comment."<br><br>".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }

 #Read comments
 $read = fopen("comment3.html", "r+t");
 echo "<br><br><b>Comments</b><hr>".fread($read, 1024);
 fclose($read);
?>

<div class="navigation"> 
                <nav>
                    <a href="../home.php"><img id="navimage" src="../images/house2.png" alt="home"></a>
                   <a href="../search.html"><img id="navimage" src="../images/search.png" alt="search"></a>
                   <a class="active" href="../timeline.html"><img id="navimage" src="../images/timeline.png" alt="timeline"></a>
                    <a href="../dm.html"><img id="navimage" src="../images/message.png" alt="message"></a>
                    <a href="../profile.php"><img id="navimage" src="../images/profile.png" alt="profile"></a>
                </nav></div>
        </div>
        </div>
    </body>
</html>