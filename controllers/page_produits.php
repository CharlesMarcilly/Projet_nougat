<?php
$title = "Nos produits";

// $id = $_GET['id'];

// $categories = specifique("categories", "id", $id );

// $idCategories = $categories["id"];

$id = $_GET['id'];

$produits = specifique("produits", "id", $id );

$leProduit = $produits[0];


$idProduit = $leProduit["id"];
$nomProduit = $leProduit["nom_produit"];
$descProduit = $leProduit["desc_produit"];
$prixProduit = $leProduit["prix_kilos"];
$poidsProduit = $leProduit["poids_produits"];
$stockProduit = $leProduit["stock"];
$imgProduit = $leProduit["img_produit"];
$typeProduit = $leProduit["type_produit"]; /**En barre ou en tranche */
$categProduit = $leProduit["nom_categorie"];


require "views/page_produits.php";
?>