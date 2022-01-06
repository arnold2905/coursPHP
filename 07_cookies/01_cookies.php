<?php require_once '../inc/functions.php'; // appel du fichier de fonctions

if (isset($_GET['langue'])) { // si une langue est dans l'url , on mettra cette langue dans le cookie
    $langue = $_GET['langue'];
    } elseif (isset($_COOKIES['langue'])) { // sinon si on reçu un cookie appelé 'langue' , la valeur du sit sera celle du cookie
        $langue = $_COOKIES['langue'];
    } else { // sinon si l'internaute n'a pas choisi de langue , il arrive pour la première fois , on lui met 'fr' par défaut
        $langue = 'fr';
    }

    // 3 envoi du cookie avec la langue dedans
    $expiration = time() + 365*24*60*60; // on passe en variable la date d'expiration du cookie OBLIGATOIRE
    // on ajoute une année à la date du jour de création du cookie

    // création du cookie
    setcookie('langue', $langue, $expiration);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title> CoursPHP - Chapitre VII - Cookies</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <header class="container-fluid f-header p-2">
        <h1 class="display-4 text-center text-primary text-decoration-underline">La superglobale - $_Cookies</h1>
        <p class="lead text-center text-danger text-decoration-underline">Chapitre VII - $_Cookies</p> 
    </header>
    <!-- fin container fluid  -->

    <div class="container bg-light">

        <section class="row">
            <div class="col-sm-12 border border-info border-1">
                <h2 class="text-primary text-decoration-underline">Définitions</h2>
                <p>Un cookie est un petit fichier de 4ko maxi déposé par le serveur web sur le poste de l'internaute et qui contient des informations. </p>
                <p>Les cookies sont automatiquement envoyées par le navigateur.Le PHP permet de récupérer les informations contenues dans le ou les cookies. </p>
                <p>Important : un cookie étant sauvegardé sur le poste de l'internaute, il peut être modifié, volé, ou détourné: <code>ON NE MET PAS D'INFORMATIONS IMPORTANTES DANS UN COOKIE(mdp, panier, références bancaires, numéro de sécu , .....) </code></p>

                <hr>
                <ul>
                    <!-- On passe dans l'url la langue d'une information ; ici la langue choisie par l'utilisateur , la valeur de l'indice choisie est récupérére dan sla superglobale "$_GET" -->
                    <li><a href="?langue=fr">Français</a></li>
                    <li><a href="?langue=es">Espagnol</a></li>
                    <li><a href="?langue=it">Italien</a></li>
                    <li><a href="?langue=en">Anglais</a></li>
                </ul>

                <hr>

                <?php 
                echo '<p>La langue du site : ' .$langue. '</p>';
                echo time(); // date du jour exprimée en secondes : secondes écoulées depuis le 01/01/1970 à aujourd'hui
                echo '<br>';
                echo $expiration;

                ?>
            </div> 
            <!-- fin col  -->
            
            <div class="col-md-6 border border-info border-1">
            <h2>Titre</h2>
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


