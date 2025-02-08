<div class="container-xxl py-1 bg-dark hero-header mb-1">
    <div class="container text-center my-5 pt-4 pb-4">
        <h3 class="display-3 text-white mb-3 animated slideInDown">Desirez vous...</h3>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->
<?php
if (isset($_SESSION['succes2'])) {
    echo ' 
    <div class="container" style="display:flex;justify-content:center">
        <div class="alert alert-danger alert-dismissible fade show animated slideInDown" role="alert" style="width: 32%;HEIGHT: 54PX;FONT-SIZE: 76%; border-radius: 30px;margin-bottom: -4%;">
            <img src="./views/includes/assets/img/validite.png" class="fa-beat-fade" alt="livraison" width="11%">    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>&nbsp; Super!</strong> Bienvenue chez MB
        </div>
    </div>';unset($_SESSION['succes2']);
    echo '<script>
    setTimeout(function() {
        document.querySelector(".alert").style.display = "none";
    }, 5000);
    </script>';
}

if (isset($_SESSION['valider'])) {
    echo ' 
    <div class="container" style="display:flex;justify-content:center">
        <div class="alert alert-danger alert-dismissible fade show animated slideInDown" role="alert" style="width: 32%;HEIGHT: 54PX;FONT-SIZE: 76%; border-radius: 30px;margin-bottom: -4%;">
            <img src="./views/includes/assets/img/validite.png" class="fa-beat-fade" alt="livraison" width="11%">    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>&nbsp; Super!</strong> Commande validée. Livraison en cours!
        </div>
    </div>';unset($_SESSION['valider']);
    echo '<script>
    setTimeout(function() {
        document.querySelector(".alert").style.display = "none";
    }, 5000);
    </script>';
}
if (isset($_SESSION['succes3'])) {
    echo ' 
    <div class="container" style="display:flex;justify-content:center">
        <div class="alert alert-danger alert-dismissible fade show animated slideInDown" role="alert" style="width: 32%;HEIGHT: 54PX;FONT-SIZE: 76%; border-radius: 30px;">
            <img src="./views/includes/assets/img/validite.png" class="fa-beat-fade" alt="livraison" width="11%">    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>&nbsp; Super!</strong>Inscription a été effectuée avec succès 
        </div>
    </div>';
    unset($_SESSION['succes3']);
    echo '<script>
    setTimeout(function() {
        document.querySelector(".alert").style.display = "none";
    }, 5000);
    </script>';
} 
if (isset($_SESSION['successRes'])) {
    echo ' 
    <div class="container" style="display:flex;justify-content:center">
        <div class="alert alert-danger alert-dismissible fade show animated slideInDown" role="alert" style="width: 32%;HEIGHT: 54PX;FONT-SIZE: 76%; border-radius: 30px;">
            <img src="./views/includes/assets/img/validite.png" class="fa-beat-fade" alt="livraison" width="11%">    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>  Super!</strong> Reservation effectuée!
        </div>
    </div>';
    unset($_SESSION['successRes']);
    echo '<script>
    setTimeout(function() {
        document.querySelector(".alert").style.display = "none";
    }, 5000);
    </script>';
}
?>
<!-- page Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <h5>Reserver une Table ?</h5>
                    </div>
                </div>
                <div>
                    <a href="booking" class="btn btn-primary py-2 px-4"
                        style="border-radius: 15px; margin-top: 15px;">Reserver</a>
                </div>
            </div>
            <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.3s" style="padding-bottom: 5px;">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i></i>
                        <h5>Commander en ligne ?</h5>
                    </div>
                </div>
                <div>
                    <a href="menu" class="btn btn-primary py-2 px-4"
                        style="border-radius: 15px; margin-top: 15px;">Commander</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page end -->