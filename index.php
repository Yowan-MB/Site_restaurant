<?php
ob_start();
require_once './autoload.php';
require_once './controllers/usersController.php';
include('views/includes/header.php');
$pages = ['acceuil', 'about', 'connection', 'contact', 'inscription', 'booking', 'choix-de-paiement', 
'menu', 'panier', 'service', 'transition', 'paiement-par-carte', 'paiement-cash'];

if (in_array($_GET['page'], $pages)) {
  include('views/' . $_GET['page'] . '.php');
} else {
  echo '404';
}

include('views/includes/footer.php');
ob_end_flush();
?>