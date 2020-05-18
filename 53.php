<!DOCTYPE HTML> 
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>52.php</title>
</head>
<body>
    
        <?php
        $id = $_GET['id'];

        $sth = $dbh->prepare('DELETE FROM uczelnia WHERE id=$id');
        
        $sth->execute();


    ?>
    
    
</body>
    
</html>