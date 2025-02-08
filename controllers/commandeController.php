<?php

class commandeController
{
    private $id_utilisateur;
    private $id_plat;


    function __construct($id_user, $id_plat)
    {
        $this->id_utilisateur = $id_user;
        $this->id_plat = $id_plat;
    }

    public function commander()
    {

        $record = commande::check_if_exist($this->id_utilisateur, $this->id_plat);

        if (!empty($record)) {
            commande::update_commande($this->id_utilisateur, $this->id_plat);
        } else {
            commande::add_commende($this->id_utilisateur, $this->id_plat);
        }



    }

    static public function get_command_of_user($id_user)
    {
        $commandes = commande::fetch_commandes_of_user($id_user);
        $total = 0;
        foreach ($commandes as $commande) {
            $total += $commande->prix * $commande->nbr_plat;
        }
        return [$commandes, $total];
    }

    static function increase_nombre_plat($id_commande)
    {
        commande::increase($id_commande);
        header("Refresh:0");

    }
    static function decrease_nombre_plat($id_commande)
    {

        $commande = commande::fetch($id_commande);

        if ($commande->nbr_plat == 1) {
            self::delete_commandes_of_user($id_commande);
            return;
        }

        commande::decrease($id_commande);
        header("Refresh:0");
    }
    static function delete_commandes_of_user($id_commande)
    {
        commande::delete($id_commande);
        header("Refresh:0");
    }

    static function supprimer_commandes_of_user($id_utilisateur)
    {
        commande::supprimer($id_utilisateur);
        header("Refresh:0");
    }

    static function test($id_user, $id_plat)
    {

        $controller = new commandeController($id_user, $id_plat);
        $controller->commander();

        $data = commande::nombre_commande_user($id_user);
        $response = ['data' => $data];

        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
    static function test2($id_commande)
    {
        
        commandeController::decrease_nombre_plat($id_commande);
        
        $nbr_plats = commande::nombre_plat_of_commande($id_commande);

        $nbr_commandes = commande::nombre_commande_user($_SESSION['utilisateur']);

        $commandes = commande::fetch_commandes_of_user($_SESSION['utilisateur']);
        $total = 0;
        foreach ($commandes as $commande) {
            $total += $commande->prix * $commande->nbr_plat;
        }

        $response = [
            'nbr_plats' => $nbr_plats,
            'nbr_commandes' => $nbr_commandes,
            'prix_total' => $total
        ];

        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
    static function test3($id_commande)
    {
        
        commandeController::increase_nombre_plat($id_commande);
        
        $nbr_plats = commande::nombre_plat_of_commande($id_commande);

        $nbr_commandes = commande::nombre_commande_user($_SESSION['utilisateur']);

        $commandes = commande::fetch_commandes_of_user($_SESSION['utilisateur']);
        $total = 0;
        foreach ($commandes as $commande) {
            $total += $commande->prix * $commande->nbr_plat;
        }

        $response = [
            'nbr_plats' => $nbr_plats,
            'nbr_commandes' => $nbr_commandes,
            'prix_total' => $total
        ];

        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'commander') {

    $id_user = $_POST['id_user'];
    $id_plat = $_POST['id_plat'];

    require_once '../autoload.php';

    commandeController::test($id_user, $id_plat);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'decrease_nombre_plat') {
    $id_commande = $_POST['id_commande'];

    require_once '../autoload.php';

    commandeController::test2($id_commande);

}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'increase_nombre_plat') {
    $id_commande = $_POST['id_commande'];

    require_once '../autoload.php';

    commandeController::test3($id_commande);

}
?>