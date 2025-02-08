<?php
class valider{

    static public function new_validation($adresse, $telephone, $id_utilisateur)
    {
        $sql = "INSERT INTO facture (id_user, adresse, telephone) VALUES (:id_user, :adresse, :telephone)";
        $stmt = db::connect()->prepare($sql);
        $stmt->bindParam(':id_user', $id_utilisateur);
        $stmt->bindParam(':adresse', $adresse);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->execute();
    }
    }

?>