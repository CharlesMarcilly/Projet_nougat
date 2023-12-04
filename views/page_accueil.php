<?php afficher("header") ?><br>

    <div class="img_accueil">
        <img src="img/img_accueil.png" alt="photo d'accueil">
    </div>

    
        <div class="container">
            <h1>Du vrai nougat de Montélimar, pour le plaisir de vos papilles</h1><br>
            <p>Du nougat traditionnel, du nougat au M&M'S, nous vous proposons une grande variété de produit</p>
        </div><br><hr><br>

        <h1 id="titre_produit">Nos meilleurs produits, rien que pour vous</h1>
        <div class="container">
            <div class="row">
                <?php foreach($produitsTraditionnels as $key => $produitsTraditionnel){
                    $lien = "?p=produit&id=".$produitsTraditionnel['id'];
                    ?>
                    <div class="col-md-6 col-lg-3 ">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $produitsTraditionnel['img_produit'] ?>" class="card-img-top" alt="photo du produit">
                                <div class="card-body ">
                                    <h5 class="card-title"><?php echo $produitsTraditionnel['nom_produit']?></h5>
                                    <p class="card-text"><?php   echo $produitsTraditionnel['desc_produit'] ?></p>
                                    <p class="card-text"><?php   echo $produitsTraditionnel['prix_kilos'] ?>€</p>
                                    <a href=" <?php echo $lien ?>" class="btn btn-primary">Go somewhere</a>
                                </div>
                        </div>
                    </div>
                <?php } ?><br><br>
            </div>
        </div>


                <div class="container">
                    <div class="row">
                        <?php foreach($produit_caramels as $key => $produit_caramel){
                        $lien = "?p=produit&id=".$produit_caramel['id'];
                        ?>
                        <div class="col-md-2 col-lg-12 ">
                            <div class="card" style="width: 18rem;">
                                <img src="<?php echo $produit_caramel['img_produit'] ?>" class="card-img-top" alt="photo du produit">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $produit_caramel['nom_produit'] ?></h5>
                                    <p class="card-text"><?php   echo $produit_caramel['desc_produit'] ?></p>
                                    <p class="card-text"><?php   echo $produit_caramel['prix_kilos'] ?>€</p>
                                    <a href="<?php echo $lien ?>" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?><br><br>
                    </div>
                </div>


<?php afficher("footer") ?>


