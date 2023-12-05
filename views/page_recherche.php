<?php afficher("header"); ?><hr><br>


    <div id="titre_recherche">
        <div class="container">
            <h1>Recherche</h1><br><br>
        </div>
    </div>
    
    <div class="recherche" style="text-align: center;">
        <div id="container">
            <form action="" method="POST">
                <label for="recherche">Recherche :</label>
                <input type="text" id="recherche" name="recherche" value="<?php echo $recherche ?>" required>
                <input type="submit" value="Rechercher">
            </form>
        </div>
    </div><br><br><br>
    
<?php afficher("produit"); ?>


