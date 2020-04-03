<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>12.php</title>
</head>
 
<body>
 
<?php 
    
    
    $p1 = $_GET['pole1'];
    $p2 = $_GET['pole2'];   
    if($p1 && $p2 != null){
    echo $p1, "\n";
    echo $p2;
    }
    else{
        echo "Nie wpisano wszystkich danych!";
    }
?>
 
</body>
</html>