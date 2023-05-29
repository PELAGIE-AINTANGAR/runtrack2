<?php
function leetSpeak($str) {
    $conversion = array(
        'A' => '4',
        'B' => '8',
        'E' => '3',
        'G' => '6',
        'L' => '1',
        'S' => '5',
        'T' => '7',
        'a' => '4',
        'b' => '8',
        'e' => '3',
        'g' => '6',
        'l' => '1',
        's' => '5',
        't' => '7'
    );
    
    $leetStr = strtr($str, $conversion);
    
    return $leetStr;
}

// Exemple d'utilisation
$text = "leet speak";
$result = leetSpeak($text);
echo $result; // Affiche "1337 5p34k"
?>