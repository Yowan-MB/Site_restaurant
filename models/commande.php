<?php
class commande
{

    static function fetch($id_commande){
        $sql = "SELECT * FROM commande Where id = :id_commande";
        $stmt = db::connect()->prepare($sql);
        $stmt->bindParam(':id_commande', $id_commande);
        $stmt->execute();
        
        $data = $stmt->fetch(PDO::FETCH_OBJ);
       
        return $data;  
    }
    static public function fetch_commandes_of_user($id_utilisateur)
    {
        $sql = "SELECT commande.id,commande.id_user,commande.id_plat,commande.nbr_plat, plats.image,plats.nom,plats.description,plats.prix FROM `commande` INNER JOIN plats on commande.id_plat = plats.id WHERE commande.id_user = :id_user ";
        $stmt = db::connect()->prepare($sql);
        $stmt->bindParam(':id_user', $id_utilisateur);
        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    static public function delete($id)
    {
        $sql = "DELETE FROM commande WHERE id = :id ";
        $stmt = db::connect()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    static public function add_commende($id_utilisateur, $id_plat)
    {
        $sql = "INSERT INTO commande (id_user, id_plat) VALUES (:id_user, :id_plat)";
        $stmt = db::connect()->prepare($sql);
        $stmt->bindParam(':id_user', $id_utilisateur);
        $stmt->bindParam(':id_plat', $id_plat);
        $stmt->execute();
    }

    static public function update_commande($id_utilisateur, $id_plat)
    {
        $sql = "UPDATE commande
            SET nbr_plat = nbr_plat + 1
            WHERE id_user = :id_user AND
            id_plat = :id_plat
            ";
        $stmt = db::connect()->prepare($sql);
        $stmt->bindParam(':id_user', $id_utilisateur);
        $stmt->bindParam(':id_plat', $id_plat);
        $stmt->execute();
    }

    static public function increase($id_commande)
    {
        $sql = "UPDATE commande
            SET nbr_plat = nbr_plat + 1
            WHERE id = :id_commande
            ";
        $stmt = db::connect()->prepare($sql);
        $stmt->bindParam(':id_commande', $id_commande);
        $stmt->execute();
    }
    static public function decrease($id_commande)
    {
        $sql = "UPDATE commande
            SET nbr_plat = nbr_plat - 1
            WHERE id = :id_commande
            ";
        $stmt = db::connect()->prepare($sql);
        $stmt->bindParam(':id_commande', $id_commande);
        $stmt->execute();
    }
    static public function check_if_exist($id_utilisateur, $id_plat)
    {
        $sql = "SELECT * FROM commande WHERE id_user = :id_user And id_plat = :id_plat";
        $stmt = db::connect()->prepare($sql);
        $stmt->bindParam(':id_user', $id_utilisateur);
        $stmt->bindParam(':id_plat', $id_plat);
        $stmt->execute();

        $data = $stmt->fetch();

        return $data;
    }

    static function nombre_commande_user($id_utilisateur)
    {
        $sql = "SELECT sum(nbr_plat) FROM `commande` WHERE id_user= :id_user";
        $stmt = db::connect()->prepare($sql);
        $stmt->bindParam(':id_user', $id_utilisateur);
        $stmt->execute();

        $data = $stmt->fetch();

        return $data;
    }

    static function nombre_plat_of_commande($id_commande){
        $sql = 'select nbr_plat from commande WHERE id=:id';
        $stmt = db::connect()->prepare($sql);
        $stmt->bindParam(':id', $id_commande);
        $stmt->execute();

        $data = $stmt->fetch();

        return $data;
    }
    static public function supprimer($id_utilisateur)
    {
        $sql = "DELETE FROM commande WHERE id_user = :id_user ";
        $stmt = db::connect()->prepare($sql);
        $stmt->bindParam(':id_user', $id_utilisateur);
        $stmt->execute();

    }

}
?>