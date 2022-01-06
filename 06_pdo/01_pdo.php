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

    <title> CoursPHP - Chapitre VI - 01 PDO</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <header class="container-fluid f-header p-2">
        <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP -Chapitre VI - 01 PDO</h1>
        <p class="lead text-center text-danger text-decoration-underline">Connexion à notre BDD</p> 
    </header>
    <!-- fin container fluid  -->

    <div class="container bg-white mt-2 mb-2 m-auto p-2">

        <section class="row">
            <div class="col-md-6 border border-info border-1">
                <h2 class="text-primary text-decoration-underline"> 1 - Se connecter à la BDD</h2>
                <p><abbr title="PHP Data Object">PDO</abbr> : <code>PHP Data Object</code></p>
                <p>Pour se connecter à la BDD en PDO , on définit une variable de connexion <br>
                <code>
                $pdoENT = new PDO( 'mysql:host=localhost;dbname=entreprise', <br>
                'root', <br>
                '', <br>
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, <br>
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' <br>
                ));
                </code></p>

                <?php 
                // connexion à la BDD
                // passage en variable des informations de connexion
                //$host = "localhost"; // le chemin vers le serveur de données, l'hôte, ici un chemin local 'localhost'
                //$database = 'entreprise'; // le nom de la BDD
               // $user = 'root'; // le nom d'utilisateur pour se connecter à la BDD
                //$psw = ''; //vide pour les utilisateurs de pc et 'root' pour les utilisateurs de mac


                // connexion à la BDD
                // nom de la variable de connexion à la BDD ENT= entreprise,
                // cette variable sert partout où l'on doit se servir de cette connexion
                $pdoENT = new PDO( 'mysql:host=localhost;dbname=entreprise',
                // en premier lieu , le nom du driver ici c'est 'mysql' ( par ailleurs on pourrait avoir 'ibm', 'oracle', ...), le nom du serveur ('host'), le nom de la BBD ('dbname')
                'root', // le pseudo ou l'utilisateur de la BDD
                '', // le mot de passe en local sur PC : il est vide avec "XAMPP"
                // 'root' : cette loigne commentée donne le mot de passe pour MAC avec MAMPP
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // pour afficher les erruers SQL dans le navigateur
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' //pour définir le charset des échanges avec la BDD
                ));

                // $pdoENT est un objet qui répresente la connexion à la BDD
                //jevar_dump($pdoENT);
                //jevar_dump(get_class_methods($pdoENT)); // ici nous aurons la liste des méthodes présentes dans l'objet '$pdoENT'
                ?>
            </div> 
            <!-- fin col  -->
            
            <div class="col-md-6 border border-info border-1">
                <h2 class="text-primary text-decoration-underline">2- Faire des requêtes avec : <code>exec()</code></h2>
                <p><code>La méthode exec()</code> est utilisée pour faire des requêtes qui ne retournent pas de résultats : INSERT, DELETE, UPDATE</p>
                <ul>
                    <li>Succès ; le jevar_dump() de la variable $requête donnera le nombre de lignes affectées par la requête = X</li>
                    <li>Echec : false = 0</li>
                </ul>

                <?php 
                  // on va inserer un nouvel employé dans la BDD 'entreprise'
                  // toutes les lignes sont commentées afin de ne pas de requêtes inutiles en BDD
                  // ma requête que j'aurais testé avant dans phpMyAdmin
                  // INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Jean', 'Saisrien', 'm', 'informatique', '2022-01-03', '2000')

                  //$requete = $pdoENT ->exec( " INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Jean', 'Saisrien', 'm', 'informatique', '2022-01-03', '2000')" );

                  //$requete = $pdoENT ->exec( " DELETE FROM employes WHERE prenom='Jean' AND nom='Saisrien' ");
                  //echo "Dernier id généré en BDO : " .$pdoENT->lastInsertId();
                  
                  //$requete = $pdoENT ->exec( "UPDATE employes SET nom='Bon' WHERE nom='Saisrien'");

                ?>
            </div>
            <!-- fin col  -->

        </section>
        <!-- fin row  -->

        <section class="row">
            <div class="col-md-6 border border-success border-1">
                <h3 class="text-primary text-decoration-underline">3- Faire des requêtes avec <code>query()</code></h3>
                <p>La méthode <code>query()</code> est utilisée pour faire des requêtes qui retournent un ou plusieurs résultats: <code>SELECT</code> mais aussi <code>UPDATE, INSERT, DELETE, </code></p>
                <p>Pour information , on peut mettre dans les paramètres de <code>fetch()</code></p>
                <ul>
                    <li><code>PDO::FETCH_ASSOC</code> : pour obtenir un tableau associatif</li>
                    <li><code>PDO::FETCH_NUM</code> : pour obtenir un tableau avec des indices numériques</li>
                    <li><code>PDO::FETCH_OBJ</code> : pour obtenir un dernier objet</li>
                    <li><code></code> : ou encore des parenthèses vides pour obtenir un mélange de tableau associatif et numérique</li>
                </ul>
                <?php 
                 // SELECT * FROM employes WHERE prenom='fabrice'
                 //1 - on demande des informations à  la BDD car il y a un ou plusieurs résultats
                 $requete = $pdoENT->query ("SELECT * FROM employes WHERE prenom='fabrice'");
                 jevar_dump($requete);
                 //2 -  nous avons un objet $requete nous ne voyons pas encore les données concernant 'Fabrice', pour y accéder nous devons utiliser une méthode de $requete qui s'appelle fetch()

                 $ligne = $requete->fetch( PDO::FETCH_ASSOC);
                 //3 - avec fetch on transforme l'objet $requete, avec le paramètre  ( PDO::FETCH_ASSOC) et un array associatif qua l'on passe dans la variable $ligne , on y trouve les indices , les noms des colonnes de la table, et les valeurs correspondantes
                 jevar_dump($ligne);

                 echo "<p> Nom : " .$ligne['prenom']. " " .$ligne['nom']. " - ID : " .$ligne['id_employes']. "<br>";
                 echo "Salaire : " .$ligne['salaire']. " Euros - Service : ".$ligne ['service']. "<br>";
                 echo "Date d'embauche : " .$ligne['date_embauche']. " - Sexe : " .$ligne ['sexe']."</p>";


                 // exo afficher les infos de l'employé dont l'id est 592
                 $requete = $pdoENT->query (" SELECT * FROM employes WHERE id_employes= 592 " );
                 //jevar_dump($requete);
                 $ligne = $requete->fetch( PDO::FETCH_ASSOC);
                 //jevar_dump($ligne);

                 echo "<p class=\"alert alert-success\"> Nom : " .$ligne['prenom']. " " .$ligne['nom']. " - ID : " .$ligne['id_employes']. "<br>";
                 echo "Salaire : " .$ligne['salaire']. " Euros - Service : ".$ligne ['service']. "<br>";
                 echo "Date d'embauche : " .$ligne['date_embauche']. " - Sexe : " .$ligne ['sexe']."</p>";

                ?>
            </div>
            <!-- fin col  -->

            <div class="col-md-6 border border-success border-1">
                <h3 class="text-primary text-decoration-underline">Faire des requêtes avec <code>query</code> et afficher plusieurs résultats</h3>

                <?php 
                // SELECT * FROM employes ORDER BY nom
                $requete = $pdoENT ->query(" SELECT * FROM employes ORDER BY nom");
                $nbr_employes = $requete->rowCount();
                jevar_dump($nbr_employes);
                echo "<p>Il y a $nbr_employes employes dans l'entreprise</p>";
                while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                echo "<p>Nom : ".$ligne['prenom']. " " .$ligne['nom']." - service : " .$ligne['service']."</p>";  
            
                }
                //Exo : Afficher la liste des différents services dans une ul en mettant un service par li
                //afficher aussi le nombre de service
                // SELECT DISTINCT (service) FROM employes ORDER BY service

                $requete = $pdoENT->query("SELECT  DISTINCT  service FROM employes ;"); /* SELECT * FROM employes ORDER BY nom */
                $service = $requete->rowCount(); /* Compter le nombre d'employer dans l'entreprise */
                jevar_dump($service);
                echo "<p>Il y a $service dans l'entreprise</p>";

                echo "<ul>";
                while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                echo '<li>' . $ligne['service'] . '</li>';
                }
                echo "</ul>";
                // $nbr_employes = $requete->rowCount(); /* Compter le nombre d'employer dans l'entreprise */

                jevar_dump($nbr_employes);

                ?>
            </div>

        </section>
        <!-- fin row  -->

        <section class="row">
                <div class="col-md-12">
                <!-- Exi 1 : Dans une h2 affichez la phrase suivante " Il y a X employés dans l'entreprise"  -->
                <!-- Puis affichez toutes informations des employés dans un tableau html  -->
                <!-- La requête est ensuite triée par sexe et ensuite par nom de famille  -->
                
                <?php 
                $requete = $pdoENT->query("SELECT * FROM employes ORDER BY sexe ASC, nom ASC");
                $nbr_employes = $requete->rowCount();
                //jevar_dump($nbr_employes);

                echo "<h2 class=\"alert alert-warning text-primary\">Il y a $nbr_employes employés dans l'entreprise</h2>";

                echo "<table class=\"table table-striped\">";
                echo "<tr>";
                    echo "<th>Id</th>";
                    echo "<th>Nom, prénom</th>";
                    echo "<th>Service</th>";
                    echo "<th>Salaire mensuel</th>";
                    echo "<th>Date embauche</th>";
                echo "</tr>";
                while ( $ligne = $requete->fetch(PDO::FETCH_ASSOC)) {

                    echo "<tr><td> n° " .$ligne['id_employes']. "</td>";
                    // if ...else
                    if ( $ligne['sexe'] == 'f') {
                        echo "<td>Mme";
                    } else {
                        echo "<td>M.";
                    }

                    echo $ligne['prenom']." " .$ligne['nom']."</td>";
                    echo "<td>" .$ligne['service']."</td>";
                    echo "<td>" .$ligne['salaire']. " € </td>";
                    echo "<td>" .$ligne['date_embauche']. " </td></tr>";
                }
                echo "</table>";
                ?>

                <hr>

                <table class= "table table-striped table-success">
                <tr>
                    <th>Nom, prénom</th>
                    <th>Service</th>
                </tr>
                <?php 
                
                    foreach ( $pdoENT->query ( "SELECT nom, prenom, sexe, service FROM employes ORDER BY sexe ASC, nom ASC") as $infos) {
                        // $infos fabrique un tableau à chaque tour de boucle pour chaque enrégistrement
                        // jevar_dump($infos);
                        echo "<tr>";
                        // if ...else
                        if( $infos['sexe'] == ' f ') {
                            echo "<td>Mme ";
                        } else {
                            echo "<td>M. ";
                        }
                        echo $infos['nom']. " " .$infos['prenom']. "</td><td>" .$infos['service']. "</td><td>";
                    } 
                ?>
                </table>

                <hr>

                <?php 
                    $resultat = $pdoENT->query("SELECT * FROM employes ORDER BY id_employes");
                    $nombre_employes = $resultat->rowCount();
                    //jevar_dump($nombre_employes);
                    echo '<h5 class="text-primary text-decoration-underline"> Il y a '  .$nombre_employes. ' collaborateurs dans l\'entreprise</h5>'; 
                    // les lignes d'en-tête du tableau
                    echo '<table class="table table striped table-dark">';
                    echo '<thead><tr>';
                    echo '<th>ID</th>';
                    echo '<th>Nom</th>';
                    echo '<th>Prénom</th>';
                    echo '<th>Sexe</th>';
                    echo '<th>Service</th>';
                    echo '<th>Date d\'entrée</th>';
                    echo '<th>Salaire</th>';
                    echo '</tr></thead>';
                    echo '<tbody>';

                    // boucle while avec foreach
                    while ( $employes = $resultat->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        foreach ($employes as $informations) {
                            echo '<td>' .$informations. '</td>';
                        }
                        echo '</tr>';
                    }
                    echo '</tbody></table>';
                ?>
            </div>
            <!-- fin col  -->
        </section>
        <!-- fin row  -->


        <section class="row p-2">
            <div class="col-md-10 bg-cyan">
                <h2>5 - Faire des requêtes préparées avec <code>prepare()</code></h2>
                <p>Les requêtes prtéparées sont préconisées si vous exécutez plusieurs fois la même reqûete : pour un gain de temps.</p>
                <p>Elles permettent de "nettoyer" les données et de se prémunir des injections de type SQL qui sont des trentatives de piratage : cf. le chapitre 09 . </p>

                <?php 
                    // on cherche un resultat
                    $nom = 'Lagarde';
                    // l'on prépare la requête

                    $resultat = $pdoENT->prepare("SELECT * FROM employes WHERE nom = :nom"); // :nom est un marqueur vide pour le moment
                    $resultat->bindParam(':nom', $nom);// on fait la liaison du marqueur
                    $resultat->execute();// on exécute la requête
                    $employes = $resultat->fetch(PDO::FETCH_ASSOC);
                    jevar_dump($employes);
                    echo '<p>' .$employes['nom']. ' ' .$employes['prenom']. ' , ' .$employes['service']. ' Date d\'embauche: ' .$employes['date_embauche']. '</p>';

                    echo '<hr>';

                    $sexe = 'f';
                    $resultat = $pdoENT->prepare(" SELECT * FROM employes WHERE sexe = :sexe ");
                    $resultat->bindParam( ':sexe', $sexe);// on lie le marqueur
                    $resultat->execute();// on exécute la requête
                    $nombre_employes = $resultat->rowCount();
                    //jevar_dump($nombre_employes);

                    echo '<h4> Il y a' .$nombre_employes. ' résultats </h4>';
                    while ( $informations = $resultat->fetch(PDO::FETCH_ASSOC)) {
                        //echo $informations['nom'];
                        echo '<p>' .$informations['nom']. ' ' .$informations['prenom']. ' , ' .$informations['service']. ' Date d\'embauche: ' .$informations['date_embauche']. '</p>';
                    }

                    echo '<hr>';

                    // requête préparée sans "bindParam()"
                    $resultat = $pdoENT->prepare(" SELECT * FROM employes WHERE nom = :nom AND prenom = :prenom ");
                    $resultat->execute(array(
                        ':nom' => 'Blanchet',
                        ':prenom' => 'Laura',
                    ));
                    //jevar_dump($resultat);

                    $informations = $resultat->fetch(PDO::FETCH_ASSOC);

                    echo '<p>' .$informations['nom']. ' ' .$informations['prenom']. ' , ' .$informations['service']. ' Date d\'embauche: ' .$informations['date_embauche']. '</p>';

                ?>
            </div>
        </section>
    </div> 
    <!-- fin container  -->

    
    <!-- footer en require  -->
    <?php require_once '../inc/footer.inc.php'?>

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>


