// Page JS pour Inscription Boutique

//alert('coucou');

// condition - différencier les mots de passe saisis

function inscriptionForm(event) { // récupération du contenu des champs du formulaire
    event.preventDefault();

    console.log( prenom, nom, email, mdp2, confmdp2);

    //expression régulière
    //https://regex101.com/

    let regex = /([a-z0-9](\.?|\_|\-))*@([a-z0-9]{2,})(\.[a-z]{2,}){1,}/;
    // avant le @ on a le droit de mettre de a à z de 0 à 9 un . et _ et - 
    //après @ il faut au minimun 2 caractères puis un . et de à a z et au minimum 2 caractères


// let regex = new RegExp("([a-z0-9](\.?|\_|\-))*@([a-z0-9]{2,})(\.[a-z]{2,}){1,}");

    console.log(regex);

    // Condition 1 - On va vérifier que Nom et Prénom ne sont pas vides
    // classList représente toute les classes de l'élément event.target
    // 'remove' enlève la class
    // add ajoute une class à l'élément event.target
    // console.log(event.target.prenom.classList);


    // condition 2 - différencier les mots de passe saisis

    if ( confmdp !== mdp) {
        //event.target.mdp2.classList.add('error');
        //event.target.mdp2.classList.remove("valide");
        //event.target.confmdp2.classList.add('error');
        //event.target.confmdp2.classList.remove('valide');
        placeholder1.innerHTML ='Vos mots de passe doivent être identiques';
        document.getElementById('placeholder1').classList.add('rouge');
        document.getElementById('placeholder2').innerHTML = ('Vos mots de passe doivent être identiques');
        document.getElementById('placeholder2').classList.add('rouge');
    } else if ( mdp2.length < 4 || confmdp2 > 20) {
        event.target.mdp.classList.add('error');
        event.target.mdp.classList.remove("valide");
        event.target.confmdp.classList.add('error');
        event.target.confmdp.classList.remove("valide");
    } else {
        event.target.mdp.classList.add('valide');
        event.target.mdp.classList.remove("error");
        event.target.confmdp.classList.add('valide');
        event.target.confmdp.classList.remove("error");
    }

}// fin de fonction 

