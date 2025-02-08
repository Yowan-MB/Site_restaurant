<?php


// Créer une classe usersController qui définit les attributs et les méthodes communs aux utilisateurs
class usersController
{

    public $nom_utilisateur;
    private $password_utilisateur;

    // Définir un constructeur qui prend en paramètre le nom et le mot de passe de l'utilisateur
    function __construct($nom, $mdp)
    {

        // Affecter le nom à l'attribut public
        $this->nom_utilisateur = $nom;

        // Affecter le mot de passe à l'attribut privé
        $this->password_utilisateur = $mdp;
    }

    // Définir une méthode publique pour valider le nom et le mot de passe de l'utilisateur
    public function validation()
    {
        // Vérifier si le nom ou le mot de passe sont vides
        if (empty($this->nom_utilisateur) || empty($this->password_utilisateur)) {
            // Si oui, afficher un message d'erreur et rediriger vers la page de connection
            header("location: connection");
            $_SESSION["error1"] = "Veuillez remplir tous les champs";
            exit();
        }
    }

    // Définir une méthode publique pour authentifier l'utilisateur avec son nom et son mot de passe
    public function authentification()
    {
        // Appeler la méthode de validation du nom et du mot de passe
        $this->validation();
        // Utiliser la méthode login de la classe user pour récupérer l'utilisateur correspondant au nom saisi
        $utilisateur = user::login($this->nom_utilisateur);

        // Vérifier si l'utilisateur est vide ou non
        if (empty($utilisateur)) {
            // Si vide, afficher un message d'erreur et rediriger vers la page de connection
            $_SESSION["error2"] = "Cet utilisateur n'existe pas";
            header("location: connection");
            exit();
        }

        // Vérifier si le mot de passe saisi correspond au mot de passe de l'utilisateur
        if ($this->password_utilisateur == $utilisateur->mdp) {
            // Si oui, afficher un message de succès et rediriger vers la page de trandition
            header("location: transition");
            $_SESSION["succes2"] = "Bienvenue chez MB";
            $_SESSION["logged"] = 'connecter';
            $_SESSION["utilisateur"] = $utilisateur->id;
            $_SESSION["utilisateur_nom"]=$utilisateur->nom;
            
            exit();
        } else {
            // Sinon, afficher un message d'erreur et rediriger vers la page de connection
            header("location: connection");
            $_SESSION["error3"] = "Mot de passe incorect";
            exit();

        }
    }

    static public function logout()
    {
        session_destroy();
        header("location: connection");

    }
}

// Créer une classe inscriptionController qui hérite de la classe usersController
class inscriptionController extends usersController
{

    // Définir des attributs privés pour le prénom, l'adresse, le téléphone et la confirmation du mot de passe de l'utilisateur
    private $prenom_utilisateur;
    private $adresse_utilisateur;
    private $telephone_utilisateur;
    private $confirm_password;
    private $password_utilisateur;

    // Modifier le constructeur pour prendre en compte ces informations en plus du nom et du mot de passe
    function __construct($nom, $mdp, $prenom, $adresse, $telephone, $confirm)
    {

        // Appeler le constructeur de la classe parente
        parent::__construct($nom, $mdp);

        // Affecter les informations aux attributs privés
        $this->prenom_utilisateur = $prenom;
        $this->adresse_utilisateur = $adresse;
        $this->telephone_utilisateur = $telephone;
        $this->confirm_password = $confirm;
        $this->password_utilisateur = $mdp;
    }

    // Créer une méthode publique pour vérifier si le prénom, l'adresse, le téléphone la confirmation du mot de passe sont valides
    public function validationInfos()
    {
        // Utiliser la fonction filter_var pour valider le format du téléphone
        if (!preg_match('/^[0-9]+$/', $this->telephone_utilisateur)) {
            // Si le téléphone n'est pas valide, afficher un message d'erreur et rediriger vers la page d'inscription
            $_SESSION["error5"] = "Veuillez entrer un numéro de téléphone valide";
            header("location: inscription");
            exit();
        }

        // Vérifier si le mot de passe et la confirmation du mot de passe sont identiques
        if ($this->password_utilisateur != $this->confirm_password) {

            // Si non, afficher un message d'erreur et rediriger vers la page d'inscription
            $_SESSION["error6"] = "Les mots de passe ne correspondent pas";
            header("location: inscription");
            exit();
        }

        // Vérifier si le prénom ou l'adresse sont vides
        if (empty($this->prenom_utilisateur) || empty($this->adresse_utilisateur)) {

            // Si oui, afficher un message d'erreur et rediriger vers la page d'inscription
            $_SESSION["error7"] = "Veuillez remplir tous les champs";
            header("location: inscription");
            exit();
        }
    }

    // Créer une méthode publique pour vérifier si le nom d'utilisateur existe déjà dans la base de données
    public function verificationNom()
    {
        // Utiliser la méthode login de la classe user pour récupérer l'utilisateur correspondant au nom saisi
        $utilisateur = user::login($this->nom_utilisateur);
        // Si l'utilisateur n'est pas vide, cela signifie qu'il existe déjà dans la base de données
        if (!empty($utilisateur)) {

            // Afficher un message d'erreur et rediriger vers la page d'inscription
            $_SESSION["error8"] = "Ce nom d'utilisateur est déjà pris";
            header("location: inscription");
            exit();
        }
    }
    
    // Créer une méthode publique pour inscrire l'utilisateur dans la base de données
    public function inscription()
    {
        // Appeler les méthodes de validation du nom, du mot de passe et des autres informations
        $this->validation();
        $this->validationInfos();
        $this->verificationNom();

        // Préparer la requête SQL pour insérer l'utilisateur dans la table users avec son nom, son prénom, son adresse, son téléphone et son mot de passe
        $sql = "INSERT INTO users (nom, prenom, adresse, telephone, mdp, confirm) VALUES (:nom, :prenom, :adresse, :telephone, :mdp, :confirm)";
        $stmt = db::connect()->prepare($sql);
        $stmt->bindParam(':nom', $this->nom_utilisateur);
        $stmt->bindParam(':prenom', $this->prenom_utilisateur);
        $stmt->bindParam(':adresse', $this->adresse_utilisateur);
        $stmt->bindParam(':telephone', $this->telephone_utilisateur);
        $stmt->bindParam(':mdp', $this->password_utilisateur);
        $stmt->bindParam(':confirm', $this->confirm_password);


        // Exécuter la requête SQL et vérifier si elle a réussi
        if ($stmt->execute()) {
            // Si la requête a réussi, afficher un message de succès et rediriger vers la page de connection
            $sql = "SELECT id FROM users ORDER BY id DESC LIMIT 1";
            $stmt = db::connect()->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION["succes3"] = "Votre inscription a été effectuée avec succès";
            header("location: transition");
            $_SESSION["logged"] = 'connecter';
            $_SESSION['utilisateur'] = $row['id'];
            $_SESSION["utilisateur_nom"]= $this->nom_utilisateur;
            exit();
        } else {
            // Sinon, afficher un message d'erreur et rediriger vers la page d'inscription
            $_SESSION["error9"] = "Une erreur est survenue lors de votre inscription";
            header("location: inscription");
            exit();
        }
    }
}
?>