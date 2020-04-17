<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>25.php</title>
</head>
 
<body>
 
<?php 
    
    if(!isset($_COOKIE['ciasto1'])) {
        echo "Nie ma ciasteczek";
    }
    else{
         echo $_COOKIE["ciasto1"];
    }

    
?>
 
</body>
</html>
