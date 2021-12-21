<?php require_once '../inc/functions.php'; ?>  

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title> CoursPHP - III - Les Conditions</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
<header class="container-fluid-bg-light">
        <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - 03- Conditions</h1>
        <p class="lead text-center text-danger text-decoration-underline w-75 mx-auto text-center p-2">Les instructions conditionnelles ou les conditions : Indispensables  à la gestion du déroulement d'un algorithme quelconque, ces instructions sont présentes dans tous les langages. Cela sera familier pour ceux qui ont déjà une connaissance en Javascript.</p>
    </header>
    <!-- fin container-fluid header -->
   
    <div class="container bg-white">
        <section class="row border border-primary">
            <div class="col-md-6">
                <h2 class="text-primary text-decoration-underline">L'instruction <code>"if"</code></h2>
                <p>L'instruction <code>if</code> est la plkus siple et la plus utilisée des indtructions conditionnelles. Elle est essentielle en ce qu'elle permet d'orienter l'exécution du script en fonction de la valeur booléenne d'une expression.
                <code>
                    <br>
                    $a = 10;<br>
                    $b = 550;<br>
                    $c = 25;<br>
                </code>
                </p>
                <?php 
                $a = 100;
                $b = 55;
                $c = 25;

                if ($a > $b && $b > $c) {
                 echo "<p class=\" alert alert-success w-75 mx-auto text-center\">Les deux conditions sont vraies</p>";
                }

                ?>
            </div>
            <!-- fin col  -->

            <div class="col-md-6">
                <h2 class="text-primary text-decoration-underline">L'instruction <code>"if...else"</code></h2>
                <p>L'instruction <code>"if...else"</code> permet de traiter le cas ou l'expression <code>"vraie/TRUE"</code>et en même de prévoir un traitemenr de substitution quand elle est <code>"fausse/FALSE" <br>
                <code><hr>
                    $e = 10;<br>
                    $f = 5;<br>
                    $g = 2;<br>

                    echo "&lt;p class=\" alert alert-info w-75 mx-auto text-center\">";<br>
                    // OR ou OU 
                    if ( $e == 9 || $f > $g ) {<br>
                        echo "Au moins une des 2 conditions est remplie ou vraie"&lt;/p>;<br>
                    } else {
                        echo "Les 2 conditions sont fausses </p>";<br>
                    }<br>
                </code>
                </p>
                <?php 
                 echo "<p class=\" alert alert-warning w-75 mx-auto text-center\">";
                    if ($a > $b) {
                        echo "$a est supérieur à $b";
                    } else {
                        echo "$a est inférieur à $b";
                    }

                    // echo "</p>"

                    echo "<hr>";

                    echo "<p class=\"text-primary text-decoration-underline\">Autre exemple</p>";
                    $e = 10;
                    $f = 5;
                    $g = 2;

                    echo "<p class=\" alert alert-info w-75 mx-auto text-center\">";
                    // OR ou OU //
                    if ( $e == 9 || $f > $g ) {
                        echo "Au moins une des 2 conditions est remplie ou vraie</p>";
                    } else {
                        echo "Les 2 conditions sont fausses </p>";
                    }
                    
                ?>

                <h4 class="text-primary text-decoration-underline">L'instruction<code>"if...else en ternaire"</code></h4>
                <p>il existe une autre manière d'écrire un <code>if...else : la condition ternaire.</code></p>
                <p>Dans le <code>ternaire le "?" remplace le "if" et le ":" remplace le "else"</code> </p>

                <?php 
                    $h = 10;
                    if ($h == 10 ){
                        echo "<p class=\"alert alert-info small\">$h est égal à 10</p>";
                    }else {
                        echo "<p class=\"alert alert-info small\">$h est différent de 10</p>";
                    }

                    echo "<p class=\"text-primary text-decoration-underline\">Autre exemple en ternaire</p>"; 
                    // On vérifie une condition et si c'est vrai on affiche la première expression sinon la seconde
                    echo ($h == 10 ) ? "<p class=\"text-danger\">$h est égal à 10</p>" : "<p class=\"text-danger\">$h est différent de 10</p>";
                ?>
            </div>
            <!-- fin col  -->

        </section>
        <!-- fin row  -->

        <section class="row">
            <div class="col-md-6">
                <h2 class="text-primary text-decoration-underline">L'instruction <code>"if...else if...else"</code></h2>
                <p>Une syntaxe plus complexe : 
                <code>
                    $d = 10; <br>

                    echo "&lt;p class=\"text-success alert alert-warning\">"; <br>

                        if ($d == 8) { <br>

                        echo " \$d qui contien $d est égal à 8&lt;/p>"; <br>
                    } else if ($d != 10) {

                    echo " \$d qui contien $d est différent de 10&lt;/p>"; <br>
                    } else {

                    echo "pour \$d qui contien $d // Les deux conditions sont fausses&lt;/p>"; <br>
                    }
                </code>
                </p>
                <?php 

                echo "<p class=\" alert alert-success w-75 mx-auto text-center\">";
                $d = 8;
                if ( $d == 8) {
                    echo "\$d est égal à 8</p>"; // $d = 8
                } elseif ( $d == 10){
                    echo "\$d est différent de 10</p>"; // $d = autre chose que 10
                } else {
                    echo "Les deux conditions sont fausses</p>"; // ce n'est 8 et c'est égal à 10
                }
                ?>
            </div>
            <!-- fin col  -->
            <div class="col-md-6">
                <h2 class="text-primary text-decoration-underline">L'instruction <code>"switch...case"</code></h2>
                <p>Exemple simple</p>

                <code>
                $dept = 20; <br>
                if ($dept == 75) echo "paris";<br>
                if ($dept == 92) echo "haut-de-seine";<br>
                if ($dept == 78) echo "yvelines";<br>
                if ($dept == 93) echo "seine saint-denis";<br>

                echo "&lt;hr>"; <br>

                echo "&lt;p class=\"alert alert-danger\">";<br>

                switch ($dept) {<br>
                    case 75:
                        echo "Paris&lt;/p>";<br>
                        break;<br>
                    case 78:<br>
                        echo "yvelines&lt;/p>";<br>
                        break;<br>
                    case 92:<br>
                        echo "Hauts-de-Seine&lt;/p>";<br>
                        break;<br>
                    case 93:<br>
                        echo "seine saint-denis&lt;/p>";<br>
                        break;<br>

                    default:<br>
                        echo "Département inconnu en île de france !&lt;/p>";<br>
                        break;<br>
                </code>
                <?php

                $dept = 92;
                if ($dept == 75) echo "paris";
                if ($dept == 92) echo "haut-de-seine";
                if ($dept == 78) echo "yvelines";
                if ($dept == 93) echo "seine saint-denis";

                echo "<hr>";

                echo "<p class=\"alert alert-danger\">";

                switch ($dept) {
                    case 75:
                        echo "Paris</p>";
                        break;
                    case 78:
                        echo "yvelines</p>";
                        break;
                    case 92:
                        echo "Hauts-de-Seine</p>";
                        break;
                    case 93:
                        echo "seine saint-denis</p>";
                        break;

                    default:
                        echo "Département inconnu en île de france !</p>";
                        break;
                }

                ?>

            
            </div>
        </section>

    </div>

    <?php require_once '../inc/footer.inc.php'?>

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>