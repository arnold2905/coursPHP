<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title> CoursPHP - Introduction</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <header class="container-fluid-bg-light">
        <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - Introduction</h1>
        <p class="lead text-center text-danger text-decoration-underline">PHP : PHP Hypertext Processor</p>
    </header>

    <div class="container bg-white">
        <section class="row m-2 p-2">
            <div class="col-md-4 border border-primary">
                <h4 class="text-center text-primary text-decoration-underline">A- Réaliser un site dynamique</h4>
                <p>Pour réaliser un site dynamique, nous allons aborder les points suivants:</p>
                <ul>
                    <li>La syntaxe et les caractéristiques du langage PHP (v7)</li>
                    <li>Les notions essentielles du langages SQL permettant la gestion d'une BDD et la réalisation des requêtes de base</li>
                    <li>... et les moyens d'y accéder à l'aide de fonctions spécialisées de PHP(ou d'objet)</li>
                    <li>
                        <!-- mon premier PHP et un "echo" -->
                        <?php echo "<strong>Mon premier texte fait en PHP</strong>"; ?>
                    </li>
                </ul>
            </div>
            <!-- fin col  -->

            <div class="col-md-4 border border-warning">
                <h4 class="text-center text-primary text-decoration-underline">B- Qu'est-ce que PHP?</h4>
                <p>PHP permet de créer des pages interactives. Une page interactive permet à un visiteur de saisir des données personnelles transmises au serveur ou peuvent rester stockées dans une BDD pour être diffusées vers d'autres utilisateurs. Un utilisateur peut par ex. s'enrégistrer et retrouver une page adaptée à ses besoins lors d'une ultérieure visite. Il pourra aussi envoyer des mails et des fichiers sans avoir à passer par son  logiciel de messagerie.<br>
                En  associant toutes ses caractéristiques , il est possible de créer des site de diffusion et de collecte d'informations tout comme des sites e-commerce, de rencontres ou de blogs. </p>
            </div>
            <!-- fin col  -->

            <div class="col-md-4 border border-danger">
                <h4 class="text-center text-primary text-decoration-underline">C- Rappel sur les BDD</h4>
                <p>Pour contenir la masse d'informations collectée , PHP s'appuie généralement sur une BDD, le plus souvent MySQL, mais aussi sur SQLite, et sur des serveurs Apache. PHP, MySQL et Apache forment le trio dominant sur les serveurs Intrernet. Quand ce trio est associé à un serveur Linux on parle de LAMP. PHP est utilisé par les 3/4 de sites de la planète </p>
                <p>Pour utiliser PHP sur un PC, on utilisera <code>XAMPP mais aussi Laragon</code>. Sur Mac on privilégiera <code>MAMPP</code>.</p>
            </div>
            <!-- fin col  -->
        </section>
        <!-- fin row  -->

        <section class="row m-2 p-2">
        <div class="col-md-4 p-1 border border-primary">
             <p>Avec le code suivant éecrit dans un fichier <code>02_info.php</code> placé sur le serveur d'évaluation, on obtient toutes les informations sur le php exécuté dans ce serveur.</p>
             <code>
            &lt;?php <br>
                phpinfo(); // ceci est un commentaire <br>
            ?> <br>    
             </code>
            <a class="btn btn-secondary btn-sm-mb-2" href="02_info.php">PHP infos</a>   
        </div>
        <!-- fin col  -->

        <div class="col-md-4 p-1 border border-warning">
              <p>La fonction <code>date()</code> avec ses arguments qui nous donne l'heure du serveur: </p>  
              <?php //echo date('d/m/Y - H:m:s') ?> 
              <?php echo "<h5> Date du jour : ".date('d/m/Y')." </h5>";
              echo "<p>Bienvenue sur le cours PHP</p>";
              ?> 
        </div>
        <!-- fin col  -->

        <div class="col-md-4 p-1 border border-danger">
             <h4 class="text-center text-primary text-decoration-underline">Le cycle de vie d'une page php</h4>   
             <ol>
                 <li>Envoi d'une requête HTTP(Hyper Text Transfer Protocol) par le navigateur client vers le serveur du type: http://www.monsite.fr/infos.php</li>
                 <li>Interprétation par le serveur du code PHP contenu dans la page appelée.</li>
                 <li>Envoi par le serveur d'un fichier dont le contenu est purement HTML.</li>

                 <p><a href="00-pages/01_page_php.php">Ici un lien vers une autre page PHP</a></p>
             </ol>
        </div>
        <!-- fin col  -->

        </section>
        <!-- fin row  -->

        <section class='row p-2'>
            <div class="col-md-12">
                <h3 class="text-primary text-decoration-underline " >Inclure des fichiers externes en PHP</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Fonction</th>
                            <th>Description</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><code>include("mon_fichier.php")</code></td>
                            <td>Lors de son terprétation par le serveur, cette ligne est remplacée par tout le contenu du fichier précisé en paramètre, il faut fornir le nom et l'adresse complète. En cas d'erreur, par ex. si le fichoier n'est pas trouvé <code>la fonction include</code>ne génère qu'une alerte mais le script continue.</td>
                        </tr>
                        <tr>
                            <td><code>require("mon_fichier.php")</code></td>
                            <td><code>required</code> a désormais un comportement identique à <code>include</code>, à la différence près qu'en cas d'erreur <code>required</code> provoque <code>une erreur fatale (fatal error)</code>et met fin au script.</td>
                        </tr>
                        <tr>
                            <td><code>include_once("mon_fichier.php")
                              <br>require_once("mon_fichier.php")</code></td>
                            <td>Ces fonctions ne sont pas exécutées plusieurs fois, même si on les trouve dans une boucle. Ou si elles ont été exécutées une fois dans le code qui précède. </td> 
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- fin col  -->
        </section>
        <!-- fin row  -->
    </div>
    <!-- fin container  -->

    <?php require_once("../inc/footer.inc.php")?>


    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>