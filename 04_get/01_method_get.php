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

    <title> CoursPHP - Chapitre IV - 01 $_GET</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <header class="container-fluid f-header p-2">
        <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - Chapitre IV - 01 $_GET</h1>
        <p class="lead text-center text-danger text-decoration-underline"><code>$_GET[] représente les données qui transitent par l'URL.</code></p> 
    </header>
    <!-- fin container fluid  -->

    <div class="container bg-light">
        <section class="row border border-primary border-4">
            <div class="col-sm-6 border border-info border-1">
            <h2 class="text-primary text-decoration-underline">La méthode <code>"$_GET"</code></h2>
            <ul>
                <li>La méthode <code>$_GET[] est une superglobale et un tableau array</code> comme toutes les superglobales.</li>
                <li><code>Superglobale signifie que cette variable est disponible partout dans le script, quelque soit le contexte du script.</code></li>
                <li>Les informations transitent selon une syntaxe précise dans l'url ; ex : <code>mapage.php?indice1 valeur1 & indiceN=valeurN</code></li>
                <li>Quand on réçeptionne les données , <code>$_GET</code> se remplit dans un array selon la syntaxe suivante <code>
                    $_GET = array (<br>
                        'indice1' => 'valeur';<br>
                        'indiceN' => 'valeurN';<br>
                    );<br>
                </code></li>
                <li>Pour voir le tableau on fera d'abord <code>un var_dump($_GET)</code></li>
            </ul>
            </div> 
            <!-- fin col  -->
            
            <div class="col-md-6 border border-info border-1">
                <h2 class="text-primary text-decoration-underline"> Exemples</h2>
                <p><a href="02_method_get.php?article=jean&couleur=bleu&prix=50">Un jean bleu</a></p>
                <!-- nom de la page? indice1=valeur1 & indice2=valeur2 -->
                <p><a href="02_method_get.php?article=robe&couleur=rouge&prix=70">Une robe rouge</a></p>
                <p><a href="02_method_get.php?article=pull&couleur=blanc&prix=60">Un pull blanc</a></p>
                <p><a href="02_method_get.php?article=slip&couleur=blanc&prix=20">Un slip blanc</a></p>
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