<?php

class contacter{

    static public function add_contact($nom, $email, $sujet, $info)
    {
        $sql = "INSERT INTO contact (nom, email, sujet, info) VALUES (:nom, :email, :sujet, :info)";
        $stmt = db::connect()->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':sujet', $sujet);
        $stmt->bindParam(':info', $info);
        $stmt->execute();
    }
    }


?>