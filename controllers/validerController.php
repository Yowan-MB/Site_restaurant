<?php

class validerController
{
    static function validerCommande($adresse, $telephone, $id_utilisateur)
    {
        valider::new_validation($adresse, $telephone, $id_utilisateur);  
        commande::supprimer($id_utilisateur);    
        $_SESSION["valider"] = "ommande valider. Livraison en cours!"; 
        header('location: transition');
    }
}
?>