<?php

require 'classes/Membre.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $membre1=new Membre('pseudo1','&turybfr','pseudo1@gmail.com','Mlle','Dupond','Christelle','3 avenue de Pasteur',75015, 'Paris',1);
    
    echo $membre1; ?>
    
</body>
</html>

