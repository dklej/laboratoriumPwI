<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>25.php</title>
</head>
 
<body>
 
<?php 
    $ciasto = "ciasto1";
    $wartosc = "Kot ma Alę";
    setcookie($ciasto, $wartosc, time() + 90);
    

    
?>
    
    <br>
    <a href="26.php"> Link do 26.php</a>
 
</body>
</html>