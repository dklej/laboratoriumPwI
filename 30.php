<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>30.php</title>
</head>
 
<body>
 
<?php 
    
    $file = 'plik.txt';
    $current = file_get_contents($file);

    $current .= "Hello World!\n";

    file_put_contents($file, $current);

    
?>
 
</body>
</html>