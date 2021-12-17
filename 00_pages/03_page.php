<?php 
echo "<h1>Page avec des constantes </h1>";

define("PI",3.1415926535);

echo "Le nombre PI vaut " .PI. "<br>";

// if pour vérifier l'existence de la constante PI
if (defined("PI")) echo 'La constante PI est bien définie .';
echo "<hr>";

// déclaration d'une constante qui contient une url
define("validator","https://validator.w3.org/");

if (defined("validator")) echo 'La constante validator est bien définie .';
echo "<hr>";

echo "L'url du validator du w3c est : " .validator. "<br>";

//utlisation de la constant validator dans un extrait de html
echo "Validez votre HTML CSS sur le site du <a href=\" " .validator."\" target=\"\_blank\">validator</a>";
?>