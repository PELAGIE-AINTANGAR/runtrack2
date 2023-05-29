<?php
session_start();
if (!isset($_SESSION['liste'])) {
    $_SESSION['liste'] = array();
}
if (isset ($_POST['envoyer'])) {
    $prenom = $_POST['prenom'];
    array_push($_SESSION['liste'], $prenom);

}
if (isset ($_POST['reset'])) {
    $_SESSION['liste'] = array();
    header('Location: index.php');
    exit();
}
foreach ($_SESSION['liste'] as $prenom) {
    echo $prenom . '<br>';
}
?>