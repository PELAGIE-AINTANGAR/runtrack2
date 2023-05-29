<?php
function calcul($operation, $nombre1, $nombre2){
    if ($operation == "+"){
        return $nombre1 + $nombre2;
    }
    if ($operation == "-"){
        return $nombre1 - $nombre2;
    }
    if ($operation == "*"){
        return $nombre1 * $nombre2;
    }
    if ($operation == "/"){
        return $nombre1 / $nombre2;
    }
    if ($operation == "%"){
        return $nombre1 % $nombre2;
    }
    if ($operation == "**"){
        return $nombre1 ** $nombre2;
    }
    else{
        return "Erreur";
    }
    
}
echo calcul("+", 5, 5);
?>