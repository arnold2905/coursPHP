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

              // On va faire une boucle pour affichern les valeurs d'un tableau
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
                    'prenom' => 'j.dujardin@gmail.com',
                    'tel' => '06 20 20 20 20',
                ),
                1 => array (
                    'prenom' => 'marion',
                    'nom' => 'Cotillard',
                    'prenom' => 'm.cotillard@gmail.com',
                    'tel' => '06 25 20 20 20',
                ),
                2 => array (
                    'prenom' => 'John',
                    'nom' => 'Wayne',
                )
            );

            jevar_dump($tableau_multi);
            jevar_dump($tableau_multi[2]);

            jevar_dump($tableau_multi[1]['prenom']);

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