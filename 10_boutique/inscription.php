<?php require_once 'inc/functions.inc.php'; // 1 FONCTIONS

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

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body> 
<main>
    <header class="container-fluid f-header p-2">
      <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - La boutique - Inscription</h1>
      <p class="lead text-center text-danger text-decoration-underline"></p>
    </header> 
    <!-- fin container-fluid header  -->
    <div class="container bg-white mt-2 mb-2 m-auto p-2">
  
        <section class="row">
  
        <div class="col-md-6">
            <h2 class="text-white text-center bg-info text-decoration-underline">Créez votre compte !</h2> 

            <form action="" method="POST" class="border border-primary p-1">

            <div class="mb-3">
            <!-- https://getbootstrap.com/docs/5.1/forms/checks-radios/ -->
                <label for="sexe" class="form-label">Civilité </label><br>
                <input type="radio" name="sexe" value="m" id="sexe" checked> Homme <br>
                <input type="radio" name="sexe" value="f" id="sexe"> Femme
            </div>

            <div class="row g-3 mb-2">
                <div class="col-md-6 mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" required>
                </div>
                    
                <div class="col-md-6 mb-3">
                    <label for="nom" class="form-label">Nom de famille</label>
                    <input type="text" name="nom" id="nom" class="form-control" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="mail" class="form-label">Email</label>
                <input type="text" name="mail" id="mail" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="pseudo">Votre pseudo</label>
                <input type="text" name="pseudo" id="pseudo" class="form-group"  required>
            </div>

            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" name="" id="adresse" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" name="" id="ville" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="zip_code" class="form-label">Code Postal</label>
                <input type="text" name="" id="zip_code" class="form-control" required>
            </div>

            <div class="row sb-2">
                <div class="col">
                    <button type="submit" class="btn btn-success mb-3">Validez la création</button>
                </div>
            </div>

            </form> 

           
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