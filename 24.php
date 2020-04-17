<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>24.php</title>
</head>
 
<body>
 
<?php 
    
    session_start();
    if (!isset($SESSION["sesja1"])){
        echo "BŁĄD";
    }

    
?>
 
</body>
</html>