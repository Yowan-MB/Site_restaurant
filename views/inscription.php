<?php
// Vérifier si le formulaire d'inscription a été soumis avec le bouton login
if (isset($_POST['login'])) {

    // Créer un objet de la classe inscriptionController avec les données saisies par l'utilisateur (nom, mot de passe, prénom, adresse, téléphone et confirmation du mot de passe)
    $inscription_utilisateur = new inscriptionController($_POST['nom'], $_POST['mdp'], $_POST['Prenom'], $_POST['Adresse'], $_POST['Téléphone'], $_POST['confirm']);

    // Appeler la méthode inscription de cet objet pour vérifier les informations de l'utilisateur et l'inscrire dans la base de données
    $inscription_utilisateur->inscription();
}
?>


<div class="container-xxl py-1 bg-dark hero-header mb-2">
    <div class="container text-center my-5 pt-4 pb-4">
        <h3 class="display-5 text-white mb-3 animated slideInDown" style="margin-top: -10px; margin-bottom: -10px;">
            Inscription</h1>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->
<?php
            if (isset($_SESSION['error5'])) {
                echo ' 
                <div class="container" style="display:flex;justify-content:center">
                    <div class="alert alert-danger alert-dismissible fade show animated slideInDown" role="alert" style="width: 32%;HEIGHT: 54PX;FONT-SIZE: 76%; border-radius: 30px;">
                        <img src="./views/includes/assets/img/avertissement.png" class="fa-beat-fade" alt="livraison" width="11%">    
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>&nbsp; Erreur!</strong> Veuillez entrer un numéro de téléphone valide
                    </div>
                </div>';
                unset($_SESSION['error5']);
                echo '<script>
                setTimeout(function() {
                    document.querySelector(".alert").style.display = "none";
                }, 5000);
                </script>';
            }
            if (isset($_SESSION['error6'])) {
                echo ' 
                <div class="container" style="display:flex;justify-content:center">
                    <div class="alert alert-danger alert-dismissible fade show animated slideInDown" role="alert" style="width: 32%;HEIGHT: 54PX;FONT-SIZE: 76%; border-radius: 30px;">
                        <img src="./views/includes/assets/img/avertissement.png" class="fa-beat-fade" alt="livraison" width="11%">    
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>&nbsp; Erreur!</strong> Les mots de passe ne correspondent pas !
                    </div>
                </div>';
                unset($_SESSION['error6']);
                echo '<script>
                setTimeout(function() {
                    document.querySelector(".alert").style.display = "none";
                }, 5000);
                </script>';
            }
            if (isset($_SESSION['error7'])) {
                echo ' 
                <div class="container" style="display:flex;justify-content:center">
                    <div class="alert alert-danger alert-dismissible fade show animated slideInDown" role="alert" style="width: 32%;HEIGHT: 54PX;FONT-SIZE: 76%; border-radius: 30px;">
                        <img src="./views/includes/assets/img/avertissement.png" class="fa-beat-fade" alt="livraison" width="11%">    
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>&nbsp; Erreur!</strong> Veuillez remplir tous les champs !
                    </div>
                </div>';
                unset($_SESSION['error7']);
                echo '<script>
                setTimeout(function() {
                    document.querySelector(".alert").style.display = "none";
                }, 5000);
                </script>';
            }
            if (isset($_SESSION['error8'])) {
                echo ' 
                <div class="container" style="display:flex;justify-content:center">
                    <div class="alert alert-danger alert-dismissible fade show animated slideInDown" role="alert" style="width: 32%;HEIGHT: 54PX;FONT-SIZE: 76%; border-radius: 30px;">
                        <img src="./views/includes/assets/img/avertissement.png" class="fa-beat-fade" alt="livraison" width="11%">    
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>&nbsp; Erreur!</strong> Ce nom d\'utilisateur est déjà pris !
                    </div>
                </div>';
                unset($_SESSION['error8']);
                echo '<script>
                setTimeout(function() {
                    document.querySelector(".alert").style.display = "none";
                }, 5000);
                </script>';
            }
            if (isset($_SESSION['error9'])) {
                echo ' 
                <div class="container" style="display:flex;justify-content:center">
                    <div class="alert alert-danger alert-dismissible fade show animated slideInDown" role="alert" style="width: 32%;HEIGHT: 54PX;FONT-SIZE: 76%; border-radius: 30px;">
                        <img src="./views/includes/assets/img/avertissement.png" class="fa-beat-fade" alt="livraison" width="11%">    
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>&nbsp; Erreur!</strong>Une erreur est survenue lors de votre inscription !
                    </div>
                </div>';
                unset($_SESSION['error9']);
                echo '<script>
                setTimeout(function() {
                    document.querySelector(".alert").style.display = "none";
                }, 5000);
                </script>';
            }
            
            ?>
<!-- inscription debut -->
<div class="container maitre1">
    <div class="container con1 " style="margin-top: -160px; margin-bottom: -160px;">
        <div class="box1">
            <span class="borderline0"></span>
            <span class="borderline10"></span>
            <form method="POST">
                <h2>Inscription</h2>
                <div class="prt1">
                    <div class="inputbox1">
                        <input type="text" name="nom" required="required">
                        <span>Nom </span>
                        <i></i>
                    </div>
                    <div class="inputbox1">
                        <input type="text" name="Prenom" required="required">
                        <span>Prenom</span>
                        <i></i>
                    </div>
                </div>

                <div class="prt1">
                    <div class="inputbox1">
                        <input type="text" name="Adresse" required="required">
                        <span>Adresse </span>
                        <i></i>
                    </div>
                    <div class="inputbox1">
                        <input type="number" name="Téléphone" required="required">
                        <span>Téléphone</span>
                        <i></i>
                    </div>
                </div>

                <div class="prt1">
                    <div class="inputbox1">
                        <input type="password" name="mdp" required="required">
                        <span>Mot de passe </span>
                        <i></i>
                    </div>
                    <div class="inputbox1">
                        <input type="password" name="confirm" required="required">
                        <span>Confirmer mot de passe</span>
                        <i></i>
                    </div>
                </div>
                <div style="margin-left: 5%; margin-top: 5%;">
                    <input type="submit" value="connection" name="login">
                </div>
            </form>
            
        </div>
    </div>
</div>
<!-- inscription fin -->