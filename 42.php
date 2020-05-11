<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>42.php</title>
</head>
<body>
<?php
    $conn = new PDO("mysql:host=localhost;dbname=uczelnia","root");
    $zapytanie = "DELETE FROM 'studenci' WHERE 'id'='2'";
    $idzapytania = mysql_query($zapytanie);

        
        

?>
</body>
</html>
