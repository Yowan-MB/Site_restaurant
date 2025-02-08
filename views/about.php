<div class="container-xxl py-1 bg-dark hero-header mb-1">
    <div class="container text-center my-5 pt-4 pb-4">
        <h1 class="display-5 text-white mb-3 animated slideInDown">A propos de nous</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="acceuil">Accueil</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">A propos</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->
<?php
if (isset($_SESSION['contact'])) {
    echo ' 
    <div class="container" style="display:flex;justify-content:center">
        <div class="alert alert-danger alert-dismissible fade show animated slideInDown" role="alert" style="width: 32%;HEIGHT: 54PX;FONT-SIZE: 76%; border-radius: 30px;margin-bottom: -4%;">
            <img src="./views/includes/assets/img/validite.png" class="fa-beat-fade" alt="livraison" width="11%">    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>&nbsp; Super!</strong> Information enregistrée!
        </div>
    </div>';
    unset($_SESSION['contact']);
    echo '<script>
    setTimeout(function() {
        document.querySelector(".alert").style.display = "none";
    }, 5000);
    </script>';
}
if (isset($_SESSION['new'])) {
    echo ' 
    <div class="container" style="display:flex;justify-content:center">
        <div class="alert alert-danger alert-dismissible fade show animated slideInDown" role="alert" style="width: 32%;HEIGHT: 54PX;FONT-SIZE: 76%; border-radius: 30px;margin-bottom: -4%;">
            <img src="./views/includes/assets/img/validite.png" class="fa-beat-fade" alt="livraison" width="11%">    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            Inscription à la newsletter,<strong>&nbsp; Validée!</strong> 
        </div>
    </div>';
    unset($_SESSION['new']);
    echo '<script>
    setTimeout(function() {
        document.querySelector(".alert").style.display = "none";
    }, 5000);
    </script>';
}
?>

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                            src="./views/includes/assets/img/restaurant1.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                            src="./views/includes/assets/img/table2.jpg" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                            src="./views/includes/assets/img/table1.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                            src="./views/includes/assets/img/restaurant2.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">A Propos de Nous</h5>
                <h1 class="mb-4">Bienvenue <i class="fa fa-utensils text-primary me-2"></i>Chez MB</h1>
                <p class="mb-4">Chez MB, vous trouverez une cuisine traditionnelle et savoureuse, préparée avec des
                    produits frais
                    et locaux. Venez découvrir nos spécialités du terroir, comme le cassoulet, le confit de canard ou la
                    garbure,
                    dans un cadre chaleureux et convivial. Chez MB, c’est l’adresse idéale pour partager un bon repas en
                    famille
                    ou entre amis.
                </p>
                <p class="mb-4">Si vous cherchez un restaurant qui allie qualité et prix, ne cherchez pas plus loin que
                    Chez MB.
                    Chez MB, vous bénéficierez d’un service attentionné et d’une carte variée, qui saura satisfaire tous
                    les
                    palais. Que vous soyez végétarien, sans gluten ou amateur de viande, vous trouverez votre bonheur
                    chez MB.
                    N’attendez plus, réservez votre table dès maintenant !
                </p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                            <div class="ps-4">
                                <p class="mb-0">Années</p>
                                <h6 class="text-uppercase mb-0">D'Experiences</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                            <div class="ps-4">
                                <p class="mb-0">Nombre</p>
                                <h6 class="text-uppercase mb-0">De variété</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="display: flex; justify-content: center;">
    <hr size="5px" width="90%">
</div><br>
<div class="container-xxl ">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6">
                <p style="text-align: justify; padding-top: 0px; color: black; "> Chez MB, nous vous invitons à un
                    voyage gustatif à
                    travers le monde. Fondé en 2008 par Lozère et Christie, deux amoureux de la cuisine, notre
                    restaurant
                    offre une carte diversifiée et originale, qui combine les influences asiatiques, africaines,
                    européennes
                    et américaines. Vous pouvez commander en ligne et vous faire livrer chez vous ou au travail, à
                    n’importe quelle heure du jour ou de la nuit. C’est l’occasion de découvrir de nouvelles cultures
                    culinaires ! Chez MB, vous trouverez des plats savoureux et variés, comme le couscous marocain,
                    le poulet yassa sénégalais, le pad thaï thaïlandais, le burger américain ou encore la quiche
                    lorraine.
                    Vous pourrez aussi déguster des desserts gourmands, comme le baklava turc, le moelleux au chocolat
                    français, le cheesecake new-yorkais ou le tiramisu italien. Chez MB, il y en a pour tous les goûts
                    et
                    tous les budgets !Ne laissez pas passer cette opportunité de voyager à travers les saveurs du monde,
                    commandez dès maintenant chez MB et régalez-vous !
                </p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.3s"
                    src="./views/includes/assets/img/couple.jpg">
            </div>
        </div>
    </div>
</div> <br>
<div class="container-xxl ">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6">
                <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.3s"
                    src="./views/includes/assets/img/couple.webp">
            </div>
            <div class="col-lg-6">
                <p style="text-align: justify; padding-top: 0px; color: black;"> Notre restaurant est le fruit d’une
                    passion
                    familiale pour la cuisine. Lozère a hérité de son talent de ses parents, qui étaient tous
                    deux de grands chefs cuisiniers. Son père, originaire du Congo Brazzaville, lui a transmis
                    les saveurs et les couleurs de la cuisine africaine, tandis que sa mère, née en France, lui
                    a appris la finesse et l’élégance de la cuisine française. Christie a grandi dans le restaurant
                    de ses grands-parents, qui étaient originaires du Congo, du Maroc et deChine. Elle a ainsi appris
                    l’art
                    des épices, des tajines, des nouilles et des dim sum. Ensemble, ils ont créé Chez MB pour partager
                    leur amour de la cuisine du monde ! Mais ce projet n’a pas été facile à réaliser. Ils ont dû faire
                    face à de nombreux obstacles, comme trouver des fournisseurs locaux et écoresponsables, recruter et
                    former des cuisiniers qualifiés et inventifs, s’adapter aux normes sanitaires et aux préférences des
                    clients, et se faire une place sur le marché compétitif de la restauration en ligne. Ils ont réussi
                    à surmonter ces difficultés grâce à leur savoir-faire, leur dynamisme et leur passion !
                </p>

            </div>
        </div>
    </div>
</div>

<!-- About End -->



<!-- Team Start -->
<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Membres de la Team</h5>
            <h1 class="mb-5">Nos Chefs Cuisiniers</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="./views/includes/assets/img/team-1.jpg" alt="">
                    </div>
                    <h5 class="mb-0">Philippe Etchebest</h5>
                    <small>Chef cuisinier des plats europeens</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="./views/includes/assets/img/team-2.jpg" alt="">
                    </div>
                    <h5 class="mb-0">Pierre Hermé</h5>
                    <small>Chef cuisinier des plats d'Afrique Central</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="./views/includes/assets/img/team-3.jpg" alt="">
                    </div>
                    <h5 class="mb-0">Yannick Alléno</h5>
                    <small>Chef cuisinier des plats d'Afrique du Nord</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="./views/includes/assets/img/team-4.jpg" alt="">
                    </div>
                    <h5 class="mb-0">Guy Savoy</h5>
                    <small>Chef cuisinier des plats Africains</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->