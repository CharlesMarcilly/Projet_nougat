<?php 
$title = "Catégories";


if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

// Fonction qui permet de récupérer des données spécifiques dans une table, selon le nom de la colonne, l'id etc...
$categories = specifique("categories",/**A la condition que =>*/ "id", /**Soit égale à =>*/ $id );


 /** Le if se ferme à la fin car si on rentre dans la boucle, il faut récupérer tout le code */
 if (!empty($categories)) {
    $categorie  = $categories[0];
    $idCateg    = $categorie["id"];
    $nomCat     = $categorie["nom_categ"];
    $descCat    = $categorie["desc_categorie"];


    $produitsCats = specifique("produits", "categorie_id", $id);
    
    require "views/page_categories.php";
} else {
    require "controllers/page_404.php";
}



// $idCateg    = $categorie["id"];
// $nomCat     = $categorie["nom_categ"];
// $descCat    = $categorie["desc_categorie"];




    // require "views/page_categories.php";
    // } else {
    // require "controllers/page_404.php";
    // }
?>