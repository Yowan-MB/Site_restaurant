<?php
$plats = platsController::getplats();
if (isset($_POST['ajouterpanier'])) {
    $command = new commandeController($_SESSION['utilisateur'], $_POST['id_plat']);
    $command->commander();
}
?>

<div class="container-xxl py-1 bg-dark hero-header mb-1">
    <div class="container text-center my-5 pt-4 pb-4">
        <h1 class="display-5 text-white mb-3 animated slideInDown">Menu</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="acceuil">Accueil</a></li>
                <li class="breadcrumb-item"><a href="about">A propos</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->


<!-- Menu Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Menu</h5>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <hr>
                    <div class="row g-4">
                        <h2 class="text-center">Toutes nos Specialitées</h2>
                        <?php foreach ($plats as $plat): ?>
                            <div class="col-lg-6 C">
                                <div class="d-flex align-items-center" style="margin-right: 3%; margin-bottom: 2%;">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd"
                                            src="./views/includes/assets/img/<?php echo $plat->image ?>"
                                            style=" width: 205px;  height: 155px;" alt="">
                                    </div>

                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>
                                                <?php echo $plat->nom ?>
                                            </span>
                                            <span class="text-primary">
                                                <?php echo $plat->prix ?> dh
                                            </span>
                                        </h5>
                                        <small class="fst-italic">
                                            <?php echo $plat->description ?>
                                        </small>
                                        <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"] == 'connecter'): ?>
                                            <span style="display: flex; justify-content: right; margin-top: 10px;">
                                                <button
                                                    onclick="add_plat_to_panier(<?php echo $_SESSION['utilisateur'] ?> , <?php echo $plat->id ?>)"
                                                    class="btn btn-primary py-1 px-2" type="submit" name="ajouterpanier"
                                                    style="border-radius: 15px; font-size: 12px;" href="">Ajouter
                                                </button></span>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->


<!-- ajax refresh -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>

    function add_plat_to_panier(id_user, id_plat) {
        $.ajax({
            url: 'controllers/commandeController.php',
            method: 'POST',
            data: {
                action: 'commander',
                id_user: id_user,
                id_plat: id_plat 
            },
            success: function (response) {
                console.log(response.data[0]); 
                $('#nombre_commande').html(response.data[0]);
            },
            error: function (xhr, status, error) {
                console.error(error); 
            }
        });
    };

</script>