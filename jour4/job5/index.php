<?php 
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == 'john' && $password == 'Rambo') {
        echo "C'est pas ma guerre";
    } 
    else {
        echo "Votre pire cauchemar";
    }
?> 
       
