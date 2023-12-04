            <h1 id="titre_produit">Tous nos produits</h1>

        <div class="container">
            <div class="row">
                <?php foreach($produits as $key => $produit){
                    $lien = "?p=produit&id=".$produit['id']; /** Permet de rediriger vers le produit dans la page produit grâce à son id */
                    ?>

                    <div class="col-md-6 col-lg-3 ">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $produit["img_produit"];?>" class="card-img-top" alt="photo du produit">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $produit["nom_produit"]; ?></h5>
                                <p class="card-text"><?php echo   $produit["desc_produit"]; ?></p>
                                <p class="card-text"><?php echo   $produit["prix_kilos"]; ?>€</p>
                                <a href="<?php echo $lien ?>" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>





   
<?php afficher('footer');?>    

