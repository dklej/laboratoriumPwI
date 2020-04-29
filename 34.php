<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>34.php</title>
</head>
 
<body>
 
<?php
    

    $query = "SELECT * FROM Motoryzacja WHERE id=1";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    echo($row);
    $query = "SELECT * FROM Motoryzacja WHERE id=3";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    echo($row);
        
?>
    </body>
</html>