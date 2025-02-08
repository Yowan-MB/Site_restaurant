<?php

class newletterController
{
    static function insertletter($mail)
    {
        newletter::add_newletter($mail);   
        $_SESSION["new"] = "incription à la newsletter valider";
    
        header('location: about');
    }
}
?>