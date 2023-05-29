<!DOCTYPE html>
<html>
<head>
	<title>Variables PHP</title>
</head>
<body>
    <?php
        $str = "Certaines choses changent, et d'autres ne changeront jamais.";
        $length = strlen($str);

        // récupérer le dernier caractère et l'enlever de la chaîne
        $last_char = $str[$length-1];
        $str = substr($str, 0, $length-1);

        // remplacer chaque caractère par le suivant
        $new_str = "";
        for ($i = 0; $i < $length-2; $i++) {
            $new_str .= $str[$i+1];
        }
        $new_str .= $str[0];

        // ajouter un point et le dernier caractère
        $new_str .= ".";
        $new_str .= $last_char;

        // ajouter le C à la fin
        $new_str .= "C";

        echo $new_str;
    ?>




</body>
</html>