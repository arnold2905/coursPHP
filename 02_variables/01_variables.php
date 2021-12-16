<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title> CoursPHP - Les variables</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <header class="container-fluid-bg-light">
        <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - Chapitre 02 - Variables</h1>
        <p class="lead text-center text-danger text-decoration-underline">Les variables en PHP</p>
        <!-- Variable indiquant le chemin du fichier  -->
        <?php echo "<p> Exemple de constante en PHP >>> Chemin absolu du fichier en cours : " . __FILE__ . "</p>"; ?>
    </header>

    <div class="container bg-white">
        <div class="row">
            <div class="col-md-6">
                <h2>Les variables</h2>
                <p>Chaque variable possède un identifiant particulier, qui commence toujours par le caractère dollar ($) suivi du nom de la variable. Les règles de création des noms de variable sont les suivantes :</p>
                <ul>
                    <li>Le nom commence par un caractère alphabétique, pris dans les ensembles [a-z], [A-Z] ou par le tiret du bas </li>
                    <li>Les caractères suivants peuvent être les mêmes plus des chiffres.</li>
                    <li>La longueur du nom n’est pas limitée, mais il convient d’être raisonnable sous peine de confusion dans la saisie du code. Il est conseillé de créer des noms de variable le plus « parlant » possible. En relisant le code contenant la variable $nomclient, par exemple, vous comprenez davantage ce que vous manipulez que si vous aviez écrit $x ou $y.</li> 
                </ul>
            </div>
            <!-- fin col  -->

            <div class="col-sm-12 col-md-4">
                <h3>Déclaration des variables</h3>
                <ul>
                    <li>La déclaration des variables n'est pas obligatoire en début de script, c'est une différence avec JS ou le langage C ; ou on peut créer n'importe ou avant de les utiliser.Toutefois, une variable non créée ne provoquera pas d'erreur.</li>
                    <li>Il n'est pas necessaire d'initialiser une variable et une variable n'aura pas de type.</li>
                    <li>Les noms de variables sont sensibles à la casse <code>(maj et min) ; $mavar est différent de $maVar</code>.</li>
                </ul>
            </div>
            <!-- fin col  -->

            <div class="col-sm-12 col-md-4">
                <h3>Nom des variables</h3>

                <div class="row">
                    <div class="col-md-6">
                        <h5>Nom des variables autorisés</h5>
                        <ul>
                            <li><code>$mavar</code></li>
                            <li><code>$_mavar</code></li>
                            <li><code>$M1</code></li>
                            <li><code>$_12345</code></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h5>Nom des variables interdits</h5>
                        <ul>
                            <li><code>$*mavar</code></li>
                            <li><code>$5mavar</code></li>
                            <li><code>$mavar2+</code></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin col  -->

        <section class="row">
            <div class="col-sm-12">
                <h3>Affectation de variables par valeur et par référence</h3>
                <p>Affecter c'est donner une valeur  à une variable. A sa création vous ne donnez pas son type à une variable. C'est la valeur qu'on lui affcete qui donne son type.</p>
                <h5>Exemples</h5>
                <ul>
                <li><code>$mavar = 75;</code></li>
                    <li><code>$mavar = "Paris"; </code> ou <code>$mavar = 'Paris'; </code></li>
                    <li><code>$mavar=7*3+2/5-91%7;</code> : PHP évalue l'expression puis affecte le résultat </li>
                    <li><code>$mavar=mysql_connect($a,$b,$c);</code> : la fonction retourne une ressource </li>
                    <li><code>$mavar=isset($var&&($var==9)); </code> : la fonction retourne une valeur booléenne : TRUE ou FALSE</li>
                </ul>
            </div>
        </section>
        <!-- fin row  -->

        <section class="row">
            <div class="col-sm-12">
                <h2>Les variables prédéfinies</h2>
                <p>PHP dispose d'un grand nombre de variables prédéfinies, qui contiennet des informations à la fois sur le serveur et sur les données qui peuvent transiter entre le poste client et le serveur, comme les valeurs saisies dans un formulaire </p>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="row">Variables</th>
                            <th scope="row">Utilisation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row"><code>$GLOBALS</code></th>
                            <td>Contient le nom et la valeur de toutes les variables globales du script. Les noms des variables sont les clés de ce tableau. $GLOBALS["mavar"] récupère la valeur de la variable $mavar en dehors de sa zone de visibilité (dans les fonctions, par exemple).</td>
                        </tr>

                        <tr>
                            <th scope="row"><code>$_COOKIE</code></th>
                            <td>Contient le nom et la valeur des cookies enregistrés sur le poste client. Les noms des cookies sont les clés de ce tableau.</td>
                        </tr>

                        <tr>
                        <th scope="row"><code>$_ENV</code></th>
                        </tr>

                        <tr>
                            <th scope="row"><code>$_FILES</code></th>
                            <td>Contient le nom des fichiers téléchargés à partir du poste client.</td>
                        </tr>

                        <tr>
                            <th scope="row"><code>$_GET<code></th>
                            <td>Contient le nom et la valeur des données issues d’un formulaire envoyé par la méthode GET. Les <code>noms "name"</code> des champs du formulaire sont les clés de ce tableau.</td>
                        </tr>
                        
                        <tr>
                            <th scope="row"><code>$_POST<code></th>
                            <td>Contient le nom et la valeur des données issues d'un formulaire envoyé par la <code>méthode POST</code>. Le nom des champs de ce formulaire sont les clés de cet array.</td>
                        </tr>

                        <tr>
                            <th scope="row"><code>$_REQUEST<code></th>
                            <td>Contient l'ensemble des <code> variables superglobales $_GET, $_POST, $_COOKIE et $_FILE</code>.</td>
                                <br><code>Une variable superglobale signifie que cette variable est disponible partout dans le script, on peut y avoir accès tout le temps; y compris dans les fonctions.</code>
                        </tr>

                        <tr>
                            <th scope="row"><code>$_SERVER<code></th>
                            <td>Contient les informations liées au serveur web , tel le contenu des en-tête HTTP ou le nom du script en cours d'exécution. Retenons les variables suivantes:  
                                <ul>
                                    <li><code>$_SERVER["HTTP_ACCEPT_LANGUAGE"]</code>: contient le code de la langue du navigateur client.</li>
                                    <li><code>$_SERVER["HTTP_COOKIE"]</code>: contient le nom et la valeur des cookies</li>
                                    <li><code>$_SERVER["HTTP_HOST"]</code>: nous donne le nom de domaine <?php echo $_SERVER["HTTP_HOST"]; ?></li>
                                    <li><code>$_SERVER["SERVER_ADDR"]</code> : nous donne l'adresse IP du serveur <?php echo $_SERVER["SERVER_ADDR"]; ?></li>
                                    <li><code>$_SERVER["PHP_SELF"]</code> contient le nom du script en cours <?php echo $_SERVER["PHP_SELF"]; ?></li>
                                    <li><code>$_SERVER["QUERY_STRING"]</code>contien la chaîne de la requête utilisée pour accéder au script <?php echo $_SERVER["QUERY_STRING"]; ?></li>

                                    <?php echo $_SERVER["HTTP_ACCEPT_LANGUAGE"]; ?>
                                </ul>
                            </td>
                            
                            <tr>
                                <th scope="row"><code>$_SESSION<code></th>
                                <td>Contient l'ensemble des noms des variables de session et leurs valeurs.</td>
                            </tr>
                        </tr>

                    </tbody>
                </table>
            </div>
        </section>
    </div>   

    <?php require_once '../inc/footer.inc.php'?>

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>