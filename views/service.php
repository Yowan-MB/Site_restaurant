<div class="container-xxl py-1 bg-dark hero-header mb-1">
    <div class="container text-center my-5 pt-4 pb-4">
        <h4 class="display-5 text-white mb-3 animated slideInDown">Services</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="acceuil">Accueil</a></li>
                <li class="breadcrumb-item"><a href="about">A propos</a></li>
                <li class="breadcrumb-item"><a href="menu">Menu</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Nos Services</h5>
            <h1 class="mb-5">Explorer nos Services</h1>
        </div>
        <div class="row g-4">
            <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <h5>Reservation</h5>
                        <p style="color: black;">Si vous souhaitez venir déguster nos plats dans notre restaurant,
                            nous vous recommandons de réserver votre table en ligne.
                            C’est simple, rapide et pratique ! Voici les étapes à suivre :
                        </p>
                        <ul>
                            <em>
                                <li style="padding-bottom: 5px;">
                                    Inscrivez-vous sur notre site web en remplissant un formulaire avec vos coordonnées
                                    et votre mot de passe.
                                </li>
                                <li style="padding-bottom: 5px;">Connectez-vous à votre compte et cliquez sur le bouton
                                    “Réserver une table”.</li>
                                <li>Remplissez le formulaire de réservation avec le nom à mettre sur la réservation,
                                    la date et l’heure, le nombre de tables et le nombre de personnes.
                                </li>
                                <li style="padding-bottom: 5px;">
                                    Si vous avez des préférences particulières, comme le choix de la table, le type
                                    de menu ou les allergies alimentaires, vous pouvez les indiquer dans l’onglet
                                    “Requête spéciale”.
                                </li>
                                <li style="padding-bottom: 5px;">Cliquez sur le bouton “Réserver maintenant” et vérifiez
                                    les détails de votre réservation.</li>
                                <li>Vous recevrez ensuite un email de confirmation avec un code à présenter à votre
                                    arrivée.</li>
                        </ul>
                        </em>
                        <p style="padding-bottom: 9px;color: black;">
                            En réservant en ligne, vous bénéficiez de nombreux avantages : vous évitez les files
                            d’attente,
                            vous choisissez la table qui vous convient le mieux, vous profitez de promotions exclusives
                            et
                            vous cumulez des points fidélité à échanger contre des cadeaux. Alors n’hésitez plus,
                            réservez
                            votre table chez MB et venez passer un moment agréable dans notre restaurant !
                        </p>
                    </div>
                </div></Br>
                <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"] == 'connecter'): ?>
                    <form method="POST">
                    <a href="booking" class="btn btn-primary py-2 px-4"
                        style="border-radius: 15px; margin-top: 15px;">Reserver</a>                            
                    </form>
                <?php else: ?>
                    <a href="connection" class="btn btn-primary py-2 px-4" style="border-radius: 15px;">Connection</a>
                <?php endif ?>
            </div>
            <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.3s" style="padding-bottom: 5px;">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i></i>
                        <h5>Commande en ligne</h5>
                        <p style="color: black;">Si vous souhaitez savourer nos plats chez vous ou au travail, vous
                            pouvez commander en ligne
                            et vous faire livrer à toute heure du jour ou de la nuit. C’est facile,
                            rapide et pratique ! Voici les étapes à suivre:
                        </p>
                        <ul>
                            <em>
                                <li style="padding-bottom: 5px;">Inscrivez-vous sur notre site web en remplissant un
                                    formulaire avec vos coordonnées et votre mot de passe.</li>
                                <li style="padding-bottom: 5px;">Connectez-vous à votre compte et cliquez sur le bouton
                                    “Commander en ligne”.</li>
                                <li style="padding-bottom: 5px;">
                                    Choisissez les plats que vous voulez parmi notre carte variée et originale.
                                </li>
                                <li style="padding-bottom: 5px;">
                                    Ajoutez les plats à votre panier et indiquez la quantité, le niveau de piquant,
                                    la cuisson ou les accompagnements que vous souhaitez.
                                </li>
                                <li style="padding-bottom: 5px;">
                                    Cliquez sur le bouton “Valider ma commande” et vérifiez les détails de votre
                                    commande.
                                </li>
                                <li style="padding-bottom: 5px;">
                                    Choisissez le mode de paiement qui vous convient et le mode de livraison qui vous
                                    arrange.
                                </li>
                                <li>Vous recevrez ensuite un email de confirmation avec un numéro de suivi de votre
                                    commande.</li>
                            </em>
                        </ul>
                        <p style="color: black;">
                            En commandant en ligne, vous bénéficiez de nombreux avantages : vous gagnez du temps, vous
                            profitez
                            de plats savoureux et variés, vous bénéficiez de promotions exclusives et vous cumulez des
                            points
                            fidélité à échanger contre des cadeaux. Alors n’hésitez plus, commandez chez MB et
                            faites-vous
                            plaisir !
                        </p>
                    </div>
                </div><br>
                <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"] == 'connecter'): ?>
                    <form method="POST">
                    <a href="menu" class="btn btn-primary py-2 px-4"
                        style="border-radius: 15px; margin-top: 15px;">Commander</a>                            
                    </form>                
                <?php endif ?>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->