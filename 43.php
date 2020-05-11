<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>42.php</title>
</head>
<body>
<?php
    $conn = new PDO("mysql:host=localhost;dbname=motoryzacja","root");
    $sql = "SELECT * FROM studenci";
    foreach($conn->query($sql)->fetchAll() as $row)
    {
        print $row["id"] ."\t";
        print $row["imie"] ."\t";
        print $row["nazwisko"] ."\t";
        print $row["email"] ."\t";
        print $row["id_rok_studiow"] ."\t";
        echo "<br>";
    }

?>
</body>
</html>
