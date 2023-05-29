<!DOCTYPE html>
<html>
<head>
	<title>Variables PHP</title>
</head>
<body>
    <?php
    $number = 0;
    while ($number <= 1337) {
        if ($number == 26 || $number == 37 || $number == 88 || $number == 1111 || $number == 3233){
            $number++;
            continue;
        }
        echo "$number<br>";
        $number++;
    }

    ?>
</body>
</html>