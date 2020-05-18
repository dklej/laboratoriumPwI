<!DOCTYPE HTML> 
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>51.php</title>
</head>
<body>
<?php
    $host = "localhost"; 
    
    $imie = $_GET['imie']; 
    $nazwisko = $_GET['nazwisko']; 
    $email = $_GET['email']; 
    $rok = $_GET['rok']; 
       
    $dbh = new PDO("mysql:dbname= 'uczelnia'; host=$host", "root", "");
    $sql = $dbh->prepare('INSERT INTO studenci values("", :imie, :nazwisko, :email, :rok)');
    $sql -> bindValue(':imie', $imie);
    $sql -> bindValue(':nazwisko', $nazwisko);
    $sql -> bindValue(':email', $email);
    $sql -> bindValue(':rok', $rok);
    $sql->execute(); 
    
    
?>

</body>
    
</html>