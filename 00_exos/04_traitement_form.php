<?php require_once '../inc/functions.php'; // appel du fichier de fonctions ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title> CoursPHP - Exo - 04_Traitement_form</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <header class="container-fluid f-header p-2">
        <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - Exo - 04_Traitement_form</h1>
        <p class="lead text-center text-danger text-decoration-underline">Exo 4 - 04_Traitement_form</p> 
    </header>
    <!-- fin container fluid  -->

    <div class="container bg-light">

        <section class="row border border-primary border-4">
            <div class="col-sm-12 border border-info border-1">
                <h2>04 Traitement form </h2>

                <?php 

                if (!empty($_POST)) { 

                    jevar_dump($_POST);

                    echo "<section class=\"row bg-info\"><div class=\"col-md-12\"><h2>Données issues du formulaire</h2>";
                    echo "<p>Prenom :" .$_POST['prenom']. " Nom : " .$_POST['nom']. "</p>";
                    echo "<p>Nom :" .$_POST['nom']. "</p>"; 
                    echo "<p>Email :" .$_POST['email']. "</p>";  
                    echo "<p>Adresse :" .$_POST['adresse']. "</p>";
                    echo "<p>Code postal:" .$_POST['codepostal']. "</p>";
                    echo "<p>Ville :" .$_POST['ville']. "</p>";
                    echo "<p>Telephone:" .$_POST['telephone']. "</p>";
                 
                    echo "</div></section>";

                    // fabrication d'un fichier texte en l'absence de BDD
                    $file = fopen('traitement.txt', 'a');// fopen() en mode "a" permet de créer un fichier s'il n'existe pas encore, sinon de l'ouvir
                    $informations = "Informations reçues : " .$_POST['prenom']. ' ' .$_POST['nom']. ' ' .$_POST['email']. ' ' .$_POST['adresse']. "\n";
                    // "\n" permet de mettre un saut de ligne 
                    fwrite($file, $informations); // la variable $informations contient à chaque envoi les données du formulaire au fichier représenté par $file 
                    //fwrite() écrit les informations dans le fichier

                }
                ?>

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


