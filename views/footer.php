   <footer id="footer">
    <div class="container">
        <img src="" alt="">
        <div class="ligne">
            <div class="footer">
                <h4>Nos produits</h4>
                <?php foreach ($menufooter1 as $key => $lien) {?>
                <a href="<?php echo $lien['url'] ?>" title="<?php echo $lien['titre'] ?>" class="menufooter1">
                <?php echo $lien['text'] ?></a>
            <?php } ?>
            </div>

            <div class="footer">
                <h4>Qui sommes-nous ?</h4>
                  <?php foreach ($menufooter2 as $key => $lien) {?>
                <a href="<?php echo $lien['url'] ?>" title="<?php echo $lien['titre'] ?>" class="menufooter2">
                <?php echo $lien['text'] ?></a>
            <?php } ?>
               
            </div>

            <div class="footer">
                <h4>Liens importants</h4>
                <?php foreach ($menufooter3 as $key => $lien) {?>
                <a href="<?php echo $lien['url'] ?>" title="<?php echo $lien['titre'] ?>" class="menufooter2">
                <?php echo $lien['text'] ?></a>
            <?php } ?>
            </div>

            <div class="footer">
                <h4>Nos fournisseurs</h4>
                <?php foreach ($menufooter4 as $key => $lien) {?>
                <a href="<?php echo $lien['url'] ?>" title="<?php echo $lien['titre'] ?>" class="menufooter2">
                <?php echo $lien['text'] ?></a>
            <?php } ?>
            </div>
        </div>
    </div>

</footer>
