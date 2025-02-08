<?php
if (isset($_POST['login'])) {

    $login_utilisateur = new usersController($_POST['nom'], $_POST['mdp']);
    $login_utilisateur->authentification();
}
?>

<div class="container-xxl py-1 bg-dark hero-header mb-2">
    <div class="container text-center my-5 pt-4 pb-4">
        <h3 class="display-5 text-white mb-3 animated slideInDown">Connection</h3>
    </div>
</div>
</div>

<!-- Navbar & Hero End -->
<?php
if (isset($_SESSION['error2'])) {
    echo ' 
    <div class="container" style="display:flex;justify-content:center">
        <div class="alert alert-danger alert-dismissible fade show animated slideInDown" role="alert" style="width: 32%;HEIGHT: 54PX;FONT-SIZE: 76%; border-radius: 30px;">
            <img src="./views/includes/assets/img/avertissement.png" class="fa-beat-fade" alt="livraison" width="11%">    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>&nbsp; Erreur!</strong> Cet utilisateur n\'existe pas.
        </div>
    </div>';unset($_SESSION['error2']);
    echo '<script>
    setTimeout(function() {
        document.querySelector(".alert").style.display = "none";
    }, 5000);
    </script>';
}

if (isset($_SESSION['error1'])) {
    echo ' 
    <div class="container" style="display:flex;justify-content:center">
        <div class="alert alert-danger alert-dismissible fade show animated slideInDown" role="alert" style="width: 32%;HEIGHT: 54PX;FONT-SIZE: 76%; border-radius: 30px;">
            <img src="./views/includes/assets/img/avertissement.png" class="fa-beat-fade" alt="livraison" width="11%">    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>&nbsp; Erreur!</strong> Veuillez remplir tous les champs
        </div>
    </div>';unset($_SESSION['error1']);
    echo '<script>
    setTimeout(function() {
        document.querySelector(".alert").style.display = "none";
    }, 5000);
    </script>';
}
if (isset($_SESSION['error3'])) {
    echo ' 
    <div class="container" style="display:flex;justify-content:center">
        <div class="alert alert-danger alert-dismissible fade show animated slideInDown" role="alert" style="width: 32%;HEIGHT: 54PX;FONT-SIZE: 76%; border-radius: 30px;">
            <img src="./views/includes/assets/img/avertissement.png" class="fa-beat-fade" alt="livraison" width="11%">    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>&nbsp; Erreur!</strong> Mot de passe incorect
        </div>
    </div>';unset($_SESSION['error3']);
    echo '<script>
    setTimeout(function() {
        document.querySelector(".alert").style.display = "none";
    }, 5000);
    </script>';
}
?>



<!-- Connection Start -->
<div class="container maitre">
    <div class="container con " style="margin-top: -160px; margin-bottom: -160px;">
        <div class="box">
            <span class="borderline"></span>
            <span class="borderline1"></span>
            <form method="POST">
                <h2>Connection</h2>
                <div class="inputbox">
                    <input type="text" name="nom" required="resquired">
                    <span>Nom de l'utilisateur</span>
                    <i></i>
                </div>
                <div class="inputbox">
                    <input type="password" name="mdp" required="resquired">
                    <span>Mot de passe</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="#">Mot de passe oublier</a>
                    <a href="inscription">S'inscrire</a>
                </div>
                <input type="submit" value="connection" name="login">
            </form>
        </div>
    </div>
</div>
<!-- Connection end -->