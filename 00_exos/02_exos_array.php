<?php require_once '../inc/functions.php'; // appel du fichier de fonctions ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title> CoursPHP - Exo 02 Array</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <header class="container-fluid-bg-light">
        <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - Exo 02 - Array</h1>
        <p class="lead text-center text-danger text-decoration-underline">02- Exos Array</p> 
    </header>
    <!-- fin container fluid  -->

    <div class="container bg-light">
        <section class="row border border-success">
            <div class="col-sm-12">
             <?php 
             // Méthode 1 - Déclaration d'un tableau, d'un array
             $tableau1 = array( 'Gabin', 'Arletty', 'Fernandel', 'Dalio', 'Pauline Caron');
              echo $tableau1; // erreur de type "array to string conversion , car on ne peut pas afficher directement un tableau"

              echo "<pre>"; // "pre" permet de formater le texte (saut, typo à chasse fixe)
              print_r($tableau1); // print_r affiche le contenu du tableau avec les indices
              echo "</pre>";

              echo "<pre>";
              var_dump($tableau1); // "var dump" affiche le contenu d'un "array" avec les types des valeurs
              echo "</pre>";

              // Méthode 2 - 

              $tableau2 = ['France', 'Espagne', 'Italie', 'Portugal'];
              echo "<pre>";
              var_dump($tableau2); // "var dump" affiche le contenu d'un "array" avec les types des valeurs
              echo "</pre>";

              jeprint_r($tableau2);

              jevar_dump($tableau1);

              echo $tableau2[2]. "<br>";

              jevar_dump($tableau2[2]);

              $tableau2[] = "Suisse"; // les crochets vides([]) servent à rajouter u ne valeur à la fin du tableau
                //un indice entre les crochets([]) servent à remplacer une valeur ; mais le tableau conserve toujours la même longueur.

              jevar_dump($tableau2);

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

              // On va faire une boucle pour afficher les valeurs d'un tableau
              // "foreach" >>> le moyen le plus simple

              echo "<ul>";
              foreach ($tableau1 as $acteurs) {
                  echo "<li>" .$acteurs. "</li>";
              }
              echo "</ul>";

              // une nouvelle foreach avec le tableau2
              // à chaque tour de boucle , la variable $pays prend les valeurs du tableau; le mot clef 'as" est obligatoire.
              echo "<ol>";
              foreach ($tableau2 as $pays) {
                  echo "<li>" .$pays. "</li>";
              }
              echo "</ol>";

              echo "<ol>";
              foreach ($tableau1 as $indice => $acteurs) {
                  echo "<li>Indice : $indice correspond à $acteurs</li>";
                  // echo '<li>Indice : '.$indice. ' correspond à  ' .$acteurs. '</li>';
              }
              echo "</ol>";

              echo "<ol>";
                foreach ($couleurs as $indice => $teinte) {
                    echo "<li>Indice : $indice correspond à $teinte </li>";
                }

              // 1- Déclarez un tableau associatif "$contacts" avec les indices prenom, nom, email et telephone en y mettant les valeurs correspondantes à un seul contact
              //2- Puis avec une boucle foreach vous affichez la valaur dans une ul
              //3- Puis dans une autre boucle vous affichez les valeurs dans des p sauf le prénom qui doit être dans un h3 (aide >>> if else)

              $contacts = array(
                'prenom' => 'Paul',
                'nom' => 'Henri',
                'email' => 'paulhenri@.ladefense.fr',
                'telephone' => '0302030304'
            );

            jevar_dump($contacts);

            echo "<ul>";
              foreach ($contacts as $infos) {
                  echo "<li>" .$infos. "</li>";
              }
              echo "</ul>";

              foreach ($contacts as $indice =>$infos) {
                //echo "<p>$indice : $infos </p>";
              if ($indice == 'prenom') {
                echo "<h3>$infos</h3>";
                } else {
                echo "<p>$infos</p>";
                }  
            }

            // tableaux multidimensionnels, un tableau avec des sous-tableaux

            $tableau_multi = array (
                0 => array (
                    'prenom' => 'jean',
                    'nom' => 'Dujardin',
                    'mail' => 'j.dujardin@gmail.com',
                    'tel' => '06 20 20 20 20',
                ),
                1 => array (
                    'prenom' => 'marion',
                    'nom' => 'Cotillard',
                    'mail' => 'm.cotillard@gmail.com',
                    'tel' => '06 25 30 20 20',

                ),
                2 => array (
                    'prenom' => 'John',
                    'nom' => 'Wayne',
                    'mail' => 'j.wayne@gmail.com',
                    'tel' => '06 25 40 20 20',
                    
                ),
                3 => array (
                    'prenom' => 'Gary',
                    'nom' => 'Grant',
                    'mail' => 'g.grant@gmail.com',
                    'tel' => '06 25 50 20 20',
                ),
            );

            jevar_dump($tableau_multi); // fonction pour afficher tout le tableau
            jevar_dump($tableau_multi[2]); // infos sur l'indice 2 du tableau

            jevar_dump($tableau_multi[1]['prenom']); // sur l'indice 1 la vcaleur du nom dans le sous-tableau

            echo "<hr>";

            // Pour parcourir le tableau multidimensionnel on peut faire une boucle "for" car ses indices sont numériques
            for ($i = 0; $i < count($tableau_multi); $i++) { // tant "$i" est inférieur au nombre des éléments dans le tableau , que le compte avec "count()" on entre dans la boucle

                //echo '<p>' .$tableau_multi[$i]['prenom'].'</p>'; //"$i" affichera successivement leds informations des indices nommés
                echo "<p>" .$tableau_multi[$i]['prenom']. " " .$tableau_multi[$i]['nom']. "</p>";
            }
            echo "<hr>";


            // Boucle FOREACH
            // Une autre méthode : Pour parcourir avec une boucle foreach
            // On passe en variable les contenus de chaque indice du tableau et en ciblant les indices nommés des sous*ytableaux associatifs
            echo "<hr><pre class=\"bg-warning\">1\  BOUCHE FOREACH </pre>";

            echo '<p class=" alert alert-warning">';
            foreach ($tableau_multi as $indice => $prenom) {
                //jevar_dump($prenom);
                echo  '<strong>' .$tableau_multi[$indice]['prenom']. '</strong> - ';
            }
            echo '</p>';

            echo "<hr><pre class=\"bg-info\">2\ BOUCHE FOREACH </pre>";

            echo "<p>";
            foreach ($tableau_multi as $indice => $acteurs) {
                //jevar_dump($prenom);
                echo  '<strong>' .$acteurs['prenom']. ' ' .$acteurs['nom']. '</strong> <br> ';
            }
            echo '</p>';

            // Exo
            // 1- Faire un tableau "$tailles" avec des tailles de vêtements de l'extra small au xl et les afficher dans boucle foreach dans une ul

            $tailles = array( 'extra small', 'small', 'medium', 'large', 'extra large');
            //$tailles = ['extra small', 'small', 'medium', 'large', 'extra large'];

            jevar_dump($tailles);

            echo "<ul>";
              foreach ($tailles as $infos) {
                  echo "<li>" .$infos. "</li>";
              }
              echo "</ul>";

              echo "<hr>";

              echo "<ul>";
              foreach ($tailles as $indice => $size) {
                  echo "<li>" .$indice. " pour " .$size. "</li>";
              }
              echo "</ul>";

            // 2 - Le même dans un tableau associatif ; nom du tableau "$tailles2"

            $tailles2 = [
                'xs' => 'XS-extra-small',
                's' => 'S-small',
                'm' => 'M-extra-medium',
                'l' => 'L-large',
                'xl' => 'XL-extra-large',
            ];

            jevar_dump($tailles);

            echo "<hr><pre class=\"bg-warning\">1\  BOUCHE FOREACH LES TAILLES TABLEAU2 </pre>";
            echo "<ul>";
              foreach ($tailles2 as $indice2 => $size2) {
                  echo "<li>
                   $indice2 pour $size2
                    </li>";
              }
              echo "</ul>";

            echo "<hr>";

            //  Faire un "select" de dses tailles dans une boucle "FOREACH"

            //echo "<select class=\"form-select\" aria-label="\Default select example\">";
            //echo "<ul>";
            //echo "<select>";
            // foreach ($tailles2 as $indice2 => $size2) {
            //      echo "<option value ="\$indice2"\>$size2</option>";
            //  } 
            //  echo "</select>";
            echo "<hr><pre class=\"bg-info\">1\  BOUCHE FOREACH LES TAILLEs TABLEAU 2 DANS UIN SELECT</pre>";     

            echo "<label for=\"size2\">Tailles</label><select class=\"form-control w-25\">";
            foreach ( $tailles2 as $indice2 => $size2 ) {
                echo "<option value =\"$indice2\"> $size2 </option>";
            }
            echo "</select>";

            ?>

            <!-- <select>  -->
                <!-- <option value="xs">XS-extra-small</option> -->
                <!-- <option value="s">S-small</option> -->
                <!-- <option value="m">M-extra-medium</option> -->
                <!-- <option value="l">L-large</option> -->
                <!-- <option value="xl">XL-extra-large</option> -->
            <!-- </select> -->

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