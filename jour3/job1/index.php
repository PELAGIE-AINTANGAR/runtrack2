<!DOCTYPE html>
<html>
<head>
	<title>Variables PHP</title>
</head>
<body>
    <?php
        $tableau = array(200, 204, 173, 98, 171, 404, 459);
        for ($i=0; $i < count($tableau); $i++) { 
            if ($tableau[$i] % 2 == 0) {
                echo $tableau[$i] . "est paire <br>";
            }
            else {
                echo $tableau[$i] . "est impaire <br>";
            }
        }
    ?>
</body>
</html>