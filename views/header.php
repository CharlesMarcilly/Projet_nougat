<header id="navmenu">
    <div class="container">
        <div class="row">
            <div id="menu">
                    <a href="index.php"><img src="img/YellowBeeHoney.jpg"  class="logo" alt="logo du site"></a>

                    <?php foreach ($menuheader as $key => $lien) {?>
                    <a href="<?php echo $lien["url"] ?>" title="<?php echo $lien["titre"] ?>" class="menu">
                    <?php echo $lien["text"] ?></a>
                    <?php } ?>
            </div>  
        </div>
    </div>
</header>
    