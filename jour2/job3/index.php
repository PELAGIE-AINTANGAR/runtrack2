<!DOCTYPE html>
<html>
<head>
	<title>Variables PHP</title>
</head>
<body>
    <?php

    
    for ($number = 0; $number <= 1337; $number++){
        if ($number <= 20){
            echo "<em>$number</em><br>";
        }
    
        elseif ($number == 42){
           
            echo "LaPlateforme_ <br>";
    
        }
        elseif ($number >= 25 && $number <= 50){
            echo "<u>$number</u><br>";
        
        }
        else{ 
            echo "$number<br>";
        }
    }
    ?>
</body>
</html>