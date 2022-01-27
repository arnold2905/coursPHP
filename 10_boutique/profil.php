<?php require_once 'inc/init.inc.php'; // 1 require connexion, session etc...

jevar_dump($_SESSION);
jevar_dump(estConnecte());
jevar_dump(estAdmin());
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
      <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - La boutique - Profil<i class="bi bi-bag-check"></i></h1>
      <p class="lead text-center text-danger text-decoration-underline"></p>
    </header> 
    <!-- fin container-fluid header  -->
    <div class="container bg-white mt-2 mb-2 m-auto p-2">
  
        <section class="row justify-content-center">
  
        <div class="col-md-6 p-2">
            <h2 class="text-white text-center bg-primary text-decoration-underline">Profil</h2>
              <p>Bonjour <?php echo $_SESSION['membre']['prenom']; ?></p>
        </div>
        <!-- fin col -->

        <?php 
          if(estAdmin()) {
            echo '<p>Vous êtes administrateur!</p>';
          } else {
            echo '<p>Vous êtes connecté rendez-vous à la boutique!</p>';
          }
        ?>
  
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