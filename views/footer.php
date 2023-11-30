   <footer id="footer">
    <div class="container-footer">
        <img src="" alt="">
        <div class="ligne">
            <div class="footer">
                <h4>Catégories</h4>
                <?php foreach ($categories as $key => $categorie){ 
                    $lien = "?p=categorie&id=".$categorie['id'];
                    ?>
                <ul><a href="<?php echo $lien ?>" title="<?php echo nomPropre($categorie['nom_categ'])?>" class="menufooter1"><li> 
                <?php echo nomPropre($categorie['nom_categ'])?></li></a></ul>
            <?php } ?>
            </div>

            <div class="footer">
                <h4>Nos engagements</h4>
                   <ul><a href=""><li>SAV à votre disposition</li></a></ul>
                   <ul><a href=""><li>Paiement sécurisé</li></a></ul>
                   <ul><a href=""><li>Prix très attractifs</li></a></ul>
            </div> 
            
            <div class="footer">
                <h4>L'entreprise</h4>
                <ul><a href="#"><li>Qui sommes nous ?</li></a></ul>
                    <ul><a href="#"><li>Avis de nos clients</li></a></ul>
                    <ul><a href="#"><li>Charte de confidentialité</li></a></ul>
                    <ul><a href="#"><li>Conditions générales de vente</li></a></ul>
                    <ul><a href="#"><li>Informations légales</li></a></ul>
                </ul>
            </div>

            <div class="footer">
                <h4>Contact</h4>
                   <ul><a href="#"><li>Nous contacter</li></a></ul>
            </div> 

            <!-- <div class="footer">
                <h4>Partenariat</h4>
                <ul><li><a href="#" id="partenariat"><p>Confiserie Le Maître Gourmet</p></a></li></ul>
            </div> -->
        </div>
    </div>

</footer>
