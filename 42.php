<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>42.php</title>
</head>
<body>
<?php
    $sss = new PDO("mysql:host=localhost;dbname=uczelnia","root");
    $zapytanie = "DELETE FROM 'studenci' WHERE 'id'='2'";
    $sss->exec($zapytanie);

        
        

?>
</body>
</html>
// koda sam pisałem, nie udostępniałem nikomu od początku, rozwiązań szukałem po innych stronach i przewodnikach