<?php require_once '../inc/functions.php'; // appel du fichier de fonctions ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title> CoursPHP - Exo - Form</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <header class="container-fluid f-header p-2">
        <h1 class="display-4 text-center text-primary text-decoration-underline">CoursPHP - Exo - Form</h1>
        <p class="lead text-center text-danger text-decoration-underline">Exo 4 - Form</p> 
    </header>
    <!-- fin container fluid  -->

    <div class="container bg-light">

        <section class="row border border-primary border-4">
            <div class="col-sm-12 border border-info border-1">
                <h2>Formulaire</h2>
                
                <ul>
                    <li>Exo : Faire un formulaire avec les champs prénom, nom,email, adresse,code postal, ville, et téléphone<br>
                    Le champ prénom n'est pas obligatoire</li>
                    <li>Le traitement du formulaire se fait dans un second fichier "04_traitement_form.php"</li>
                    <li>L'attribut action de la balise "form" contient le nom de ce fichier placé dans le même dossier que notre page avec le form</li>
                </ul>
                <hr>
                <form action="04_traitement_form.php" method="POST">
                <div class="row g-3 mb-2">
                        <div class="col md-4">
                        <label for="prenom">Prénom</label>    
                        <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom" aria-label="Prénom">
                        </div>
                        <div class="col md-4">
                        <label for="nom">Nom</label>   
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom de famille" aria-label="Nom de famille" required>
                        </div>
                        <div class="col md-4">
                        <label for="email">Email</label>   
                        <input type="text" name="email" id="email" class="form-control" placeholder="email" aria-label="email" required>
                        </div>
                </div>
                <div class="row g-3 mb-2">
                        <div class="col md-6">
                        <label for="adresse">Adresse</label>   
                        <input type="text" name="adresse" id="adresse" class="form-control" placeholder="adresse" aria-label="adresse" required>
                        </div>
                        <div class="col">
                        <label for="codepostal">Code Postal</label>   
                        <input type="text" name="codepostal" id="codepostal" class="form-control" placeholder="code postal" aria-label="code postal"required>
                        </div>
                        <div class="col md-6">
                        <label for="ville">Ville</label>   
                        <input type="text" name="ville" id="ville" class="form-control" placeholder="ville" aria-label="ville" required>
                        </div>
                        <div class="col md-6">
                        <label for="telephone">Téléphone</label>   
                        <input type="text" name="telephone" id="telephone" class="form-control" placeholder="telephone" aria-label="telephone"required>
                        </div>

                        <div class="row sb-2 p-2">
                        <div class="col">
                            <button type="submit" class="btn btn-info mb-3">Envoyez</button>
                        </div>
                    </div>
                        
                    </div>

                </form>
            </div> 
            <!-- fin col  -->
            
            <div class="col-md-6 border border-info border-1">
                
            </div>
            <!-- fin col  -->

            <div class="col-md-6 border border-info border-1">
                
            </div>
            <!-- fin col  -->

            
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