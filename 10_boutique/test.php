<?php require_once 'inc/functions.inc.php'; // 1 FONCTIONS

$host = 'localhost';//le chemin vers le serveur de données
$database = 'maboutique';//le nom de la BDD
$user = 'root';//le nom d'utilisateur pour se connecter
// $psw = '';//mdp PC XAMPP
$psw = '';// mdp pour MAC 

$pdoMAB = new PDO('mysql:host='.$host.';dbname='.$database,$user,$psw,
array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// pour afficher les erreurs SQL dans le navigateur
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// pour définir le charset des échanges avec la BDD
));

?>

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - Chapitre x - Test_Boutique</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body> 
<main>
    <header class="container-fluid f-header p-2">
      <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - Chapitre x - Test _Boutique</h1>
      <p class="lead text-center text-danger text-decoration-underline"></p>
    </header> 
    <!-- fin container-fluid header  -->
    <div class="container bg-white mt-2 mb-2 m-auto p-2">
  
        <section class="row">
  
        <div class="col-md-6">
            <h2 class="text-primary text-decoration-underline">Titre</h2>  

            <?php
                
                $requete = $pdoMAB->query(" SELECT * FROM produits ");
                $nbr_produits = $requete->rowCount();
                echo "<h3>Il y a $nbr_produits produits dans la boutique: </h3>";

                echo "<table class=\"table table-striped\">";
                echo "<thead class=\"table-info border-primary\">";
                echo "<tr>";
                echo "<th style=\"background-color: yellow; color:black; text-align:center;\" scope=\"col\">ID</th>";
                echo "<th scope=\"col\">Référence</th>";
                echo "<th scope=\"col\">Titre</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                    // echo $ligne['id_produit']."<br>";
                    echo "<tr>";
                    echo "<td>" . $ligne['id_produit'] . "</td>";
                      echo "<td>" . $ligne['reference'] . "</td>";
                      echo "<td>" . $ligne['titre'] . "</td>";

                    // ucfirst() pour mettre la première lettre d'un mot en majuscule
                }
                echo "</tbody>";
                echo "</table>";
                ?> 
        </div>
          <!-- fin col -->
  
        <div class="col-md-6">
            <h2 class="text-primary text-decoration-underline">Titre</h2>
        </div>
          <!-- fin col -->
          </section>
        <!-- fin row -->  
    </div>
      <!-- fin container  -->
    </main>
     
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>