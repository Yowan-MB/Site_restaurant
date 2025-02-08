<div class="container-xxl py-1 bg-dark hero-header mb-1">
    <div class="container text-center my-5 pt-4 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Mon panier</h1>

    </div>
</div>
</div>

<?php [$commandes, $total] = commandeController::get_command_of_user($_SESSION["utilisateur"]);

if (isset($_POST['plus'])) {
    commandeController::increase_nombre_plat($_POST['id_commande']);
}
if (isset($_POST['moins'])) {
    commandeController::decrease_nombre_plat($_POST['id_commande']);
}
if (isset($_POST['retirer'])) {
    commandeController::delete_commandes_of_user($_POST['id_commande']);
}
?>
<!-- Navbar & Hero End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="tab-content">
                <div class="row g-4">
                    <span style="display: flex; justify-content: space-between;">
                        <span>
                            <h2>Toutes mes Commandes</h2>
                        </span>
                        <div class="position-relative" style="max-width: 242px;">
                            <input class="form-control border-primary w-100 py-2 ps-4 pe-5" id="total"
                                style="border-radius: 23px;" type="text" placeholder="<?php echo $total ?> dh" disabled>
                            <?php if (!empty($commandes)): ?>
                                <span>
                                    <a class="btn btn-primary position-absolute top-0 end-0 mt-1 me-1"
                                        style="font-size: 13px;border-radius: 23px;" type="submit" name="choix"
                                        href="choix-de-paiement">Commander</a>
                                </span>
                            <?php endif ?>
                        </div>
                    </span>

                    <hr size="5px" width="90%">
                    <?php foreach ($commandes as $commande): ?>
                        <div class="col-lg-6 C">
                            <div class="d-flex align-items-center" style="margin-right: 3%; margin-bottom: 2%;">
                                <div class="d-flex align-items-center ff">
                                    <img class="flex-shrink-0 img-fluid rounded ptd"
                                        src="./views/includes/assets/img/<?php echo $commande->image ?>"
                                        style=" width: 205px;  height: 155px;" alt="">
                                </div>

                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between  ">
                                        <span>
                                            <?php echo $commande->nom ?>
                                        </span>
                                        <span class="text-primary">
                                            <?php echo $commande->prix ?> dh
                                        </span>
                                    </h5>
                                    <small class="fst-italic">
                                        <?php echo $commande->description ?>
                                    </small><Br>
                                    <span style="display:flex; justify-content: space-between; ">
                                        <span>
                                            <form method="POST">
                                                <input type="hidden" value="<?php echo $commande->id ?>" name="id_commande">
                                                <span style="display: flex; justify-content: left; margin-top: 10px;">
                                                    <button class="retirer" type="submit" name="retirer"
                                                        style="background-color: transparent;background-repeat: no-repeat;border: none;">
                                                        <img class="zoom-effect"
                                                            src="./views/includes/assets/img/corbeille.png" alt="retirer"
                                                            height="20px" width="20px">
                                                    </button>
                                                </span>
                                            </form>
                                        </span>
                                        <span style="display:flex; ">
                                            <span style="margin-top: 10px;">

                                                <input type="hidden" value="<?php echo $commande->id ?>" name="id_commande">
                                                <button class="btn py-1 px-2" style="font-size: 22px;" color: #fea116;
                                                    href="" name="moins"
                                                    onclick="supprimer(<?php echo $commande->id ?>)">-</button>

                                            </span>
                                            <span style="margin-top: 22%;">
                                                <span style="font-size: 20px;" id="nombre_plat<?php echo $commande->id ?>">
                                                    <?php
                                                    echo $commande->nbr_plat
                                                        ?>
                                                </span>
                                            </span>
                                            <span style="margin-top: 10px;">
                                                <input type="hidden" value="<?php echo $commande->id ?>" name="id_commande">
                                                <button class="btn py-1 px-2" style="font-size: 22px; " href="" name="plus"
                                                    onclick="ajouter(<?php echo $commande->id ?>)">+</button>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                    <?php if (empty($commande)): ?>
                        <div class="container " style="margin-top: 87px;margin-bottom: 90px;">
                            On dirait que votre panier est vide…
                        </div>
                    <?php endif ?>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- ajax refresh -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>

    function supprimer(id_commande) {

        $.ajax({
            url: 'controllers/commandeController.php',
            method: 'POST',
            data: {
                action: 'decrease_nombre_plat',
                id_commande: id_commande,
            },
            success: function (response) {
                if ($('#nombre_plat' + id_commande).html() == 1) {
                    // Rafraîchir la page actuelle
                    location.reload();
                    return;
                }
                $('#nombre_plat' + id_commande).html(response.nbr_plats[0]);
                $('#nombre_commande').html(response.nbr_commandes[0]);
                $('#total').val(response.prix_total + ' dh');
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    };

    function ajouter(id_commande) {
        $.ajax({
            url: 'controllers/commandeController.php',
            method: 'POST',
            data: {
                action: 'increase_nombre_plat',
                id_commande: id_commande,
            },
            success: function (response) {
                console.log(response.prix_total);
                $('#nombre_plat' + id_commande).html(response.nbr_plats[0]);
                $('#nombre_commande').html(response.nbr_commandes[0]);
                $('#total').val(response.prix_total + ' dh');
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    };

</script>