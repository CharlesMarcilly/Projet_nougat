<h1 id="titre_produit">Nos meilleurs produits, c'est par ici !</h1>

  <div class="allCards">
    <div class="card" style="width: 18rem;">

      <?php foreach($produits as $key => $produit){?>
      <img src="<?php echo ($produit['img_produit'])?>" class="card-img-top" alt="photo du produit">
      <div class="card-body">
        <h5 class="card-title"><?php echo($produit['nom_produit']) ?></h5>
        <p class="card-text"><?php echo($produit['desc_produit']) ?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div><?php } ?><br>


