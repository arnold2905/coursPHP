<?php 

// Création d'une fonction pour "var_dump" avec des styles bootstrap

function jevar_dump($mavar) { // la fonction avec son paramètre, une variable
    echo "<br><p class=\"bg-info text-white w-50\">...var_dump</p><pre class=\"alert alert-info w-50\">";
    var_dump($mavar); // à cette variable , on applique la fonction "var_dump()"
    echo "</pre>";
}


//2- FONCTION POUR EXECUTER LES REQUETES PREPAREES AVEC FOREACH (Une requête préparée dans une fonction)
function executeRequete( $requete, $parametres = array()) {// utile pour toutes les requêtes 1 la requête 2
    foreach ($parametres as $indice => $valeur) { // boucle foreach
        $parametres[$indice] = htmlspecialchars($valeur); // pour éviter les injections sql
        global $pdoMAB; // "global" nous permet d'accéder à la variable "$pdoMAB" dans l'espace global du fichier init.inc.php

        $resultat = $pdoMAB->prepare($requete); // prépare la requête
        $succes = $resultat->execute($parametres); //et exécute
        
        if ($succes === false) {
            return false; // si la requête n'a pas marché , je renvoie "false"
        } else {
            return $resultat; // sinon , je renvoie les résultats de la requête
        } // fin if else 
    } // fin foreach
} // fin fonction

// 3 - FONCTION POUR VERIFIER QUE LE MEMBRE EST CONNECTE

function estConnecte() {
    if (isset($_SESSION['membre'])) { // s'il y a un indice membre, le membre est passé par la page de connexion 
        return true; // il est connecté
    } else {
        return false; // il n'est pas connecté
    }
}

// 4-  FONCTION POUR VERIFIER QUE LE MEMBRE EST ADMIN

function estAdmin() {
    if(estConnecte() && $_SESSION['membre']['statut'] == 1 ) { // statut 1 = admin ; 0 = membre
        return true; // il est connecté et il est admin 
    } else {
        return false; // il est connecté mais il n'est pas admin
    }
}

?>