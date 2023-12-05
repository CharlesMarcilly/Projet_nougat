<?php 

if(isset($_POST['ok'])){

    $nom       = $_POST['nom'];
    $prenom    = $_POST['prenom'];
    $mail      = $_POST['mail'];
    if ($_POST['mail'] != filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        exit("Adresse mail incorrect");    
        
        
    } else 
    $mdp       = $_POST['password'];
    $cmdp      = $_POST['cpassword'];
    $adresse   = $_POST['adresse'];
    $tel       = $_POST['tel'];

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

    echo "<span style='color:green;text-align:center;'>Votre inscription est validée !";
    require "controllers/page_connexion.php";

} else {

    require "views/page_inscription.php";
}

       

?>