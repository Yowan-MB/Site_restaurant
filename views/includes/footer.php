<?php

if (isset($_POST['iuyiuyiyiuy'])) {
    newletterController::insertletter($_POST['mail']);
}

?>
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-1 mt-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Chez MB</h4>
                <a class="btn btn-link" href="about">A propos de nous</a>
                <a class="btn btn-link" href="contact">Nous Contacter</a>
                <a class="btn btn-link" href="booking">Reservation</a>
                <a class="btn btn-link" href="">politique de confidentialité</a>
                <a class="btn btn-link" href="">Termes et conditions</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>97 Marwa, Casablanca, Maroc</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+212 659 113611</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>chezmb@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Ouverture</h4>
                <h5 class="text-light fw-normal">Lundi - samedi</h5>
                <p>13h00 - 3h00</p>
                <h5 class="text-light fw-normal">Dimanche</h5>
                <p>14h00 - 2h00</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <form method="POST">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                    <p>Si vous souhaitez recevoir en exclusivité nos actualités et nos offres, saisissez votre
                        adresse e-mail.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Votre email" name="mail" required="resquired">
                        <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                            name="iuyiuyiyiuy">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Restaurant Chez MB</a>, Tous droits réservés.

                    Conçu par <a class="border-bottom" href="">Yowan Mberi</a><br><br>
                    Distribué par <a class="border-bottom" href="#" target="_blank">Mb_Serveur</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="acceuil">Accueil</a>
                        <a href="">Cookies</a>
                        <a href="">Aide</a>
                        <a href="">FAQ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="./views/includes/assets/lib/wow/wow.min.js"></script>
<script src="./views/includes/assets/lib/easing/easing.min.js"></script>
<script src="./views/includes/assets/lib/waypoints/waypoints.min.js"></script>
<script src="./views/includes/assets/lib/counterup/counterup.min.js"></script>
<script src="./views/includes/assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="./views/includes/assets/lib/tempusdominus/js/moment.min.js"></script>
<script src="./views/includes/assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="./views/includes/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!--  Javascript -->
<script src="./views/includes/assets/js/main.js"></script>
</body>

</html>