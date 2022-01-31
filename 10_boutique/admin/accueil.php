<?php
// connexion au fichier init 
require_once '../inc/init.inc.php';

//jevar_dump($_SESSION);
//jevar_dump(estConnecte());
//jevar_dump(estAdmin());
jevar_dump(RACINE_SITE);

if (!estAdmin()) { // accès à la page non autorisé si on n'est pas admin (et pas connecté)
  header('location:connexion.php'); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <h1 class="text-primary">Accueil back office</h1>
</body>
</html>