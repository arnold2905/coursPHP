<?php 
// appel du fichier de fonctions
require_once '../inc/functions.php';
// 6 variables pour tester plus bas

$chaine = "Longtemps je me suis couché ...dans le temps.";
$decimal = 18.74;
$entier = 1515;

$lib = "Liberté";
$egal = "Egalité";
$frat = "Fraternité";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title> CoursPHP - Exo 01 variables</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <header class="container-fluid-bg-light">
        <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - Exo 01 Les Variables</h1>
        <p class="lead text-center text-danger text-decoration-underline">Les variables en PHP</p>
        
    </header>
    <!-- fin container fluid  -->


    <div class="container">
        <section class="row bg-info text-white">
            <div class="col-sm-12">
                <?php 
                echo $entier;
                // echo gettype nous donne le type de données contenues dans une variable
                echo gettype($decimal);

                echo "<hr>";
                print_r("<p>Afficher du contenu avec la fonction <code>print_r()</code></p>");
                print_r("$chaine");

                // j'appelle la fonction minute papillon
                minutePap();

                // une seconde fonction 
                whatDay();
                echo "<hr>";

                // Exo : écrire la devise de la République Française

                echo "<p>La devise de la République Française est $lib, $egal, $frat</p>";

                echo "<hr>";
                echo strftime("%A %d %b %Y %T");
                ?>
            </div>
        
        </section>   
    </div>

    

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>