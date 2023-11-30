<?php
$title = "Le nougat de Montélimar";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

// Cette fonction permet d'afficher les produits d'une seule catégorie en passant en paramètre 
// la catégorie que l'on souhaite avoir
    function produitsParCategorie($categorie) {
        $db = $GLOBALS["db"];
        $sql = "SELECT produits.*, categories.nom_categ
                FROM produits
                JOIN categories ON produits.categorie_id = categories.id
                WHERE categories.nom_categ = :categorie";
        $result = $db->prepare($sql);
        $result->execute([':categorie' => $categorie]);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    $produitsTraditionnels = produitsParCategorie('traditionnel');


    // Sert à appeler le nougat au caramel qui a l'id 6
    $produit_caramels = specifique("produits", "id", "6");
    
    

 
    require "views/page_accueil.php";
?>