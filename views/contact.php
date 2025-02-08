<?php

    if(isset($_POST['envoyer'])){
       contactController::insertContact($_POST['nom'],$_POST['email'], $_POST['sujet'], $_POST['info']);
    }

?>
            
            <div class="container-xxl py-1 bg-dark hero-header mb-1">
                <div class="container text-center my-5 pt-4 pb-4">
                    <h1 class="display-5 text-white mb-3 animated slideInDown">Nous Contacter</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="acceuil">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="about">A propos</a></li>
                            <li class="breadcrumb-item"><a href="menu">Menu</a></li>
                            <li class="breadcrumb-item"><a href="service">Services</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-3">Contacter nous pour toute question et</h3>
                    <h3>Donner vos avis...</h3>
                </div>
                <div class="row g-4">
                    <div class="col-12">                        
                        <div class="row gy-4" style="margin-left: 10%;">
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Reservation</h5>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>mb.reservation@gmail.com</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">General</h5>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>mb.info@gmail.com</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Technicien</h5>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>mb.tech@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="nom" placeholder="Your Name" required="resquired">
                                            <label for="name">Votre Nom</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="resquired">
                                            <label for="email">Votre Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="sujet" placeholder="Subject" required="resquired">
                                            <label for="subject">Suject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="message" name="info" style="height: 150px" required="resquired"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit" name="envoyer">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        