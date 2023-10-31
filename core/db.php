<?php 
$serverName = "localhost";
$bdd = "nougat";
$userName = "root";
$password = ""; /*Vide sur wamp*/ 

try {
    $db = new PDO("mysql:host=$serverName;dbname=$bdd", $userName, $password);
} catch (PDOException $e) {
    echo "Erreur base de données"; 
    echo $e->getMessage();
}

function alldb($table) {
    $db = $GLOBALS["db"];
    $sql = "SELECT * FROM table";
    $result = $db->query($sql);
    $list = $result->fetchAll(PDO::FETCH_ASSOC);
    return $list; 
}

?>