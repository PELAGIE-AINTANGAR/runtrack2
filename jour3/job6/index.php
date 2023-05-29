<!DOCTYPE html>
<html>
<head>
	<title>Variables PHP</title>
</head>
<body>
    <?php
        $str = "Les choses que l'on possède finissent par nous posséder.";
        
        for ($si = strlen($str) - 1; $si >= 0; $si--) {
            echo $str[$si];
            
        }
    ?>
</body>
</html>