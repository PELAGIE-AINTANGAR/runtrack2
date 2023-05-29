<?php

if (!isset($_COOKIE['nbvisites'])) {
    
    setcookie('nbvisites', 0, time() + 60 * 60 * 24);
}
 
if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() + 60 * 60 * 24);
    header('Location: index.php');
    exit();
}
$nbvisites = $_COOKIE['nbvisites'] + 1;
setcookie('nbvisites', $nbvisites, time() + 60 * 60 * 24);

echo "Nombre de visites : " . $_COOKIE['nbvisites'];
?>
<form method="POST">
    <input type="submit" name="reset" value="Reset">
</form>