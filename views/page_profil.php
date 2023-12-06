<?php
    afficher("header");
?><hr>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="text-center">Profil Utilisateur</h3>
                    </div>
                    <div class="card-body">
                        <h5>Nom: <?php echo $_SESSION["user"]["nom"] ?></h5>
                        <h5>Préom: <?php echo $_SESSION["user"]["prenom"] ?></h5>
                        <h5>Email: <?php echo $_SESSION["user"]["mail"] ?></h5>
                        <h5>Téléphone: <?php echo $_SESSION["user"]["tel"] ?></h5>
                        <h5>Adresse: <?php echo $_SESSION["user"]["adresse"] ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php afficher("footer") ?>