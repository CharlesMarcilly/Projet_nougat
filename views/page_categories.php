<?php afficher('header');
?>    

    <h1 style="text-align: center;">Nougats <?php echo $nomCat ?></h1><br>
    
    <div class="allCards">
        <div class="card" style="width: 18rem;">

         <!-- Cette fonction permet d'afficher les produits d'une seule catégorie  -->
            <?php foreach ($produitsCats as $key => $produitsCat){ 
                $lien = "?p=produit&id=".$produitsCat['id'];
                ?>
                <img src="<?php echo $produitsCat["img_produit"];?>" class="card-img-top" alt="photo du produit">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $produitsCat['nom_produit']; ?></h5>
                    <p class="card-text">  <?php echo $produitsCat['desc_produit']; ?></p>
                    <p class="card-text">  <?php echo $produitsCat['prix_kilos']; ?></p>
                    <a href="<?php echo $lien ?>" class="btn btn-primary">Go somewhere</a>
                  </div>
            <?php } ?><br>


<?php afficher('footer');?>    

