<?php 

// Création d'une fonction pour "var_dump" avec des styles bootstrap

function jevar_dump($mavar) { // la fonction avec son paramètre, une variable
    echo "<br><p class=\"bg-info text-white w-50\">...var_dump</p><pre class=\"alert alert-info w-50\">";
    var_dump($mavar); // à cette variable , on applique la fonction "var_dump()"
    echo "</pre>";
}


// FONCTION REQUETE PREPAREE

// FONCTION POUR VERIFIER QUE LE MEMBRE EST CONNECTE

// FONCTION POUR VERIFIER QUE LE MEMBRE EST ADMIN

?>