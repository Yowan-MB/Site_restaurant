<?php

class reservationController{
    static function insertReservation($nom, $mail, $date_heure, $nombre_place, $demande, $id_user){
        $reservation = new reservation($nom, $mail, $date_heure, $nombre_place, $demande, $id_user);
        $reservation->reserver_table();
        $_SESSION["successRes"] = "Reservation effectuée";
        return header('location: transition');
    }
}
?>