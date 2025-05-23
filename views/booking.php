<?php

    if(isset($_POST['reservation'])){
       reservationController::insertReservation($_POST['nom'],$_POST['mail'], $_POST['date_heure'], $_POST['nombre_place'],$_POST['demande'],$_SESSION["utilisateur"]);
    }

?>
<div class="container-xxl py-1 bg-dark hero-header mb-1">
    <div class="container text-center my-5 pt-4 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Réservation</h1>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->


<!-- Reservation Start -->
<div class="container-xxl py-3 px-0 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 0%;">
    <div class="row g-0">
        <div class="col-md-6">
            <div class="video">
                <button type="button" class="btn-play" data-bs-toggle="modal"
                    data-src="./views/includes/assets/img/video.mp4" data-bs-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                <h4 class="text-white mb-4">Réserver votre table</h4>
                <form method='POST'>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" name="nom">
                                <label for="name"> Votre nom </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" name="mail">
                                <label for="email">Votre mail</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="datetime-local" class="form-control datetimepicker-input" id="datetime" name="date_heure"
                                    placeholder="Date & Time" >
                                <label for="datetime">Date & Heure</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="select1" name="nombre_place">
                                    <option value="2">2 place</option>
                                    <option value="4">4 place</option>
                                    <option value="6">6 place</option>
                                </select>
                                <label for="select1">Nombre de place</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Special Request" id="message"
                                    style="height: 100px" name="demande"></textarea>
                                <label for="message">Demande spéciale</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit" name="reservation">Réserver</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Reservation Start -->


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $datetime = $_POST['datetime'];
    $numPlaces = $_POST['numPlaces'];
    $specialRequest = $_POST['specialRequest'];
}
?>