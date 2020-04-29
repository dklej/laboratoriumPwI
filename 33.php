<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>33.php</title>
</head>
 
<body>
 
<?php 
    echo "to jest zawartosc 33\n";
    
    $file = 'plik33.txt';
    $current = file_get_contents($file);

    $current .= "to jest zawartosc 33\n";

    file_put_contents($file, $current);

    
?>
    </body>
</html>