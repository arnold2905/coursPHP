<?php 
require_once 'inc/init.inc.php'; // require connexion, session etc...
error_reporting(E_ALL);
// POUR SE CONNECTER ET DECONNECTER
//jevar_dump($_SESSION);

// 2- DECONNEXION DU MEMBRE
//jevar_dump($_GET);
$message = '';
if (isset($_GET['action']) && $_GET['action'] == 'deconnexion') { // si il existe 
  unset($_SESSION['membre']); 
  //jevar_dump($_SESSION);
  $message = '<div class="alert alert-success">Vous êtes déconnecté</div>';
}
// 3- REDIRECTION VERS LA PAGE PROFIL
if (estConnecte()) {
  header('location:profil.php');
  exit();
}

// 1- TRAITEMENT DU FORMULAIRE DE CONNEXION

//jevar_dump($_POST);

if (!empty($_POST)) { 

  if (empty($_POST['pseudo'])) {
    $contenu .='<div class="alert alert-danger">Le pseudo est requis!</div>';
  }

  if (empty($_POST['mdp'])) { // si mdp vide 
    $contenu .='<div class="alert alert-danger">Le mdp est requis!</div>';
  }

  if (empty($_contenu)) { // si la variable $contenu est vide pas d'erreurs
    $_resultat = executeRequete( "SELECT * FROM membres WHERE pseudo = :pseudo",
                      array(
                          ':pseudo' => $_POST['pseudo'],
                      ));
  jevar_dump($_resultat);


    if ( $_resultat -> rowCount() == 1 )  { // s'il y aune ligne c'est qu'il y a ce pseudo et ce membre
      $_membre = $_resultat->fetch( PDO::FETCH_ASSOC);
      //jevar_dump($_membre);

       if(password_verify($_POST['mdp'],$_membre['mdp'])) { // si le hash du mdp de la BDD correspond au mdp du formulaire, alors password_verify retourne true
         //echo'salut le membre';
         $_SESSION['membre'] = $_membre; // création d'une session avec les infos du membre, un tableau multidimensionnel

         //jevar_dump($_SESSION);
        //echo 'toto';
         header('location:profil.php'); // on redirige le membre vers la page profil
         exit();
       } else {
        $contenu .='<div class="alert alert-danger">Erreur sur les identifiants!</div>';
       }
    }   else {
      $contenu .='<div class="alert alert-danger">Erreur sur les identifiants!</div>';
    } // fin vérif password
   

  } // fin if empty $contenu

} // fin vérification formulaire

?>

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>CoursPHP - Chapitre x - La Boutique - connexion</title>

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
      <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - La boutique - Connexion<i class="bi bi-bag-check"></i></h1>
      <p class="lead text-center text-danger text-decoration-underline"></p>
    </header> 
    <!-- fin container-fluid header  -->
    <div class="container bg-white mt-2 mb-2 m-auto p-2">
  
        <section class="row justify-content-center">
  
        <div class="col-md-6 p-2">
            <h2 class="text-white text-center bg-primary text-decoration-underline">Connexion à votre espace</h2>
         
            <?php echo $message; ?>
            
      <form action="" method="POST" class="border border-primary p-1">

        <div class="col-md-6 mb-3">

        <div class="row g-2 mb-3">
          <label for="pseudo" class="form-label">Pseudo*</label>
          <input type="text" name="pseudo" placeholder="pseudo"class="form-control">
        </div>

        <div class="row g-2 mb-2">
          <div class="col-md-6 mb-3">
            <label for="mdp">Votre mot de passe*</label>
            <input type="password" name="mdp" id="mdp" class="form-group" placeholder="Votre mot de passe">
          </div>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">Rester connecté </label>
        </div>

        <div class="row sb-2">
          <div class="col">
            <button type="submit" class="btn btn-success mb-3">Connectez-vous</button>
          </div>

        </form> 
        <!-- fin formulaire  --> 
        </div>
          <!-- fin col -->
  
        </section>
        <!-- fin row -->  

        <!-- <section class="row"> -->
        <!-- <div class="col-md-6"> -->
            <!-- <h2 class="text-primary text-decoration-underline">Titre</h2> -->
        <!-- </div> -->
          <!-- fin col -->

        <!-- </section> -->
    </div>
      <!-- fin container  -->
    </main>
     
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>