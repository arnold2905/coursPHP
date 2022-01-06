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

    <title> CoursPHP - Chapitre IX - SECURITE - 01_dialogue</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
    
</head>

<body>
    <header class="container-fluid f-header p-2">
        <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP -Chapitre IX - 01 Dialogue</h1>
        <p class="lead text-center text-danger text-decoration-underline">Création d'une BDD</p> 
    </header>
    <!-- fin container header  -->
    
    <div class="container bg-light">
        <section class="row">
            <div class="col-sm-6">
            <h2 class="text-primary text-decoration-underline">Création d'une BDD</h2>
            <ul>
                <li>Nom de la BDD: dialogue</li>
                <li>Le nom de la table : commentaires (vérifier que la table et la BDD sont avec le moteur InnoDB)</li>
                <li>La table contient les champs suivants : </li> 
                <li>id_commentaires : INT(5) PK AI</li>
                <li>pseudo : VARCHAR(20)</li>
                <li>message : TEXT</li>
                <li>date_enregistrement : DATETIME</li>
            </ul>
            
            </div> 
            <!-- fin col  -->
            
            <div class="col-md-6 border border-info border-1">
                <h2 class="text-primary text-decoration-underline"></h2>
 
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


