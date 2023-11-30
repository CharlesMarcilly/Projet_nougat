<?php 
$title = "recherche";

if(isset($_POST['recherche'])) {
    $recherche =  $_POST['recherche'];

    $produitsCats = sqlLike("produits", "nom_produit", $recherche);
    // var_dump($produitsCats);

} else {
    $recherche = "";
}

require "views/page_recherche.php";
?>