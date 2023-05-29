<?php

if (isset($_POST['connexion'])) {
    $prenom = $_POST['prenom'];
    if (!isset($_COOKIE['liste_prenoms'])) {
        // Si le cookie n'existe pas encore, créer un cookie vide
        setcookie('liste_prenoms', '', time() + 60 * 60 * 24);
    }
    // ajoute le prenom dans mon cookie
    $liste_prenoms = $_COOKIE['liste_prenoms'] . $prenom . ',';
    // enregistre le cookie
    setcookie('liste_prenoms', $liste_prenoms, time() + 60 * 60 * 24);
    //affiche plus la page d'accueil,mais ecris sa
    echo 'Bonjour ' . $prenom . ' !';
    //et ajoute un boutton de deconnexion
    echo '<form method="POST"><input type="submit" name="deconnexion" value="Deconnexion"></form>';
    //lorsque l'utilisateur se deconnecte ,il affiche le formulaire de connexion
} elseif (isset($_POST['deconnexion'])) {
    setcookie('liste_prenoms', '', time() - 3600);
    echo '<form method="POST"><input type="text" name="prenom"><input type="submit" name="connexion" value="Connexion"></form>';
}else {
    // Si aucun formulaire n'est soumis, affiche le formulaire de connexion
    echo '<form method="POST"><input type="text" name="prenom"><input type="submit" name="connexion" value="Connexion"></form>';
}
 

?>