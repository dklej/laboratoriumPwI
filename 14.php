<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>12.php</title>
</head>
 
<body>
 
<?php 
    
    
    $p1 = $_POST['pole1'];
    $p2 = $_POST['pole2'];   
    if($p1 && $p2 != null){
    
    }
    else{
        echo "Nie wpisano wszystkich danych!";
    }
    echo "Dodawanie: ";
    echo $p1 + $p2, "\n";
    echo "Odejmowanie: ";
    echo $p1 - $p2, "\n";
    echo "Mnożenie: ";
    echo $p1 * $p2, "\n";
    echo "Dzielenie: ";
    if($p2 != 0){
    echo $p1 / $p2, "\n";
    }
    else { 
        echo "Nie można dzielić przez 0!";
    }
?>
 
</body>
</html>