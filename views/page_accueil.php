<?php afficher("header") ?><br>

    <div class="img_accueil">
        <img src="img/img_accueil.png" alt="photo d'accueil">
    </div>

    
        <div class="container">
            <h1>Du vrai nougat de Montélimar, pour le plaisir de vos papilles</h1><br>
            <p>Du nougat traditionnel, du nougat au M&M'S, nous vous proposons une grande variété de produit</p>
        </div><br><hr><br>

        <h1 id="titre_produit">Page produits</h1>
        <div class="allCards">
            <div class="card" style="width: 18rem;">

                <?php foreach($produitsTraditionnels as $key => $produitsTraditionnel){?>
                <img src="<?php echo $produitsTraditionnel['img_produit'] ?>" class="card-img-top" alt="photo du produit">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produitsTraditionnel['nom_produit']?></h5>
                    <p class="card-text"><?php   echo $produitsTraditionnel['desc_produit'] ?></p>
                    <p class="card-text"><?php   echo $produitsTraditionnel['prix_kilos'] ?>€</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div><?php } ?><br><br>


            <div class="allCards">
                <div class="card" style="width: 18rem;">

                <?php foreach($produit_caramels as $key => $produit_caramel){?>
                <img src="<?php echo $produit_caramel['img_produit'] ?>" class="card-img-top" alt="photo du produit">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produit_caramel['nom_produit'] ?></h5>
                    <p class="card-text"><?php   echo $produit_caramel['desc_produit'] ?></p>
                    <p class="card-text"><?php   echo $produit_caramel['prix_kilos'] ?>€</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div><?php } ?><br><br>


<?php afficher("footer") ?>


