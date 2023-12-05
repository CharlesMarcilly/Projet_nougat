<?php 
$title = "Inscription";

if (isset($_POST['ok'])){

    $nom       = $_POST['nom'];
    $prenom    = $_POST['prenom'];
    $mail      = $_POST['mail'];
    $mdp       = $_POST['password'];
    $cmdp      = $_POST['cpassword'];
    $adresse   = $_POST['adresse'];
    $tel       = $_POST['tel'];
    
    $serverName = "localhost";
    $bdd = "nougat";
    $userName = "root";
    $password = ""; /*Vide sur wamp*/ 
    // Récupération de la base de donnée du site 
    try {
        $db = new PDO("mysql:host=$serverName;dbname=$bdd", $userName, $password);
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erreur base de données"; 
        echo $e->getMessage();
    }

//   On dit que si le $_POST['ok'] (du name="ok") existe, on récupère les données en les mettants dans des variables. Ensuite on récupère la 
//   base de données pour créer une nouvelle requête SQL, qui va insérer les données récupérées dans notre base de données
    $requete = $db -> prepare("INSERT INTO clients (id, nom, prenom, email, mot_de_passe, confirm_mdp, adresse_livraison, telephone, created_at, updated_at) VALUES (0, :nom, :prenom, :mail, :mdp, :cmdp, :adresse, :tel, NOW(), NOW())");
    $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);
    $requete->execute(
        array (
            "nom"       => $nom,
            "prenom"    => $prenom,
            "mail"      => $mail,
            "mdp"       => $mdp,
            "cmdp"      => $cmdp,
            "adresse"   => $adresse,
            "tel"       => $tel,
        )
    );
    $reponse = $requete->fetchALL(PDO::FETCH_ASSOC);
    
    header("location: controllers/page_connexion.php");
} else{
   require "views/page_inscription.php";
}
?>