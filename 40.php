<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>40.php</title>
</head>
<body>
<?php
    $conn = new PDO("mysql:host=localhost;dbname=uczelnia","root");
    $sql = "INSERT INTO studenci VALUES ('1', 'Janek', 'Kowalski', 'janeczek.99@gamil.com', '1')";
    $conn->query($sql);
    $conn->query('INSERT INTO studenci VALUES ('2', 'Adam', 'Tomaszewki', 'adatom.93@gamil.com', '2')');
    $conn->query('INSERT INTO studenci VALUES ('3', 'Tomasz', 'Adamski', 'tomada.94@gamil.com', '2')');
    $conn->query('INSERT INTO rok VALUES ('1', 'Instytut Informatyki i Matematyki', 'Informatyka', '1'');
    $conn->query('INSERT INTO rok VALUES ('2', 'Instytut Informatyki i Matematyki', 'Informatyka i Ekonometria', '2'');
        
        

?>
</body>
</html>
