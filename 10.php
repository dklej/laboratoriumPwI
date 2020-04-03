<html>
<head>
    <title>10.php</title>
    </head>
    <body>
        
        <?php
        
        for($i=1; $i<=15; $i++){
            echo $i, "\n";
        }
        $ar = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
        foreach($ar as $value){
            echo $value, "\n";
        }
        $a = 1;
        while($a<=15){
            echo $a, "\n";
            $a++;
        }
        
        
        ?>
        
        
    </body>
</html>