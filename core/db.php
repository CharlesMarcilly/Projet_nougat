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
    var_dump($db);
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

// Fonction qui récupère des données selon la colonne de la table et son id.
// Pour moi, l'id sera le nom de la catégorie
function specifique($table, $nomCol, $val, $op = "="){
    $db = $GLOBALS['db'];
    $sql = "select * from $table where $nomCol$op:$nomCol";
    $result = $db->prepare($sql);
    $result->execute([":$nomCol"=> $val]);
    return $result->fetchALL(PDO::FETCH_ASSOC);
}

?>