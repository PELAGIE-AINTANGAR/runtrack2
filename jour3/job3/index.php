<!DOCTYPE html>
<html>
<head>
	<title>Variables PHP</title>
</head>
<body>
    <?php
        $str = "I'm sorry Dave I'm afraid I can't do that";
        for ($si=0; $si < strlen($str); $si++) { 
            if ($str[$si] == "a" || $str[$si] == "e" || $str[$si] == "i" || $str[$si] == "o" || $str[$si] == "u" || $str[$si] == "y" || $str[$si] == "I") {
                echo $str[$si];
            }
        }
    ?>
</body>
</html>