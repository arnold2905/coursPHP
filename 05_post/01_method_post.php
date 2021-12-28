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

    <title> CoursPHP - Chapitre V - 02 POST </title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <header class="container-fluid f-header p-2">
        <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - Chapitre V - 02 POST</h1>
        <p class="lead text-center text-danger text-decoration-underline">$_POST[] permet de récupérer les données saisies dans un formulaire</p> 
    </header>
    <!-- fin container fluid  -->

    <div class="container bg-light mt-2 mb-2 m-auto p-2">

        <section class="row border border-primary border-4">

            <div class="col-md-6 border border-info border-1">
                <h2><code>La méthode POST</code></h2>
                <ul>
                    <li><code>$_POST[] est une superglobale</code> qui récupère les données saisies dans un formulaire.</li>
                    <li>Superglobale signifie que cette variable est disponible partout dans le script surtout y compris au sein des fonctions. </li>
                    <li>Les informations sont récupérées dans un array selon la syntaxe suivante:
                        <code>
                            $_POST = array(<br>
                                'name1' => 'valeur1',<br>
                                'name2' => 'valeur2',<br>
                            );<br>
                        </code>
                    </li>
                    <li><code>name1 et name2 </code>correspondent aux attributs du formulaire et <code>valeur1 et valeur2</code> aux valeurs saisies par l'internaute.</li>
                </ul>
            </div> 
            <!-- fin col  -->
            
            <div class="col-md-6 border border-info border-1">
                <h2 class="text-primary text-decoration-underline">Exemple</h2>
                <form action="" method="POST">
                    <div class="row g-3 mb-2">
                        <div class="col">
                        <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom" aria-label="Prénom">
                        </div>
                        <div class="col">
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom de famille" aria-label="Nom de famille" required>
                        </div>
                    </div>

                    <div class="row sb-2">
                        <div class="col">
                            <textarea name="message" id="message" class="form-control" rows="3">Votre message</textarea>
                        </div>
                    </div>

                    <div class="row sb-2">
                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-3">Envoyez</button>
                        </div>
                    </div>
                </form>
                <!-- fin formulaire  -->
            </div>
            <!-- fin col  -->

            <div class="col-md-6 border border-info border-1">
                
            </div>
            <!-- fin col  -->
        </section>
        <!-- fin row  -->

        <?php 

        if (!empty($_POST)) {// si $_POST n'est pas vide = différent de empty ; c'est qu'il est rempli ; alors c'est que le formulaire a été envoyé

            jevar_dump($_POST);

            echo "<section class=\"row bg-info\"><div class=\"col-md-12\"><h2>Données issues du formulaire</h2>";
            echo "<p>Prenom :" .$_POST['prenom']. " Nom : " .$_POST['nom']. "</p>";
            echo "<p>Message :" .$_POST['message']. "</p>";                
            echo "</div></section>";
        }      

        //jevar_dump($_POST);
        //echo $_POST['nom'];
        ?>                    


    </div> 
    <!-- fin container             -->
    
    <!-- footer en require  -->
    <?php require_once '../inc/footer.inc.php'?>

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>