<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>41.php</title>
</head>
<body>
<?php
    $conn = new PDO("mysql:host=localhost;dbname=uczelnia","root");
    $conn->query('UPDATE studenci SET nazwisko="Malinowski" WHERE id = '3' ');

        
        

?>
</body>
</html>
