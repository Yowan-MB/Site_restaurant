<?php

class reservation
{

    private $nom;
    private $mail;
    private $date_heure;
    private $nombre_place;
    private $demande;
    private $id_user;


    function __construct($nom, $mail, $date_heure, $nombre_place, $demande, $id_user)
    {
        $this->nom = $nom;
        $this->mail = $mail;
        $this->date_heure = $date_heure;
        $this->nombre_place = $nombre_place;
        $this->demande = $demande;
        $this->id_user = $id_user;
    }

    public function reserver_table(){
        $sql = "insert into reservations(nom,mail,date_heure,nombre_place,demande,id_user) values(:nom,:mail,:date_heure,:nombre_place,:demande,:id_user)";
        $stmt = db::connect()->prepare($sql);
        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':mail', $this->mail);
        $stmt->bindParam(':date_heure', $this->date_heure);
        $stmt->bindParam(':nombre_place', $this->nombre_place);
        $stmt->bindParam(':demande', $this->demande);
        $stmt->bindParam(':id_user', $this->id_user);
        $stmt->execute();


    }
}

?>