<?php require_once 'inc/init.inc.php'; // 1 require connexion, session etc...

//jevar_dump($_SESSION);

if (!empty($_POST)) {
    //jevar_dump($_POST);

    if ( !isset($_POST['civilite']) || $_POST['civilite'] != 'm' && $_POST['civilite'] != 'f') {
        $contenu .='<div class="alert alert-danger">La civilité n\'est pas valable !</div>';
    }

    if ( !isset ($_POST['prenom']) || strlen($_POST['prenom']) < 2 || strlen($_POST['prenom'])  > 20) {
        // isset n'est pas isset, .= concaténation piuis affectation, || ou, strlen string length qui vérifie la longueur de la chaîne de caractères
        $contenu .='<div class="alert alert-danger">Votre prénom doit faire entre 2 et 20 caractères</div>';
    }

    if ( !isset ($_POST['nom']) || strlen($_POST['nom']) < 2 || strlen($_POST['nom'])  > 20) {
        $contenu .='<div class="alert alert-danger">Votre nom de famille doit faire entre 2 et 20 caractères</div>';
    }

    // email
    if ( !isset ($_POST['email']) || strlen($_POST['email']) > 50 || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
        // filter_var, filtre une variable , et dans ce filtre on passe une constante prédéfinie (EN MAJUSCULE) qui vérifie le format email
        $contenu .='<div class="alert alert-danger">Votre email n\'est pas conforme !</div>';
    }

    if ( !isset ($_POST['pseudo']) || strlen($_POST['pseudo']) < 4 || strlen($_POST['pseudo'])  > 20) {
        $contenu .='<div class="alert alert-danger">Votre nom de famille doit faire entre 4 et 20 caractères</div>';
    }

    if ( !isset ($_POST['mdp']) || strlen($_POST['mdp']) < 4 || strlen($_POST['mdp'])  > 20) {
        $contenu .='<div class="alert alert-danger">Votre nom de passe doit faire entre 4 et 20 caractères</div>';
    }

    if ( !isset ($_POST['adresse']) || strlen($_POST['adresse']) < 4 || strlen($_POST['adresse'])  > 50) {
        $contenu .='<div class="alert alert-danger">Votre nom de famille doit faire entre 4 et 50 caractères</div>';
    }

    if ( !isset($_POST['code_postal']) || !preg_match( '#[0-9]{5}$#', $_POST['code_postal']) ) {
        $contenu .='<div class="alert alert-danger">Le code postaln\'est pas valable !</div>';
    }

    if ( !isset($_POST['ville']) || strlen($_POST['ville']) < 1 || strlen($_POST['ville'])  > 50) {
        $contenu .='<div class="alert alert-danger">Votre nom de famille doit faire entre 4 et 50 caractères</div>';
    }

    if ( empty($_contenu)) { // si la variable est vide c'est qu'il n'y a aucune erreur dans $_POST
        $membre = executeRequete( " SELECT * FROM membres WHERE pseudo = :pseudo ", 
                                        array(':pseudo' => $_POST['pseudo']));
        
        if ($membre->rowCount() > 0) {
            $contenu .='<div class="alert alert-danger">Le pseudo est indisponible ; veuillez en choisir un autre!</div>';
        } else {
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT); //bcrypt

            $succes = executeRequete ( " INSERT INTO membres (civilite, prenom, nom, email, pseudo, mdp, adresse, code_postal, ville, statut) VALUES (:civilite, :prenom, :nom, :email, :pseudo, :mdp, :adresse, :code_postal, :ville, 0)", 
            array(
                ":civilite" => $_POST['civilite'],
                ":prenom" => $_POST['prenom'],
                ":nom" => $_POST['nom'],
                ":email" => $_POST['email'],
                ":pseudo" => $_POST['pseudo'],
                ":mdp" => $mdp,
                ":adresse" => $_POST['adresse'],
                ":code_postal" => $_POST['code_postal'],
                ":ville" => $_POST['ville'],
            ));
        }                              
    }

}

$host = 'localhost';//le chemin vers le serveur de données
$database = 'maboutique';//le nom de la BDD
$user = 'root';//le nom d'utilisateur pour se connecter
// $psw = '';//mdp PC XAMPP
$psw = '';// mdp pour MAC 

$pdoMAB = new PDO('mysql:host='.$host.';dbname='.$database,$user,$psw,
array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// pour afficher les erreurs SQL dans le navigateur
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// pour définir le charset des échanges avec la BDD
));

?>

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - Chapitre x - La Boutique</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=EB+Garamond&family=Playfair+Display:wght@400;800&display=swap" rel="stylesheet"> 

    <!-- mes styles -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 
<main>
    <header class="container-fluid f-header p-2">
      <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - La boutique - Inscription<i class="bi bi-bag-check"></i></h1>
      <p class="lead text-center text-danger text-decoration-underline"></p>
    </header> 
    <!-- fin container-fluid header  -->
    <div class="container bg-white mt-2 mb-2 m-auto p-2">
  
        <section class="row m-4 justify-content-center">
  
        <div class="col-md-6 p-2">
            <h2 class="text-white text-center bg-primary text-decoration-underline">Créez votre compte !</h2> 
            <?php echo $contenu ?>

            <form action="" method="POST" class="border border-primary p-1">

            <div class="col-md-6 mb-3">
            <!-- https://getbootstrap.com/docs/5.1/forms/checks-radios/ -->
                <label for="civilite" class="form-label">Civilité*</label><br>
                <input type="radio" name="civilite" value="m" id="civilite" checked> Homme
                <input type="radio" name="civilite" value="f" id="civilite"> Femme
            </div>

            <div class="row g-3 mb-2">
                    <!-- col-md-6 mb-3  form-group mt-2 -->
                <div class="col-md-6 mb-3"> 
                    <label for="prenom" class="form-label">Prénom*</label>
                    <input type="text" name="prenom" id="prenom" class="form-control">
                </div>
                    
                <div class="col-md-6 mb-3">
                    <label for="nom" class="form-label">Nom de famille*</label>
                    <input type="text" name="nom" id="nom" class="form-control">
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email*</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="row g-3 mb-2">
                <div class="col-md-6 mb-3">
                    <label for="pseudo">Choisissez un pseudo*</label>
                    <input type="text" name="pseudo" id="pseudo" class="form-group">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mdp">Votre mot de passe*</label>
                    <input type="text" name="mdp" id="mdp" class="form-group">
                </div>
            </div>

            <div class="mb-3">
                <label for="adresse" class="form-label">Votre Adresse</label>
                <textarea name="adresse" id="adresse" class="form-control" rows="3"></textarea>
            </div>

            <div class="row g-3 mb-2" >
                <div class="col-md-6 mb-3">
                    <label for="code_postal" class="form-label">Code Postal</label>
                    <input type="text" name="code_postal" id="code_postal" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ville" class="form-label">Ville</label>
                    <input type="text" name="ville" id="ville" class="form-control">
                </div>
            </div>

            <div class="row sb-2">
                <div class="col">
                    <button type="submit" class="btn btn-success mb-3">Validez</button>
                    <button type="reset" class="btn btn-primary mb-3">Effacez</button>
                </div>
            </div>

            </form> 
            <!-- fin formulaire  --> 
        </div>
          <!-- fin col -->
  
        </section>
        <!-- fin row -->  

        <section class="row">
        <div class="col-md-6">
            <h2 class="text-primary text-decoration-underline">Titre</h2>
        </div>
          <!-- fin col -->

        </section>
    </div>
      <!-- fin container  -->
    </main>
     
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>