<?php require_once '../inc/functions.php'; // appel du fichier de fonctions 

$pdoDIA = new PDO( 'mysql:host=localhost;dbname=dialogue',
'root', 
'', 
array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, 
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' 
));

//jevar_dump($pdoDIA);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title> CoursPHP - Chapitre IX - SECURITE - 01_dialogue</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
    
</head>

<body>
    <header class="container-fluid f-header p-2">
        <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP -Chapitre IX - 01 Dialogue</h1>
        <p class="lead text-center text-danger text-decoration-underline">Création d'une BDD</p> 
    </header>
    <!-- fin container header  -->
    
    <div class="container bg-light">
        <section class="row">
            <div class="col-sm-6 border border-info border-1">
            <h2 class="text-primary text-decoration-underline">Création d'une BDD</h2>
            <ul>
                <li>Nom de la BDD: dialogue</li>
                <li>Le nom de la table : commentaires (vérifier que la table et la BDD sont avec le moteur InnoDB)</li>
                <li>La table contient les champs suivants : </li> 
                <li>id_commentaires : INT(5) PK AI</li>
                <li>pseudo : VARCHAR(20)</li>
                <li>message : TEXT</li>
                <li>date_enregistrement : DATETIME</li>
            </ul>
            <h2 class="text-primary text-decoration-underline"></h2>
            <ul>
                <li>Se connecter à la base de données</li>
                <li>Afficher toutes les donnéers ndepuis la table commentaires</li>
                <li>Avec query() et la boucle while</li>
                <li>Compter les enrégistrements</li>
                <li>Et afficher les commentaires dans un tableau HTML</li>
            </ul>
            
            <h2 class="text-primary text-decoration-underline">3- Insertion des données</h2>
            <ul>
                <li>Faire un formulaire HTML</li>
                <li></li>
                <li></li>
            </ul>
            </div> 
            <!-- fin col  -->
            
            <div class="col-md-6 border border-info border-1">
                <h2 class="text-primary text-decoration-underline">Afficher les données</h2>

                <?php 
                $resultat = $pdoDIA->query(" SELECT * FROM commentaires ");
                //jevar_dump($resultat);
                $nbr_commentaires = $resultat->rowCount();
                //jevar_dump($nbr_commentaires);
                ?>
 
                <h5 class="text-danger"> Il ya <?php echo $nbr_commentaires; ?> commentaires</h5>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Pseudo</th>
                            <th>Message</th>
                            <th>Date d'enrtegistrement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ouverture de la boucle while  -->
                        <?php 
                         while ( $commentaires = $resultat->fetch( PDO::FETCH_ASSOC)) { ?>
                         <tr>
                             <td><?php echo $commentaires['id_commentaires']; ?></td>
                             <td><?php echo $commentaires['pseudo'];?></td>
                             <td><?php echo $commentaires['message'];?></td>
                             <td><?php echo $commentaires['date_enregistrement'];?></td>
                         </tr>
                         <!-- fermeture de la boucle  -->
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <!-- fin col  -->

            <div class="col-md-6 border border-info border-1">
                
            </div>
            <!-- fin col  -->
            
        </section>
        <!-- fin row  -->

        <section class="row">

        <div class="col-md-8">
            <h5>Insertion d'un message</h5>
            <form action="" method="POST">

            <div class="fmb-3">
                <label for="pseudo">Votre pseudo</label>
                <input type="text" name="pseudo" id="pseudo" class="form-group"  required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-group">Votre message</label>
                <textarea name="message" id="message" cols="30" rows="5" class="form-group" required></textarea>
            </div>

            <div class="row sb-2">
                <div class="col">
                    <button type="submit" class="btn btn-primary mb-3">Envoyez votre message</button>
                </div>
            </div>
            </form>

        </div>
        </section> 

    </div>            


    
    <!-- footer en require  -->
    <?php require_once '../inc/footer.inc.php'?>

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>


