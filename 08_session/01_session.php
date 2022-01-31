//<?php require_once '../inc/functions.php'; // 1 FONCTIONS

// la variable '$_GLOBALS'récupère toutes les informations
//jevar_dump($GLOBALS);

//echo'<h1 class="display-4 text-primary text-decoration-underline">Cours PHP - $_SESSION</h1>';
//echo '<p>Les données du fichier sont accessibles et manipulables à partir de la superglobale $_SESSION </p>';
// Le principe des sessions : un fichoer temporaire appelé "session" est crée sur le serveur , avec un identifiant unique.Cette session est liée à un internaute , car, dans le même temps, un cookie est déposé sur le poste de l'internaute avec l'identifiant ( il est nommé : PHPSESSID). Ce cookie se détruit lorsque l'on quitte le navigateur.

// Ce fichier de session contient des informations sensibles , et demeure non accessible à l'internaute
session_start();

//utilisation de '$_SESSION'
//$_SESSION['nom'] ='Tintin';
//$_SESSION['pseudo'] ='Tintin';
//$_SESSION['mdp'] ='Milou2022';
//$_SESSION['email'] ='tintin@moulinsart.be';

//echo '<p>- La session est remplie</p>';
// Les sessions se trouvent dans le dossier /tmp/ du serveur càd dans le dossier tmp de Xampp

//jevar_dump($_SESSION);

// Vider une partie de la session avec 'unset()', enlève dans le tableau l'indice 'mdp' et sa valeur

//unset($_SESSION['mdp']);

//jevar_dump($_SESSION);

?>

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - Chapitre 08 - 01 Session</title>

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
      <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - Chapitre 08 - 01 Session</h1>
      <p class="lead text-center text-danger text-decoration-underline">Les données du fichier sont accessibles et manipulables à partir de la superglobale $_SESSION</p>
    </header> 
    <!-- fin container-fluid header  -->
    <div class="container bg-white mt-2 mb-2 m-auto p-2">
  
        <section class="row">
  
        <div class="col-md-6">
            <h2 class="text-primary text-decoration-underline">Principe des sessions</h2>  
            <p>Le principe des sessions : un fichoer temporaire appelé "session" est crée sur le serveur , avec un identifiant unique.Cette session est liée à un internaute , car, dans le même temps, un cookie est déposé sur le poste de l'internaute avec l'identifiant ( il est nommé : PHPSESSID). Ce cookie se détruit lorsque l'on quitte le navigateur.</p> 
        </div>
          <!-- fin col -->
  
        <div class="col-md-6">
            <h2 class="text-primary text-decoration-underline">La session est remplie</h2>

            //<?php 

            // Les sessions se trouvent dans le dossier /tmp/ du serveur càd dans le dossier tmp de Xampp

           // $_SESSION['nom'] ='Tintin';
            //$_SESSION['pseudo'] ='Tintin';
            //$_SESSION['mdp'] ='Milou2022';
           // $_SESSION['email'] ='tintin@moulinsart.be';

            //jevar_dump($_SESSION);

            // Vider une partie de la session avec 'unset()', enlève dans le tableau l'indice 'mdp' et sa valeur
            unset($_SESSION['mdp']);

            //jevar_dump($_SESSION);

            //echo'<hr>';

            // session destroy
            // session_destroy() n'est exécuté qu'à la fin du script.Le fichier temporaire dans le dossier a été supprimé

           // jevar_dump($_SESSION);
            //?>

        </div>
          <!-- fin col -->
          </section>
        <!-- fin row -->  
    </div>
      <!-- fin container  -->
    </main>
      <?php require_once '../inc/footer.inc.php';// FOOTER ?>
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>