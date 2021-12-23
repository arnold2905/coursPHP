<?php require_once '../inc/functions.php'; ?>  

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title> CoursPHP - Chapitre III - 02 - Les Boucles</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
<header class="container-fluid-bg-light">
        <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - Chapitre III- 02 - Boucles</h1>
        <p class="lead text-center text-danger text-decoration-underline w-75 mx-auto text-center p-2"> Les boucles permettentbde répéter des opérations élémentaires sans avoir à réecrire le même code.</p>
    </header>
    <!-- fin container-fluid header -->
   
    <div class="container bg-white mt-2 mb-2 m-auto p-2">
        <section class="row border border-primary">
            <div class="col-md-6">
                <h2 class="text-primary text-decoration-underline">La boucle : <code>while</code></h2>
                <p>L boucle <code>while</code> permet d'affiner le comportement d'une boucle en r&alisant de façon répétitive tant qu'une conditopn est évaluée à <code>vrai/TRUE</code>et l'arrêter quand elle est évaluée à <code>faux/FALSE</code>.</p>

                <?php 
                    $n = 1;
                    //jevar_dump($n);
                    while($n % 7 != 0) { // à condition que le nombre dans $n ne soit un multiple de 7
                        $n = rand(1,100); // 4 tirage de nombre aléatoire et ce sont ces nombres que l'on treste
                        //echo $n, " + "; // VOIR concaténation avec virgule
                        echo $n, " * ";
                    }
                    echo "<hr>";

                    //$num = 10;
                    //while($num<=40) {
                    //    echo $num. " * ";
                    //    $num = $num+5;
                    //}
                ?>
            </div>
            <!-- fin col  -->

            <div class="col-md-6">
                <h2 class="text-primary text-decoration-underline">La boucle <code>do...while</code></h2>
                  <p>La condition n'est évaluée qu'après une première exécution des instructions du bloc compris entre <code>do et while</code></p>  
                  <?php 
                    $n2 = 1;// initialisation de la variable à 1
                    // jevar_dump($n2);
                    do  { 
                        $n2 = rand( 1,100 );
                        jevar_dump($n2);
                        echo $n2. " ** ";
                    }
                    while ( $n2%7 !=0 );// la condition, trouver un multiple de 7, n'est testée qu'après le premier tirage;
                  ?>    
            </div>
            <!-- fin col  -->

            <div class="col-md-6">
                <h2>La boucle : <code>for</code></h2>
                <p>La <code>boucle "for"</code> est plus concise que <code>la boucle "while".</code></p>
                <?php 
                    for ($i = 0; $i<=10; $i++) {
                        echo $i. " ** ";
                        //jevar_dump($i);
                    }
                ?>    
            </div >
            <!-- fin col  -->
        </section>
        <!-- fin row  -->

    </div>
    <!-- fin container  -->



    <!-- footer en require  -->
    <?php require_once '../inc/footer.inc.php'?>

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

</body>
</html>