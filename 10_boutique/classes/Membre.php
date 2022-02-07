<?php

class Membre
{

    /**
     * La classe Membre est la classe Model, elle doit correspondre 
     * à la table membres de la table membres de la bdd Boutique
     * 
     */
    // private int $idMembre;
    private string $pseudo;
    private string $password;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $civilite;
    private string $ville;
    private int $code_postal;
    private string $adresse;
    // private int $statut;

    public function __construct(string $civilite,string $prenom,string $nom,string $email,string $pseudo, string $password,string $adresse,int $code_postal,string $ville)
    {
        $this->civilite = $civilite;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->email = $email;
        $this->pseudo = $pseudo;
        $this->password = $password;
        $this->adresse = $adresse;
        $this->code_postal = $code_postal;
        $this->ville = $ville;
        // $this->statut = $statut;
    }

    public function isExist() {
        $membre = executeRequete( "SELECT * FROM membres WHERE pseudo = :pseudo",
        array(':pseudo'=> $_POST(['pseudo'])));
        if ($membre->rowCount() > 0) 
        return true ;
        else
            return false;
    }

    public function insertMembre() {
        //On exécutre la requête d'insertion 

        // On hâche le mot de passe avec la fonction prédéfinie password_hash avec un algorithme "bcrypt"
        $mdp = password_hash($this->password, PASSWORD_DEFAULT);

        $succes = executeRequete ( "INSERT INTO membres (civilite, prenom, nom, email, pseudo, mdp, adresse, code_postal, ville, statut) VALUES (:civilite, :prenom, :nom, :email, :pseudo, :mdp, :adresse, :code_postal, :ville,0)",
        array(
            ":civilite" => $this->civilite,
            ":prenom" => $this->prenom ,
            ":nom" => $this->nom,
            ":email" => $this->email,
            ":pseudo" => $this->pseudo,
            ":mdp"=>$this-> password, // ici on récupère le mdp de la variable qui contient le hash du  mot de passe
            ":adresse" => $this->adresse,
            ":code_postal" => $this->code_postal,
            ":ville" => $this->ville,
        ));

        return $succes;
    }

    public function effacerMembre() {
        //On exécutre la requête d'insertion 

        // On hâche le mot de passe avec la fonction prédéfinie password_hash avec un algorithme "bcrypt"
        $mdp = password_hash($this->password, PASSWORD_DEFAULT);

        $succes = executeRequete ("DELETE FROM membres WHERE pseudo = :pseudo,
        array(
            ":pseudo" => $this->pseudo,
        ));

        return $succes;
    }

    /**
     * Get the value of idMembre
     */
    // public function getIdMembre(): int
    // {
    //     return $this->idMembre;
    // }

    /**
     * Set the value of idMembre
     *
     * @return  self
     */
    // public function setIdMembre($idMembre)
    // {
    //     $this->idMembre = $idMembre;

    //     return $this;
    // }

    /**
     * Get the value of pseudo
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of civilite
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set the value of civilite
     *
     * @return  self
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get the value of ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of code_postal
     */
    public function getCode_postal()
    {
        return $this->code_postal;
    }

    /**
     * Set the value of code_postal
     *
     * @return  self
     */
    public function setCode_postal($code_postal)
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    /**
     * Get the value of adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of statut
     */
    // public function getStatut()
    // {
    //     return $this->statut;
    // }

    /**
     * Set the value of statut
     *
     * @return  self
     */
    // public function setStatut($statut)
    // {
    //     $this->statut = $statut;

    //     return $this;
    // }

    public function __toString()
    {
        return "Pseudo: " . $this->getPseudo() . "<br>" .
        "Civilité: " . $this->getCivilite() . "<br>".
        "Prénom: " . $this->getPrenom() . "<br>" .
        "Nom: " . $this->getNom() . "<br>" . 
        "Email: " . $this->getEmail() . "<br>". 
        "Password: " . $this->getPassword() . "<br>" .
        "Adresse: " . $this->getAdresse() . "<br>". 
        "Code Postal: " . $this->getCode_postal() . "<br>".
        "Ville: " . $this->getVille() . "<br>";
        // "Statut: " . $this->getStatut() . "<br>";
    }
}
