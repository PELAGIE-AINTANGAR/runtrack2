<?php

$nb_arguments = 0;
foreach ($_POST as $arg => $value) {
  $nb_arguments++;
}
echo "Le nombre d'arguments POST envoyé est : " . $nb_arguments;
?>
