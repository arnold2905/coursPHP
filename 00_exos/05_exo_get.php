<?php require_once '../inc/functions.php'; // appel du fichier de fonctions ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title> CoursPHP - Exo - 05_GET </title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <header class="container-fluid f-header p-2">
        <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - Exo - 05_GET</h1>
        <p class="lead text-center text-danger text-decoration-underline">Exo 5 - 05_GET</p> 
    </header>
    <!-- fin container fluid  -->

    <div class="container bg-white mt-2 mb-2 m-auto p-2">

        <section class="row border border-primary border-4">
            <div class="col-md-4 border border-info border-1">
                <h2 class="text-primary text-decoration-underline">05 Exo_GET </h2>
                <p>Consigne</p>
                <ol>
                    <li>Affichez dans cette page un titre 'mon compte : mon nom'</li>
                    <li>Ajoutez un lien 'modifier mon compte' : ce lien renvoie dans l'url à cette page</li>
                    <li>L'"action" demandée sera "modification" (indice et valeur) quand on clique sur ce lien</li>
                    <li>La valeur d'action contient-elle bien modification?</li>
                    <li>Si vous avez reçu cette modification par l'url, affichez le texte suivant : 'Vous souhaitez modifier votre compte'</li>
                    <li>Maintenant un autre lien avec suppression comme indice et affichez "Voulez- vous supprimer votre compte?"</li>
                </ol>

            </div> 
            <!-- fin col  -->
            
            <div class="col-md-4 border border-info border-1">
                <a href="05_exo_get.php?action=modification" class="btn btn-primary">Modifier mon compte</a>

                <?php 
                jevar_dump($_GET);

                if(isset($_GET['action']) && $_GET['action'] == 'modification') {
                    echo "<p class=\"alert alert-warning w-75\">Vous souhaitez modifier votre compte</p>";
                }
                ?>
            </div>
            <!-- fin col  -->

            <div class="col-md-4 border border-info border-1">
                <a href="05_exo_get.php?action=suppression" class="btn btn-danger">Supprimer mon compte</a>

                <?php 
                jevar_dump($_GET);

                if(isset($_GET['action']) && $_GET['action'] == 'suppression') {
                    echo "<p class=\"alert alert-success\">Voulez-vous supprimer votre compte?</p>";
                }
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


