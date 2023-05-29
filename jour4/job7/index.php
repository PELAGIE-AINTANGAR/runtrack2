<?php
    if(isset($_POST['largeur']) && isset($_POST['hauteur'])){
        $largeur = intval($_POST['largeur']);
        $hauteur = intval($_POST['hauteur']);

        echo '<pre>';
        // Afficher la première ligne de la toiture
        echo str_repeat(' ', $largeur - 1) . '*' . "\n";
        // Afficher les lignes suivantes de la toiture
        for($i = 1; $i < $hauteur; $i++){
            echo str_repeat(' ', $largeur - $i - 1) . '/' . str_repeat(' ', $i * 2 - 1) . '\\' . "\n";
        }
        // Afficher les murs et le sol
        echo '|' . str_repeat(' ', $largeur - 2) . '|' . "\n";
        for($i = 1; $i < $hauteur; $i++){
            echo '|'.str_repeat(' ', $largeur-2)."|\n";
        }
        echo "|".str_repeat('_', $largeur-2)."|\n";
        echo '</pre>';
    }
?>
