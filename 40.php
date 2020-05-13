<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>40.php</title>
</head>
<body>
<?php
    $sss = new PDO("mysql:host=localhost;dbname=uczelnia","root");
    $sql = "INSERT INTO studenci VALUES ('1', 'Janek', 'Kowalski', 'janeczek.99@gamil.com', '1')";
    $sss->exec($sql);
    $sss->exec('INSERT INTO studenci VALUES ('2', 'Adam', 'Tomaszewki', 'adatom.93@gamil.com', '2')');
    $sss->exec('INSERT INTO studenci VALUES ('3', 'Tomasz', 'Adamski', 'tomada.94@gamil.com', '2')');
    $sss->exec('INSERT INTO rok VALUES ('1', 'Instytut Informatyki i Matematyki', 'Informatyka', '1'');
    $sss->exec('INSERT INTO rok VALUES ('2', 'Instytut Informatyki i Matematyki', 'Informatyka i Ekonometria', '2'');
        
        

?>
</body>
</html>
// koda sam pisałem, nie udostępniałem nikomu od początku, rozwiązań szukałem po innych stronach i przewodnikach