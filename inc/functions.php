<?php 
// ma 1iere fonction php
function minutePap() {
    echo "<p class=\"bg-success text-white w-50\"> Minute ! Papillon ! </p>";
}

// 2nde fonction
function whatDay() {
    echo "<p>We are ".date('d/m/Y, l, z') ." my friend !</p>"; 
}

// faire une fonction qui affiche la date au complet

function dateFR() {
    setlocale(LC_TIME, 'fr_FR');
    echo utf8_encode(strftime('%A, %d, %B, %Y'));
}

//function dateFR() {
//    setlocale(LC_TIME, 'fra_fra');
//    echo"<p>Date et Jour :<span class=\"fw-bold\"> ". utf8_encode( strftime('%A, %d, %B, %Y'))."</p>";
//  }

// déclaration d'une constante qui contient une url 
//define("validator","https://validator.w3.org/");

// Création d'une fonction pour "print_r"

function jeprint_r($mavariable) {
    echo"<pre>";
    print_r($mavariable);
    echo"</pre>";
}

// Création d'une fonction pour "var_dump" avec des styles bootstrap

function jevar_dump($mavar) { // la fonction avec son paramètre, une variable
    echo "<br><p class=\"bg-warning text-white w-50\">...var_dump</p><pre class=\"alert alert-info w-50\">";
    var_dump($mavar); // à cette variable , on applique la fonction "var_dump()"
    echo "</pre>";
}

?>    