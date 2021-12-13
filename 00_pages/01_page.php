<!DOCTYPE html>
<?php 
    // déclaration d'une variable en PHP avec le symbole $ suivi du nom de la variable 
    $variable1 = "Cours PHP7";
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <?php echo "<title>01 Page PHP</title>"; ?>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
        // affichage du contenu de la variable
        echo "<h1> Suresnes 2021 - $variable1 </h1>";
    ?>
    <hr>
    <p>Utilisation de variables en PHP de passage PHP dans mon fichier HTML; on travaille aussi avec : <br> 
        <?php 
            $variable2 = "MySQL";
            echo $variable2;
            echo "</p><hr>";
            //Le caractère de concaténation en PHP est le "."
            echo  "<p>La variable2 est de type : " .gettype($variable2) .".</p>";

            $variable2 = "Minute papillon !";
            echo "<p>$variable2</p>";
            $variable2 = "coucou !";
        ?>
        <hr>
        <? //passage PHP plus court
            "<blockquote> $variable2, $variable2 on entend le $variable2</blockquote>";
        ?>
        <hr>
        <h2>print_r</h2>
        <h3>La liste des variables globales</h3>
        <p>Affiche toutes les variables à notre disposition sous forme d'un tableau, un "array"</p>
        <pre><?php print_r($GLOBALS); ?></pre>
        <hr>
        <p>Le contenu de la variable <code>$_COOKIE</code></p>
        <?php print_r($_COOKIE); ?>
        <hr>
        <p>Le contenu de la variable <code>$_ENV</code></p>
        <?php print_r($_ENV); ?>
        <hr>
        <p>Cette variable<code>$_SERVER['SERVER_SOFTWARE']</code>nous donne des infos sur le serveur</p>
        <?php print_r($_SERVER['SERVER_SOFTWARE']); ?>



    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>