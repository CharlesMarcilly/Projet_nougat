<?php afficher('header');?>    

    <h1><?php echo $categProduit ?></h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis, quod. Accusantium cum dignissimos, nostrum sapiente error explicabo minus sed nemo tempora architecto, dolore veritatis natus assumenda nisi optio veniam quas.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis, quod. Accusantium cum dignissimos, nostrum sapiente error explicabo minus sed nemo tempora architecto, dolore veritatis natus assumenda nisi optio veniam quas.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis, quod. Accusantium cum dignissimos, nostrum sapiente error explicabo minus sed nemo tempora architecto, dolore veritatis natus assumenda nisi optio veniam quas.</p>

        
    <h1 id="titre_produit">Nos meilleurs produits, c'est par ici !</h1>
        <div class="allCards">
            <div class="card" style="width: 18rem;">

                <?php foreach($produits as $key => $produit){?>
                <img src="<?php echo $imgProduit ?>" class="card-img-top" alt="photo du produit">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $nomProduit ?></h5>
                    <p class="card-text"><?php echo $descProduit ?></p>
                    <p class="card-text"><?php echo $prixProduit ?>€</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div><?php } ?><br>





<?php afficher('footer');?>    

