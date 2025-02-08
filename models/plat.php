<?php
    Class plat{
        static function fetch(){
            $sql = "SELECT * FROM plats";
            $stmt = db::connect()->prepare($sql);
            $stmt->execute();
            
            $plats = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $plats;
        } 
    }

?>