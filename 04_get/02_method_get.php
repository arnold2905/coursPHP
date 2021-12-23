<?php require_once '../inc/functions.php'; // appel du fichier de fonctions ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title> CoursPHP - Chapitre IV - 02 $_GET</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <header class="container-fluid f-header p-2">
        <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - Chapitre IV - 02 $_GET</h1>
        <p class="lead text-center text-danger text-decoration-underline">Chapitre IV - 02 $_GET</p> 
    </header>
    <!-- fin container fluid  -->

    <div class="container bg-light">
        <section class="row border border-primary border-4">
            <div class="col-sm-12 border border-info border-1">
                <?php 
                //jevar_dump($_GET); // à enlever en production
                // "if isset " est-il établi que nous avons toutes les informations dans "$_GET" 
                if(isset($_GET['article']) && isset($_GET['couleur']) && isset($_GET['prix'])) { // si oui si c'est vrai 
                    echo "<h2>Votre produit : " .$_GET['article']. "</h2>";
                    echo "<div class=\"border border-primary w-50 p-4\">";
                    echo "<p>Produit : " .$_GET['article']. " *** Couleur : " .$_GET['couleur']. "</p>";// on affiche les valeurs
                    echo "<p class=\"bg-info\">Prix : " .$_GET['prix']. " € </p>";
                    echo "</div>";
                } else {
                    echo "<h2>Fiche produit</h2>";
                    echo "<p class=\"alert alert-danger w-50\">Ce produit n'existe pas</p>";// sinon on affiche un message "ce produit n'existe pas"
                }
                ?>
               
            </div> 
            <!-- fin col  -->
            
            <div class="col-md-6 border border-info border-1">
                
            </div>
            <!-- fin col  -->

            <div class="col-md-6 border border-info border-1">
                
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