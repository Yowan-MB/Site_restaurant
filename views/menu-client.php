

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="about.html">A propos</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
      
        
        <!-- Navbar & Hero End -->
        <?php
        if (isset($_SESSION['succes2'])) {                           
            echo "<script> createToast('success') </script>";
            unset($_SESSION['succes2']);
        }
        ?>

        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Menu</h5>
                    <h1 class="mb-5">Plats les plus populaires</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                                href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Populaire</small>
                                    <h6 class="mt-n1 mb-0">Petit-déjeuner</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill"
                                href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">déjeuner</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill"
                                href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Dîner</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <hr>
                            <div class="row g-4">
                                <h2 class="text-center">Specialitées européennes</h2>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff ">
                                        <img class="flex-shrink-0 img-fluid rounded ptd " src="./views/includes/assets/img/porridge-oeuf.jpg"
                                            alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Porridge aux œufs</span>
                                                <span class="text-primary">50dh</span>
                                            </h5>
                                            <small class="fst-italic">Flocons d'avoine, lait, gruyère râpé, bacon,œuf</small>
                                            <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd" src="./views/includes/assets/img/porride-ancien.jpg"
                                            alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Porridge à l'ancienne</span>
                                                <span class="text-primary">50dh</span>
                                            </h5>
                                            <small class="fst-italic">Flocons d'avoine, lait, cannelle, vanille, fruits
                                                secs</small>
                                                <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd" src="./views/includes/assets/img/crepes.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Crêpe au chocolat</span>
                                                <span class="text-primary">45dh</span>
                                            </h5>
                                            <small class="fst-italic">Farine fluide, Oeufs, lait, cacao en
                                                poudre,Chocolat noir </small>
                                                <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd" src="./views/includes/assets/img/crepes-pommes.jpg"
                                            alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Crêpe aux pommes</span>
                                                <span class="text-primary">45dh </span>
                                            </h5>
                                            <small class="fst-italic">Farine fluide, Oeufs, lait, miel, pommes</small>
                                            <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd" src="./views/includes/assets/img/Gauffre-choco.jpg"
                                            alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Gaufre au chocolat</span>
                                                <span class="text-primary">40dh</span>
                                            </h5>
                                            <small class="fst-italic">Farine fluide, oeufs, lait, crème, pépites de
                                                chocolat </small>
                                                <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd" src="./views/includes/assets/img/gauffre-pomme.jpg"
                                            alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Gaufre aux pommes</span>
                                                <span class="text-primary">40dh</span>
                                            </h5>
                                            <small class="fst-italic">Farine fluide, oeufs, lait, crème, pommes</small>
                                            <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd" src="./views/includes/assets/img/oeuf-benedicte.jpg"
                                            alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Oeuf benedicte</span>
                                                <span class="text-primary">35dh</span>
                                            </h5>
                                            <small class="fst-italic">oeufs, muffins anglais, jambon, jaunes d’oeufs,
                                                vinaigre blanc</small>
                                                <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd" src="./views/includes/assets/img/oeuf-nature.jpg"
                                            alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Oeuf nature</span>
                                                <span class="text-primary">35dh</span>
                                            </h5>
                                            <small class="fst-italic">oeufs, jambon, percille </small>
                                            <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <hr><br>
                            <div class="row g-4">
                                <h2 class="text-center">Specialitées asiatique </h2>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd" src="./views/includes/assets/img/youtio.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span> Youtiao et Lait de soja </span>
                                                <span class="text-primary">30dh</span>
                                            </h5>
                                            <small class="fst-italic">Lait, farine, sucre, œuf</small>
                                            <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd" src="./views/includes/assets/img/Nouilles-sautes.jpg"
                                            alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Nouilles sautes</span>
                                                <span class="text-primary">30dh</span>
                                            </h5>
                                            <small class="fst-italic">Nouilles chinoises, soupe de maïzena, huile
                                                d’arachide, viande, légumes</small>
                                                <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd"
                                            src="./views/includes/assets/img/Galettes-aux-oeufs.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Galettes aux œufs</span>
                                                <span class="text-primary">40dh</span>
                                            </h5>
                                            <small class="fst-italic"> Oeufs, lait, fromage, farine</small>
                                            <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd"
                                            src="./views/includes/assets/img/Thé-du-matin-et-dim-sum.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Thé du matin et dim sum</span>
                                                <span class="text-primary">40dh </span>
                                            </h5>
                                            <small class="fst-italic">Thé de Moringa, menthe, nouilles chinoises,
                                                maïzena, crevettes</small>
                                                <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd" src="./views/includes/assets/img/pain-farcis.jpg"
                                            alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Pains farcis à la viande</span>
                                                <span class="text-primary">45dh</span>
                                            </h5>
                                            <small class="fst-italic">Farine, sucre, d’huile d’olive, boeuf haché,
                                                coriandre, tomate , crème, fromage </small>
                                                <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd" src="./views/includes/assets/img/wontons.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Wontons</span>
                                                <span class="text-primary">45dh</span>
                                            </h5>
                                            <small class="fst-italic"> pâte à wonton, boeuf haché, châtaignes, crème,
                                                fromage</small>
                                                <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd" src="./views/includes/assets/img/Crêpe-échalote.jpg"
                                            alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Crêpe à l'échalote</span>
                                                <span class="text-primary">40dh</span>
                                            </h5>
                                            <small class="fst-italic">oeufs, farine, lardons , rhum, échalote</small>
                                            <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd" src="./views/includes/assets/img/Crepe-fromage.jpg"
                                            alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Crêpe au fromage</span>
                                                <span class="text-primary">40dh</span>
                                            </h5>
                                            <small class="fst-italic">oeufs, farine, lardons , rhum, échalote, fromage
                                            </small>
                                            <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <hr><br>
                            <div class="row g-4">
                                <h2 class="text-center">Specialitées d'Afrique </h2>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd" src="./views/includes/assets/img/harira.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Soupe harira </span>
                                                <span class="text-primary">40dh</span>
                                            </h5>
                                            <small class="fst-italic"> viande d’agneau, tomate, soupe de ras el hanout,
                                                pois chiches, coriandre</small>
                                                <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd" src="./views/includes/assets/img/Msemen.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Msemen </span>
                                                <span class="text-primary">40dh</span>
                                            </h5>
                                            <small class="fst-italic">farine, semoule, beurre, miel </small>
                                            <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd" src="./views/includes/assets/img/mikaté.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mikaté</span>
                                                <span class="text-primary">30dh</span>
                                            </h5>
                                            <small class="fst-italic"> Farine, sucre, vanille, oeuf</small>
                                            <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 C">
                                    <div class="d-flex align-items-center ff">
                                        <img class="flex-shrink-0 img-fluid rounded ptd" src="./views/includes/assets/img/boullie.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Bouillie de maïs</span>
                                                <span class="text-primary">30dh </span>
                                            </h5>
                                            <small class="fst-italic">Maïs écraser, lait, sucre, miel</small>
                                            <span style="display: flex; justify-content: right; margin-top: 10px;"><a  class="btn btn-primary py-1 px-2" style="border-radius: 15px; font-size: 12px;" href="">Ajouter</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <hr><br>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="./views/includes/assets/img/menu-1.jpg" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="./views/includes/assets/img/menu-2.jpg" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="./views/includes/assets/img/menu-3.jpg" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="./views/includes/assets/img/menu-4.jpg" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="./views/includes/assets/img/menu-5.jpg" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="./views/includes/assets/img/menu-6.jpg" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="./views/includes/assets/img/menu-7.jpg" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="./views/includes/assets/img/menu-8.jpg" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="./views/includes/assets/img/menu-1.jpg" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="./views/includes/assets/img/menu-2.jpg" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="./views/includes/assets/img/menu-3.jpg" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="./views/includes/assets/img/menu-4.jpg" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="./views/includes/assets/img/menu-5.jpg" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="./views/includes/assets/img/menu-6.jpg" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="./views/includes/assets/img/menu-7.jpg" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="./views/includes/assets/img/menu-8.jpg" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


       