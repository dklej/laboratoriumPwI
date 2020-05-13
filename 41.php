<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>41.php</title>
</head>
<body>
<?php
    $sss = new PDO("mysql:host=localhost;dbname=uczelnia","root");
    $sss->exec('UPDATE studenci SET nazwisko="Malinowski" WHERE id = '3' ');

        
        

?>
</body>
</html>
// koda sam pisałem, nie udostępniałem nikomu od początku, rozwiązań szukałem po innych stronach i przewodnikach