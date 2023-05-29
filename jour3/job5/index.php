<!DOCTYPE html>
<html>
<head>
	<title>Variables PHP</title>
</head>
<body>
    <?php
        
        
        $str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
        
        
        $dic = array(
            "consonnes" => 0,
            "voyelles" => 0
        );
        
        // Parcours de la chaîne de caractères $str pour compter le nombre de consonnes et de voyelles
        for ($i = 0; $i < strlen($str); $i++) {
            $char = strtolower($str[$i]); // Passage en minuscule pour simplifier la comparaison
            if (in_array($char, array('a', 'e', 'i', 'o', 'u', 'y'))) {
                $dic["voyelles"]++;
            } elseif (ctype_alpha($char)) { // Vérification que le caractère est une lettre
                $dic["consonnes"]++;
            }
        }
        
        // Affichage des résultats dans un tableau HTML
        echo '<table>';
        echo '<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>';
        echo '<tbody><tr><td>' . $dic["voyelles"] . '</td><td>' . $dic["consonnes"] . '</td></tr></tbody>';
        echo '</table>';
    
        
        
    ?>
</body>
</html>