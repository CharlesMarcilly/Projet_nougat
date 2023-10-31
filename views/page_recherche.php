<?php afficher("header"); ?>
    
    <div class="container">
        <h1>Recherche de Produits</h1>
        <form action="resultats.php" method="get">
            <label for="recherche">Rechercher :</label>
            <input type="text" id="recherche" name="recherche" required>
            <input type="submit" value="Rechercher">
        </form>
    </div>
    
<?php afficher("footer"); ?>
