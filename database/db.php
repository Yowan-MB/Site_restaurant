<?php
    class db{
        static public function connect(){
            try{
                $servername = "localhost";
                $username = "root"; 
                $password = "";
                $dbname = "chez_mb";

                $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                return $connection;
            } catch(PDOException $e){
                print $e->getMessage();
                die();
            }
        }
    }   

?>