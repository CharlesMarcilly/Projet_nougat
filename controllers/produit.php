<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}
// $val = '1';

if (isset($GLOBALS["produitsCats"])){
    $produits = $GLOBALS["produitsCats"];
} else {
    $produits = tout("produits");
}

// $produits = specifique("produits", "categorie_id", $val);
// var_dump($produits);

// $leProduit = $produits[0];

// $produits["id"];
// $$produits["nom_produit"];
// $produits["desc_produit"];
// $produits["prix_kilos"];
// $produits["poids_produits"];
// $produits["stock"];
// $$produits["img_produit"];

// $idProduit = $leProduit["id"];
// $nomProduit = $produits["nom_produit"];
// $descProduit = $leProduit["desc_produit"];
// $prixProduit = $leProduit["prix_kilos"];
// $poidsProduit = $leProduit["poids_produits"];
// $stockProduit = $leProduit["stock"];
// $typeProduit = $leProduit["type_produit"]; /**En barre ou en tranche */
// $categProduit = $leProduit["nom_categorie"];
// $imgProduit = $leProduit["img_produit"];

// Fonction qui permet de mettre une image de substitution pour un produit dans le cas ou c'est vide.
if (empty($imgProduit)) {
    $imgProduit = 'img/nopic.jpg';
} else {
    $imgProduit = $produits["img_produit"];
}

// if(isset($GET['id']) && $$GET['id'] == $produit['id']){
//     echo $produit['id'];
// } else {

require "views/produit.php";

?> 