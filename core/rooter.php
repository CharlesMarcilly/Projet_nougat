<?php

// FONCTION QUI AFFICHE LES MORCEAUX DE NOTRE PAGE D INDEX
function afficher($view){
    if($view == "header")
    require "controllers/header.php";

    if($view == "produit")
    require "controllers/produit.php";

    if($view == "contact")
    require "controllers/contact.php";

    if($view == "footer")
    require "controllers/footer.php";
}

// FONCTION QUI AFFICHE LES PAGES SELON CE QUI EST ECRIT DANS L'URL
if(isset($_GET["p"])){
    $p = $_GET["p"];
} else {
    $p = "";
}

ob_start();
switch ($p) {
    case "":
        require "controllers/page_accueil.php";
    break;
    case "produit":
        require "controllers/page_produits.php";
    break;
    case "actualite":
        require "controllers/page_actualites.php";
    break;
    case "categorie":
        require "controllers/page_categories.php";
    break;
    case "panier":
        require "controllers/page_panier.php";
    break;
    case "recherche":
        require "controllers/page_recherche.php";
    break;
    case "inscription":
        require "controllers/page_inscription.php";
    break;
    case "connexion":
        require "controllers/page_connexion.php";
    break;
    default:
        require "controllers/page_404.php";

}
$content = ob_get_contents();
ob_end_clean();

?>