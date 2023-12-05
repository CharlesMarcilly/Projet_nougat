<?php

$serverName = "localhost";
$bdd = "nougat";
$userName = "root";
$password = ""; /*Vide sur wamp*/ 

// Récupération de la base de donnée du site 
try {
    $db = new PDO("mysql:host=$serverName;dbname=$bdd", $userName, $password);
} catch (PDOException $e) {
    echo "Erreur base de données"; 
    echo $e->getMessage();
    // var_dump($db);
}


// Fonction qui récupère tout d'une table de la base de données grâce à la requête sql. 
// On récupère le tout sous forme de tableau (fetch_assoc)
function tout($table) {
    $db = $GLOBALS["db"];
    $sql = "SELECT * FROM $table";
    $result = $db->query($sql);
    $list = $result->fetchAll(PDO::FETCH_ASSOC);
    return $list; 
}

// Fonction qui récupère des données selon la colonne de la table et sa valeur.
// Pour moi, la valeur ($val) sera le nom de la catégorie
function specifique($table, $nomCol, $val, $op = "="){
    $db = $GLOBALS['db'];
    $sql = "SELECT * 
            FROM $table 
            WHERE $nomCol $op:$nomCol";
    $result = $db->prepare($sql); /* Protection contre les injections SQL grâce au prepare */
    $result->execute([":$nomCol"=> $val]);
    return $result->fetchALL(PDO::FETCH_ASSOC);
}


// Fonction presque similaire à specifique, avec un 'like' et %$val%. Ce qui permet de 
// récuperer la valeur, et de chercher tous les textes qui auront des caractères avant et après la valeur $val
function sqlLike($table, $nomCol, $val){
    $db = $GLOBALS['db'];
    $sql = "SELECT * 
            FROM $table 
            WHERE $nomCol like :$nomCol";
    $result = $db->prepare($sql); 
    $result->execute([":$nomCol" => "%$val%"]);
    return $result->fetchALL(PDO::FETCH_ASSOC);
}


// Cette fonction permet d'afficher les produits d'une seule catégorie en passant en paramètre 
/*la catégorie que l'on souhaite avoir*/
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



// Cette fonction permet de récupérer toutes les produits avec ses catégories associés
function tousLesProduitsParCategorie() {
    $db  = $GLOBALS["db"];
    $sql = "SELECT produits.*, categories.nom_categ
            FROM produits
            JOIN categories ON produits.categorie_id = categories.id";
    $result = $db->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
}
$tousLesProduits = tousLesProduitsParCategorie();

// foreach ($tousLesProduits as $produit) {
//         echo "Catégorie : " . $produit['nom_categ'] . "<br>";
//         echo "Produit : " . $produit['nom_produit'] . ", Description : " . $produit['desc_produit'] . "<br>";
//         echo "<br>";
//     }
?>