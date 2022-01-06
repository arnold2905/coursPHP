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

    <title> CoursPHP - Chapitre VI - Exo PDO</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
    
</head>

<body>
    <h1>Exo PDO</h1>
    <ul>
        <li>require des fonctions</li>
        <li>se connecter à l'entreprise</li>
        <li>afficher dans une ul le prenom, le nom, et le salaire des employés du service commercial, trié par salaire du plus petit au plus grand </li>
        <li>affichez le nombre de commerciaux</li>
        <li>utilisez une requête préparée avec bindParam()</li>
        <li>chercher ensuite sur le web comment mettre le salire au format français ex. 3000,00 € </li>
    </ul>

    <hr>

    <?php
        $pdoENT = new PDO( 'mysql:host=localhost;dbname=entreprise', 'root', '', array( PDO:: ATTR_ERRMODE => PDO:: ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', ) ) ; 

        $service ='commercial';
        $resultat = $pdoENT->prepare("SELECT prenom, nom,  salaire FROM employes WHERE service = :service ORDER BY salaire ASC");
        $resultat->bindParam(':service', $service);
        $resultat->execute();
        $nombre_employes =$resultat->rowCount();
        echo '<h4> Il y a '.$nombre_employes.' employés dans la BDD </h4>';
        
        while ($informations=$resultat->fetch(PDO::FETCH_ASSOC)) {
             echo '<p>'.$informations['nom'].''.$informations['prenom'].''.$informations['salaire'].'</p>';

            }

    ?>
    <!-- footer en require  -->
    <?php require_once '../inc/footer.inc.php'?>

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>


