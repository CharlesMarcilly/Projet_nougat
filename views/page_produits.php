<?php afficher('header');?><hr><br>            

    <h1 id="titre_produit">Page produits</h1>
        <div class="allCards">
            <div class="card" style="width: 18rem;">

                <?php foreach($produits as $key => $produit){?>
                <img src="<?php echo $imgProduit ?>" class="card-img-top" alt="photo du produit">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $nomProduit ?></h5>
                    <p class="card-text"><?php   echo $descProduit ?></p>
                    <p class="card-text"><?php   echo $prixProduit ?>€</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div><?php } ?><br><br>


<?php afficher('produit');?>   

<?php afficher('footer');?>    

