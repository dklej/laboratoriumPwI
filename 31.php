<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>31.php</title>
</head>
 
<body>
 
<?php 
    

    $file = file_get_contents('./plik.txt', true);
    echo $file;
    
?>
 
</body>
</html>