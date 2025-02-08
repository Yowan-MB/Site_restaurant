<?php
    class user{
        static function login($nom){
             // Préparer la requête SQL pour vérifier si l'utilisateur existe dans la table utilisateur
            $sql = "SELECT * FROM users WHERE nom = :nom";
            $stmt = db::connect()->prepare($sql);
            $stmt->bindParam(':nom', $nom);
            $stmt->execute();
            
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        }
        
        static function getAll(){
            $sql = "SELECT * FROM users";
            $stmt = db::connect()->prepare($sql);
            $stmt->execute();

            $users = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $users;
        }
        static function clients($id){
            $sql = "SELECT * FROM users WHERE id = :id";
            $stmt = db::connect()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        }
    
    }
?>