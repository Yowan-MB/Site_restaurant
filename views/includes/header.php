<?php

if (isset($_POST['logout'])) {
    usersController::logout();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restaurant Chez MB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="./views/includes/assets/img/2.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./views/includes/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="./views/includes/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./views/includes/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="./views/includes/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./views/includes/assets/css/style.css" rel="stylesheet">

    <style>
        /* ValiderCom */
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

        .co {
            margin: -25px auto;
            width: 800px;
            padding: 30px;
            background-color: transparent;
        }

        .card.box1 {
            width: 350px;
            height: 500px;
            background-color: #fea116;
            color: white;
            border-radius: 0
        }

        .card.box2 {
            width: 450px;
            height: 580px;
            background-color: #ffffff;
            border-radius: 0
        }

        .card.box3 {
            width: 28%;
            height: 404px;
            background-color: #ffffff;
            color: white;
            border-radius: 0;
            margin-top: 12%;
            padding-left: 20%;
        }

        .text {
            font-size: 13px
        }

        .box3 .bt {
            background-color: fea116;
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #ddd;
        }

        .box3 .bt:hover {
            background-color: white;
            color: #fea116;
        }

        .box2 .bt.bar {
            width: 20px;
            background-color: transparent;
            border: none;
            color: #fea116;
        }

        .box2 .bt.bar:hover {
            color: #fea116;
        }

        .box1 .bt {
            background-color: fea116;
            ;
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #ddd;
        }

        .box1 .bt:hover {
            background-color: white;
            color: #fea116;
        }

        .btn.btn-success {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ddd;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            border: none
        }

        .nav.nav-tabs {
            border: none;
            border-bottom: 2px solid #ddd
        }

        .nav.nav-tabs .nav-item .nav-link {
            border: none;
            color: black;
            border-bottom: 2px solid transparent;
            font-size: 14px
        }

        .nav.nav-tabs .nav-item .nav-link:hover {
            border-bottom: 2px solid #fea116;
            color: #fea116;
        }

        .nav.nav-tabs .nav-item .nav-link.active {
            border: none;
            border-bottom: 2px solid #fea116;
        }

        .fc {
            border: none;
            box-shadow: none;
            height: 20px;
            font-weight: 600;
            font-size: 14px;
            padding: 17px 0px;
            letter-spacing: 1.5px;
            border-radius: 7px;
        }

        .inputWithIcon {
            position: relative
        }

        .sss {
            width: 50px;
            height: 20px;
            object-fit: cover
        }

        .inputWithIcon span {
            position: absolute;
            right: 0px;
            bottom: 9px;
            color: #fea116;
            cursor: pointer;
            transition: 0.3s;
            font-size: 14px
        }

        .fc:focus {
            box-shadow: none;
            border-bottom: 1px solid #ddd;
        }

        .btn-outline-primary {
            color: black;
            background-color: #ddd;
            border: 1px solid #ddd
        }

        .btn-outline-primary:hover {
            background-color: #05cf48;
            border: 1px solid #ddd
        }

        .btn-check:active+.btn-outline-primary,
        .btn-check:checked+.btn-outline-primary,
        .btn-outline-primary.active,
        .btn-outline-primary.dropdown-toggle.show,
        .btn-outline-primary:active {
            color: #baf0c3;
            background-color: #3ecc6d;
            box-shadow: none;
            border: 1px solid #ddd
        }



        .f {
            font-size: 14px
        }

        .f .bt {
            width: 100%;
            height: 45px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #3ecc6d;
            border: 1px solid #ddd
        }

        .f .bt:hover {
            background-color: #05cf48
        }

        @media (max-width:750px) {
            .co {
                padding: 10px;
                width: 100%
            }

            .text-green {
                font-size: 14px
            }

            .card.box1,
            .card.box2,
            .card.box3 {
                width: 100%
            }

            .nav.nav-tabs .nav-item .nav-link {
                font-size: 12px
            }

        }

        .box1 form .inputbox {
            position: relative;
            width: 300px;
            margin-top: 17px;
        }

        .box1 form .inputbox input {
            position: relative;
            width: 75%;
            padding: 10px 10px 10px;
            background: transparent;
            outline: none;
            box-shadow: none;
            border: none;
            color: rgb(0, 0, 0);
            font-size: 1em;
            transition: 0.5s;
            z-index: 10;
        }

        .box1 form .inputbox span {
            position: absolute;
            left: 0;
            padding: 20px 0px 10px;
            pointer-events: none;
            color: #5c5c5c;
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
        }

        .box1 .inputbox input:valid~span,
        .box1 .inputbox input:focus~span {
            color: #fff;
            font-size: 0.75em;
            transform: translateY(-34px);
        }

        .box1 form .inputbox i {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 75%;
            height: 2px;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            transition: 0.5s;
            pointer-events: none;
        }

        .box1 .inputbox input:valid~i,
        .box1 .inputbox input:focus~i {
            height: 42px;
        }


        .box2 form .inputbox {
            position: relative;
            width: 300px;
            margin-top: 35px;
        }

        .box2 form .inputbox input {
            position: relative;
            width: 100%;
            padding: 20px 10px 10px;
            background: transparent;
            outline: none;
            box-shadow: none;
            border: none;
            color: rgb(0, 0, 0);
            font-size: 1em;
            transition: 0.5s;
            z-index: 10;
        }

        .box2 form .inputbox span {
            position: absolute;
            left: 0;
            padding: 20px 0px 10px;
            pointer-events: none;
            color: #5c5c5c;
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
        }

        .box2 .inputbox input:valid~span,
        .box2 .inputbox input:focus~span {
            color: #fff;
            font-size: 0.75em;
            transform: translateY(-34px);
        }

        .box2 form .inputbox i {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            transition: 0.5s;
            pointer-events: none;
        }

        .box2 .inputbox input:valid~i,
        .box2 .inputbox input:focus~i {
            height: 44px;
        }
    </style>
</head>

<body>
    <div class="mmm container-xxl bg-white p-0">
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->

        <!-- Navbar & Hero start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="acceuil" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3" style="margin-top: 5px;"></i>Chez MB
                    </h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4" style="margin-top: 5px;">
                        <a href="acceuil" class="nav-item nav-link <?php if ($_GET['page'] == 'acceuil')
                                                                        echo 'active' ?>">Accueil</a>
                        <a href="about" class="nav-item nav-link <?php if ($_GET['page'] == 'about')
                                                                        echo 'active' ?>">A propos</a>
                        <a href="menu" class="nav-item nav-link <?php if ($_GET['page'] == 'menu')
                                                                    echo 'active' ?>">Menu</a>
                        <a href="service" class="nav-item nav-link <?php if ($_GET['page'] == 'service')
                                                                        echo 'active' ?>">Services</a>
                        <a href="contact" class="nav-item nav-link <?php if ($_GET['page'] == 'contact')
                                                                        echo 'active' ?>">Contact
                        </a>
                    </div>
                    <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"] == 'connecter') : ?>
                        <form method="POST">
                            <button type="submit" name="logout" class="btn btn-primary py-2 px-4" style="border-radius: 15px;">Déconnection</button>
                        </form>
                        <a href="panier" class="btn btn-primary py-2 px-4" style="margin-left: 10px; border-radius: 15px; margin-top: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 
                                    12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 
                                    2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                            <span style="font-size: 12px;" id="nombre_commande">
                                <?php $command = commande::nombre_commande_user($_SESSION['utilisateur']);
                                echo $command[0]; ?>
                            </span>

                        </a>
                    <?php else : ?>
                        <a href="connection" class="btn btn-primary py-2 px-4" style="border-radius: 15px;">Connection</a>
                    <?php endif ?>

                </div>
            </nav>