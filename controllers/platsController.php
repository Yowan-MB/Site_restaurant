<?php

    Class platsController{
        static function getplats(){
            $plat= plat::fetch();
            return $plat; 
        }
        static function add_to_Panier($id_plat){
     
            $_SESSION['panier'] [] = $id_plat;
            header('location: menu');
        }

        static function get_plats_in_panier(){
            $plates = plat::fetch();
           return $plates;
        }

        static function increase($id){
           array_push($_SESSION['panier'] , $id);  
           header("Refresh:0");
        }

        static function decrease(){
        }
    }


?>