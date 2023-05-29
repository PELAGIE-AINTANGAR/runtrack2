<!DOCTYPE html>
<html>
<head>
	<title>Variables PHP</title>
</head>
<body>
    <?php
        for ($nombre = 2; $nombre <= 100; $nombre++)
        {
            $nombrePremier = true;
            for ($i = 2; $i < $nombre; $i++)
            {
                if ($nombre % $i == 0)
                {
                    $nombrePremier = false;
                }
            }
            if ($nombrePremier)
            {
                echo "$nombre <br>";
            }
        }
    ?>
</body>
</html>