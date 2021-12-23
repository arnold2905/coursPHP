<?php require_once '../inc/functions.php'; ?>  

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title> CoursPHP - Chapitre IV - Tableaux</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <header class="container-fluid-bg-light">
        <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - 04- Les Tableaux</h1>
        <p class="lead text-center text-danger text-decoration-underline w-75 mx-auto text-center">Les tableaux représentent un type composé car ils permettent de stocker sous un même nom de variable plusieurs valeurs indépendantes.C'est comme un tiroir et ses compartiments. Chaque compartiment , que nous nommerons un élément du tableau , est répéré par un indice numérique (le premier ayant par défaut la valeur 0 et non 1).D'où l'expression du 'tableau indice".</p>
    </header>
    <!-- fin container fluid  -->

    <div class="container bg-white">

    <section class="row">

        <div class="col-md-6">
            <h2 class="text-primary text-decoration-underline">1- Les tableaux</h2>
            <p>Un tableau appelé <code>"array"</code>en anglais est une variable améliorée dans laquelle on stocke une multitude de valeurs.Ces valeurs pouvant être de tout type, possèdent un indice dont la numération commence à 0.</p>
            <p>Méthode 1 pour déclarer un tableau <code>$tableau1 = array( 'Gabin', 'Arletty', 'Fernandel', 'Dalio', 'Pauline Caron');</code></p>
            
            <p>Méthode 2 pour déclarer un tableau <code>$tableau2 = ['France', 'Espagne', 'Italie', 'Portugal'];</code></p>
            
        </div>
        <!-- fin col  -->

        <div class="col-md-6">
            <h3 class="text-danger text-decoration-underline">Exemple</h3>
            <?php
                $tab[0] = 2021;
                $tab[1] = 3.14;
                $tab[2] = "PHP 7";
                $tab[35] = $tab[2]. " et MySQL";
                $tab[] = " et là j'ajoute coucou !";

                //jevar_dump($tab); Important: sert en back uniquement , jamais pour le front

                echo "<p>Nombre de valeurs dans le tableau : " .count($tab). "</p>"; // on compte le nombre de valeurs dans le tableau
                echo "<p>Le langage préféré de l'open source est le $tab[2]</p>";
                echo "<p>Utiliser $tab[35] !!!</p>";
            ?>
        </div>
        <!-- fin col  -->

        <div class="col-md-6">
            <h2 class="text-primary text-decoration-underline">2- Les tableaux associatifs</h2>
            <p>Dans un tableau associatif , nous pouvons choisir le nom des indices <code>$couleurs = array (<br>
            'b' => 'bleu',<br>
                'b1' => 'blanc',<br>
                'r' => 'rouge',<br>
            );</code></p>

            <?php 
            // 1 tableau associatif
              // $couleurs = array ( 'b' => 'bleu', 'b1' => 'blanc', 'r' => 'rouge',)
              // dans un tableau associatif , nous pouvons choisir le nom des indices

              $couleurs = array(
                'b' => 'bleu',
                'b1' => 'blanc',
                'r' => 'rouge',
            );

            jevar_dump($couleurs);
            // un echo d'une des valeurs de notre tableau associatif
            echo '<p>La première couleur du tableau associatif est le ' .$couleurs['b'].'</p>';
            echo "<p>La première couleur du tableau associatif est le $couleurs[b]</p>"; // si l'echo est entre le double guillemet , il n'est pa utile de noter l'indice associatif (ici'b') entre simple quote >>>> SUPER UTILE avec des requêtes SQL

            echo " <p> Le nombre de valeurs dans le tableau est de : avec count()" .count($couleurs). "</p>";
            echo " <p> Le nombre de valeurs dans le tableau est de : avec sizeof() " .sizeof($couleurs). "</p>";

            echo "<p> Le drapeau français est $couleurs[b], $couleurs[b1],$couleurs[r].</p>";
            ?>

        </div>
        <!-- fin col  -->

        <div class="col-md-6">
            <h2 class="text-primary text-decoration-underline">3- Parcourir un tableau associatif avec <code>foreach</code></h2>
            <p>Dans un tableau associatif nous pouvons choisir le nom des indices <br>
        <code>
            echo "&lt;ol>";<br>
            foreach ( $couleurs as $indice => $teinte) { <br>
                echo "&lt;li>Indice : $indice correspond à $teinte &lt;/li";
                <br>  
            }<br>
            echo "&lt;/ol>:<br>"
        </code></p>

        <?php 
        echo "<ol>";
        foreach($couleurs as $indice => $teinte) {
            echo "<li>Indice : $indice correspond à $teinte </li>";
        }
        echo "</ol>";
        echo "<hr>";

        $contacts = array(
            'prenom' => 'Paul',
            'nom' => 'Henri',
            'email' => 'paulhenri@.ladefense.fr',
            'telephone' => '0302030304'
        );

        echo "<div class=\"border border-warning bg-light w-50>";
        foreach ($contacts as $indice =>$infos) {
            //echo "<p>$indice : $infos </p>";
          if ($indice == 'prenom') {
            echo "<h3>$infos</h3>";
            } else {
            echo "<p>$infos</p>";
            }  
        }
        echo "</div>";
        ?>
        </div>
        <!-- fin col  -->
    </section>

    <section class="row">

        <div class="col-md-6">
            <h2 class="text-primary text-decoration-underline">Tableaux multidimensionnels</h2>
        </div>
        <!-- fin col  -->

        <div class="col-md-6">
            <h2 class="text-primary text-decoration-underline">Titre 2</h2>
        </div>
        <!-- fin col  -->
    </section>
    <!-- fin container  -->

    <section class="row">
        <div class="col-md-4">
            <h2 class="text-primary text-decoration-underline">Tableau associatif dans un <code>SELECT</code></h2>
            <p>Pour mettre le tableau associatif danbs un <code>SELECT</code>, avec un boucle <code>FOREACH</code> qui fabrique les <code>&lt;option value=""></code>de la balise select.
            <code><br>
            echo "&lt;label for=\"size2\">Tailles</label>&lt;select class=\"form-control w-25\">";<br>
            foreach ( $tailles2 as $indice2 => $size2 ) { <br>
                echo "<option value =\"$indice2\"> $size2 </option>";<br>
            }
            echo "&lt;/select>";
            </code>
            </p>
        </div>
        <!-- fin col  -->

        <div class="col-md-4">
            <h2 class="text-success text-decoration-underline">Exemple</h2>

            <?php 
            $tailles2 = [
                'xs' => 'XS-extra-small',
                's' => 'S-small',
                'm' => 'M-extra-medium',
                'l' => 'L-large',
                'xl' => 'XL-extra-large',
            ]; 
            jevar_dump($tailles2);
            ?>
            <hr>
        </div>
        <!-- fin col  -->
        <div class="col-md-4">
            <h2 class="text-success text-decoration-underline">Boucle FOREACH</h2>
            <?php 
            echo "<hr><pre class=\"bg-info\">1\  TABLEAU 2 DANS UN SELECT</pre>";     

             echo "<label for=\"size2\">Tailles</label><select class=\"form-control w-25\">";
             foreach ( $tailles2 as $indice2 => $size2 ) {
                 echo "<option value =\"$indice2\"> $size2 </option>";
             }
             echo "</select>";
 
            ?>
        </div>
        <!-- fin col  -->


    </section>
    <!-- fin container  -->
    

    <?php require_once '../inc/footer.inc.php'?>

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>