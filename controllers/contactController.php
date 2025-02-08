<?php

class contactController
{
    static function insertContact($nom, $email, $sujet, $info)
    {
        contacter::add_contact($nom, $email, $sujet, $info); 
        $_SESSION["contact"] = "incription à la newsletter valider";
      
        return header('location: about');
    }
}
?>