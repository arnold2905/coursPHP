<?php require_once '../inc/functions.php'; // appel du fichier de fonctions ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title> CoursPHP - Exo 03 Boucles</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <header class="container-fluid f-header p-2">
        <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - Exo 03 - Boucles</h1>
        <p class="lead text-center text-danger text-decoration-underline">03- Exos Boucles</p> 
    </header>
    <!-- fin container fluid  -->

    <div class="container bg-light">
        <section class="row border border-primary border-4">
            <div class="col-sm-6 border border-info border-1">
                <h2>La boucle <code>while</code></h2>

                <?php 
                    $i = 0; // valeur de départ de la boucle
                    while ($i < 25) { // tant que $i est inférieur à 25
                        echo $i. " -- "; // affiche
                        $i++; // incrémentation
                    }
                    echo "<hr>";
                    echo "<p class=\"text-primary text-decoration-underline\">Autre exemple : Année de naissance</p>";

                    $annee  = 1920;
                    echo "<label for=\*annee\*>Année de naissance</label><select name=\"annee\" id=\"annee\">";
                    while ( $annee <= 2021 ) {
                        echo "<option value=\"annee\">" .$annee. "</option>";
                        $annee++;
                    }
                    echo "</select>";

                    echo "<hr>";
                    echo "<p class=\"text-primary text-decoration-underline\">Autre exemple : le même mais à l'envers</p>";
                    
                    $annee2 = 2021;
                    echo "<label for=\"annee2\">Année de naissance</label><select name=\"annee2\" id=\"annee2\">";
                    while ( $annee2 >=1920 ) {
                        echo "<option value=\"annee2\">" .$annee2. "</option>";
                        $annee2--;
                    }
                    echo "</select>";

                ?>
            </div> 
            <!-- fin col  -->
            
            <div class="col-md-6 border border-info border-1">
                <h2>La boucle : <code>do...while</code></h2>

                <?php 
                    $j = 0;
                    do {
                         echo "<p class=\"lead\"> Je fais un tour de boucle.</p>";
                        //jevar_dump($j);
                        $j++;
                        jevar_dump($j);
                    } while ($j > 10); // la boucle va faire l'echo une fois et après la condition étant FALSE , elle s'arrête
                ?>
            </div>
            <!-- fin col  -->

            <div class="col-md-6 border border-info border-1">
                <h2>La boucle : <code>for</code></h2>

                <?php 
                   // Faire "un select" avec les 12 mois de l'année dans "option" avec la boucle "for"

                   echo "<label for=\"mois\">Les douze mois de l'année</label><select class=\"form-control w-25\">";
                   for ($mois = 1; $mois<=12; $mois++) {
                        echo "<option value =\"$mois\"> $mois </option>";
                   }
                    echo "</select>";
                ?>
            </div>
            <!-- fin col  -->

            <div class="col-md-6 border border-info border-1">
                <h2>La boucle : <code>for each</code></h2>

                <?php 
                   // Faire "un select" avec les 12 mois de l'année dans "option" avec "foreach"

                   $month = [
                       "01" => "Janvier",
                       "02" => "Février",
                       "03" => "Mars",
                       "04" => "Avril",
                       "05" => "Mai",
                       "06" => "Juin",
                       "07" => "Juillet",
                       "08" => "Août",
                       "09" => "Septembre",
                       "10" => "Octobre",
                       "11" => "Novembre",
                       "12" => "Décembre",
                   ];

                   jevar_dump($month);

                   echo "<label for=\"month\">Les douze mois de l'année</label><select class=\"form-select\" name=\"month\">";
                   echo "<option>Choisissez votre mois de naissance</option>";
                   foreach ($month as $indice => $themonth) {
                        echo "<option value =\"$indice\"> $themonth </option>";
                   }
                    echo "</select>";
                ?>
            </div>
            <!-- fin col  -->
        </section>
    </div>            
    
    <!-- footer en require  -->
    <?php require_once '../inc/footer.inc.php'?>

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>