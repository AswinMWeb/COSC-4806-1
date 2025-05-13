<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Aswin</title>
  </head>
     <body>

    <h1>Assignment 1</h1>


       

        <p> Welcome , <?=$_SESSION['username']?> </p>
        
        <p>Today is <?=date('l, F j, Y')?></p>
     

    </body>

   <footer>
        <p><a href="/logout.php">Logout</a></p>
    </footer>
      
</html>