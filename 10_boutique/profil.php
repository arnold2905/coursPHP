<?php require_once 'inc/init.inc.php'; // 1 require connexion, session etc...

//jevar_dump($_SESSION);
//jevar_dump(estConnecte());
//jevar_dump(estAdmin());

if (!estConnecte()) { // accès à la page autorisé quand on est connecté
  header('location:connexion.php'); 
}
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

    <title>CoursPHP - Chapitre x - La Boutique - Profil</title>

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
      <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - La boutique - Profil<i class="bi bi-bag-check"></i></h1>
      <p class="lead text-center text-danger text-decoration-underline"></p>
      
      <section class="row justify-content-center">
  
        <div class="col-md-6 p-2">
            <h2 class="text-white text-center bg-primary text-decoration-underline">Profil</h2>
              <p>Bonjour <?php echo $_SESSION['membre']['prenom']; ?></p>
        
        <!-- fin col -->
        <ul class="nav nav-pills nav-fill">
        <?php 
          if(estAdmin()) {
            echo '<p class="lead">Vous êtes administrateur!</p>';
            echo '<li class=" mx-auto" ><a class="btn btn-primary"href="'.RACINE_SITE.'admin/accueil.php">Espace admin</a></li>';
            echo '<li class=" mx-auto" ><a class="btn btn-success"href="'.RACINE_SITE.'accueil.php">Aller à la boutique</a></li>';
            
          } else {
            echo '<p>Vous êtes connecté rendez-vous à la boutique!</p>';
            echo '<li class="mx-auto"><a class="btn btn-success" href="accueil.php">Retour à la boutique</a></li>';
          }
          if (estConnecte()) {
            //echo 'coucou';
            echo '<a class="btn btn-secondary" href="'.RACINE_SITE.'connexion.php?action=deconnexion">Se déconnecter</a>'; 
          }
        ?>
        </ul>
        </div>
        </section>

    </header> 
    <!-- fin container-fluid header  -->
    <div class="container bg-white mt-2 mb-2 m-auto p-2">
        <div class="container">
          <section class="row m-3 justify-content-center">
          <div class="col-md-4 bg-light">
            <div class="card" style="width: 18rem;">
                <img src="photos/" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $_SESSION['membre']['prenom']. ' ' .$_SESSION['membre']['nom']; ?></h5>
                    <p class="card-text"><?php echo $_SESSION['membre']['email']; ?></p>
                    <a href="#" class="btn btn-primary">Aller A</a>
                    </div>
            </div>
        </div>

        <div class="col-md-8 bg-info">
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
          </div>

          <div class="row g-2 mb-2">
              <div class="col-md-6 mb-3">
                  <label for="mdp"id="placeholder1" >Votre mot de passe*</label>
                  <input type="text" name="mdp" id="mdp" class="form-group" placeholder="Votre mot de passe">
              </div>
              <div class="col-md-6 mb-3">
                  <label for="confmdp" id="placeholder2" >Confirmez votre mot de passe*</label>
                  <input type="text" name="confmdp" id="confmdp" class="form-group" placeholder="Confirmez votre mot de passe!">
              </div>
          </div>

          <div class="col md-6 mb-3">
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
              <a href="profil.php"></a>
        </section>
        </div>
      <!-- fin container  -->
    </main>
     
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>