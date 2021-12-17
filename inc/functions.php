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
define("validator","https://validator.w3.org/");
?>    