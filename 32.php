<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>32.php</title>
</head>
 
<body>
 
<?php 
    echo "to jest zawartosc 32\n";
    
    $file = file_get_contents('./plik33.txt', true);
    echo $file;
    

    
?>
    </body>
</html>