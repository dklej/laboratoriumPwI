<!DOCTYPE HTML> 
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>52.php</title>
</head>
<body>
    <form action="53.php" method="get">
	<select name="nazwa">
    
    <?php

        $dbh = new PDO("mysql:dbname= 'uczelnia'; host='localhost'", "root", "");
        $sql = $dbh->query('SELECT id, imie, nazwisko FROM studenci;');


        while ($row = $sql->fetch()) {
            print "<option value='" .$row["id"]. "'>" .$row["imie"]. " " .$row["nazwisko"] . "</option>";

        }

    ?>
        ID :
        <input type="text" name="id"/> <br>
    <input type="submit" value="usun"/>
</select>
</form>
</body>
    
</html>
