<?php

// ceci est une fonction (function) car il y a un return
function direBonjour($prenom, $nom) {
    $monText = "Je souhaite dire bonjour à " . $prenom . " " . $nom . " !";

    return $monText;
}

// ceci est une méthode (void)
function faireUnCheck($envie) {
    if($envie) {
        echo "faire un check";
    } else {
        echo "j'ignore la personne";
    }
}


echo direBonjour("Hakan", "Orak");
echo "<br />";
faireUnCheck(false);

?>