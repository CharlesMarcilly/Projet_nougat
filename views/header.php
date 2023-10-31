<header id="navmenu">
    <div class="container_ligne">
        <a href="img/YellowBeeHoney.jpg" id="logo">
            <!-- <img src="./IMG/captureEcran94.png" alt="Photo produit"> -->
        </a>
        <div id="menu" class="ligne">
            <?php foreach ($menuheader as $key => $lien) {?>
            <a href="<?php echo $lien["url"] ?>" title="<?php echo $lien["titre"] ?>" class="menu">
            <?php echo $lien["text"] ?></a>
            <?php } ?>
        </div>  
    </div>
</header>
    