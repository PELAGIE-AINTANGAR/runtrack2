<?php
  $nb_arguments = 0;
  foreach ($_GET as $arg => $value) {
    $nb_arguments++;
  }
  echo "Le nombre d'arguments GET envoyé est : " . $nb_arguments;
?>

