<?php [$commandes, $total] = commandeController::get_command_of_user($_SESSION["utilisateur"]); ?>


<div class="container-xxl py-1 bg-dark hero-header mb-1">
    <div class="container text-center my-5 pt-4 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Valider votre Panier</h1>
    </div>
</div>
</div>

<div class="container co d-md-flex align-items-center">
    <div class="card box1 shadow-sm p-md-3 p-md-3 p-3">
        <form method="POST">
            <div style=" margin-left: 5%; margin-top: -6%; margin-bottom: 13%;">
                <span class="h5 fw-bold m-0">Commander par <span>
                        <strong>
                            <?php echo ucfirst($_SESSION["utilisateur_nom"]) ?>
                        </strong>
                    </span>
                </span>
            </div>
            <div class="container">
                <div style="font-size: 90%;">
                    <div style="display: flex; justify-content: space-between; ">
                        <span>
                            Nombre plat :
                        </span>
                        <span>
                            <?php $command = commande::nombre_commande_user($_SESSION['utilisateur']);
                            echo $command[0]; ?>
                        </span>
                    </div>
                    <div style="display: flex; justify-content: space-between; ">
                        <span>
                            Total commande :
                        </span>
                        <span>
                            <?php echo $total ?> dh
                        </span>
                    </div>
                    <div style="display: flex; justify-content: space-between; ">
                        <span>
                            Frais de Livraison :
                        </span>
                        <span>
                            15 dh
                        </span>
                    </div>
                    <div style="display: flex; justify-content: space-between; ">
                        <span>
                            Net à payer :
                        </span>
                        <span>
                            <?php echo $total += 15 ?> dh
                        </span>
                    </div>
                </div>
                <div class="inputbox">
                    <input type="text" name="nom" required="resquired">
                    <span>Adresse </span>
                    <i></i>
                </div>
                <div class="inputbox" style="margin-top: 6%; margin-bottom: 14%">
                    <input type="tel" name="nom" required="resquired">
                    <span>Telephone </span>
                    <i></i>
                </div>
                <div style="font-size: 90%;">
                    <span>
                        <span class="far fa-calendar-alt"> </span>
                        <span>
                            Date Livraison :
                        </span><br>
                        <span style="margin-left: 39%; font-size: 80%;">
                            <?php
                            // Définit le fuseau horaire par défaut à utiliser.
                            date_default_timezone_set('Africa/Casablanca');

                            // Définit les informations de localisation à utiliser.
                            setlocale(LC_TIME, 'fr_FR.UTF-8');

                            // Récupère la date et l'heure courantes au format désiré.
                            $dateCourante = strftime('%A %d %B %Y');

                            // Convertit en français les caractères spéciaux éventuels.
                            $dateCourante = utf8_encode($dateCourante);

                            // Affiche la date en français.
                            echo $dateCourante;
                            ?>

                        </span>
                </div><br><br>
                <div class="d-flex align-items-center text" style="justify-content: space-around; margin-top: 21%;">
                    <div class="d-flex flex-column text">
                        <span>
                            Nous contacter
                        </span>
                    </div>
                    <div class="btn btn-primary rounded-circle">
                        <a href="mailto:chezmb@gmail.com" style="color: white;">
                            <span class="fas fa-comment-alt"></span>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="card box2 shadow-sm">
        <div class="d-flex align-items-center justify-content-between p-md-5 p-4">
            <span class="h5 fw-bold m-0">Methodes de paiement </span>
        </div>
        <ul class="nav nav-tabs mb-3 px-md-4 px-2">
            <li class="nav-item"> <a class="nav-link px-2 active" aria-current="page" href="#">Carte de crédit</a> </li>
        </ul><br>

        <form class="f" action="">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-column px-md-5 px-4 mb-4">
                        <span>Carte de crédit</span>
                        <div class="inputWithIcon" style="border-bottom: 1px solid #ddd;"> <input class="fc"
                                style="width: 70%;" type=" text" placeholder="0000 0000 0000 0000">
                            <span>
                                <img class="sss"
                                    src="https://www.freepnglogos.com/uploads/mastercard-png/mastercard-logo-logok-15.png"
                                    alt="">
                            </span>
                        </div>
                    </div>
                </div>
                <span></span>
                <div class="col-md-6 ">
                    <div class="d-flex flex-column ps-md-5 px-md-0 px-4 mb-4">
                        <span>Expiration
                            <span class="ps-1">
                                Date
                            </span>
                        </span>
                        <span class="inputWithIcon" style="border-bottom: 1px solid #ddd;"> <input type="date"
                                class="fc"> </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column pe-md-5 px-md-0 px-4 mb-4"> <span>Code CVV</span>
                        <div class="inputWithIcon" style="border-bottom: 1px solid #ddd;"> <input type="password"
                                class="fc" placeholder="123"> <span class="fas fa-lock"></span> </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column px-md-5 px-4 mb-4"> <span>Nom</span>
                        <div class="inputWithIcon" style="border-bottom: 1px solid #ddd;"> <input
                                class="fc text-uppercase" type="text" style="width: 70%;" placeholder=" votre nom">
                            <span class="far fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 px-md-5 px-4 mt-3">
                    <CEnter>
                        <div class="btn btn-primary w-50" style="border-radius: 20px;">Payer &nbsp;
                            <?php echo $total ?> dh
                        </div>
                    </CEnter>
                </div>
            </div>
        </form>

    </div>

</div>