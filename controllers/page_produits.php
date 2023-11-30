<?php
    $title = "Nos produits";


    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        $id = 0;
    }

    // Fonction qui permet de récupérer des données spécifiques dans une table, selon le nom de la colonne, l'id etc...
    $produits = specifique("produits", "id", $id );


     /** Le if se ferme à la fin car si on rentre dans la boucle, il faut récupérer tout le code */
    if (isset($produits[0])) {
    $leProduit = $produits[0];

    $idProduit = $leProduit["id"];
    $nomProduit = $leProduit["nom_produit"];
    $descProduit = $leProduit["desc_produit"];
    $prixProduit = $leProduit["prix_kilos"];
    $poidsProduit = $leProduit["poids_produits"];
    $stockProduit = $leProduit["stock"];
    $typeProduit = $leProduit["type_produit"]; /**En barre ou en tranche */
    $categProduit = $leProduit["nom_categorie"];
    $imgProduit = $leProduit["img_produit"];

    // Fonction qui permet de mettre une image de substitution pour un produit dans le cas ou c'est vide.
    if (empty($imgProduit)) {
        $imgProduit = 'img/nopic.jpg';
    } else {
        $imgProduit = $leProduit["img_produit"];
    }

    require "views/page_produits.php";
    } else {
        require "controllers/page_404.php";
    }
?>