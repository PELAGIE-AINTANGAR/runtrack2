<?php
session_start();

// Vérifier si la variable de session "nbvisites" existe
if (!isset($_SESSION['nbvisites'])) {
    // Si elle n'existe pas, l'initialiser à 0
    $_SESSION['nbvisites'] = 0;
}

// Vérifier si le bouton "reset" a été soumis
if (isset($_POST['reset'])) {
    // Réinitialiser le compteur en le mettant à 0
    $_SESSION['nbvisites'] = 0;
    header('Location: index.php');
    exit();
} 
    // Si le bouton "reset" n'a pas été soumis, incrémenter le compteur
$_SESSION['nbvisites']++;


// Afficher le contenu de la variable de session "nbvisites"
echo "Nombre de visites : " . $_SESSION['nbvisites'];
?>

<form method="POST">
    <input type="submit" name="reset" value="Reset">
</form>

