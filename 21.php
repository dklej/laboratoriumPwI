<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>21.php</title>
</head>
 
<body>
 
<?php 
    
    session_start();
    echo $_SESSION["sesja1"];

    
?>
    <br>
  <a href="22.php">Link do strony 22.php</a>
</body>
</html>