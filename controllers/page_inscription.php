<?php 

if(isset($_POST['ok'])){

    // Protection nom/prenom
    $nom       = strip_tags($_POST['nom']); /* Supprime les balises HTML et PHP d'une chaîne*/
    $prenom    = strip_tags($_POST['prenom']);
    $patternName = "/^[a-zA-ZÀ-ÿ-]+(?:\s[a-zA-ZÀ-ÿ-]+)*$/";
    if (preg_match($patternName, $nom) && preg_match($patternName, $prenom)) {
        // Le nom et/ou le prénom sont valides
        
    } else {
        // Le nom et/ou le prénom sont invalides
        exit("Le nom et/ou le prénom sont invalides");
    }

    // Protection adresse mail
    $mail      = $_POST['mail'];
    $checkEmailQuery = $db->prepare("SELECT COUNT(*) AS count FROM clients WHERE email = :mail");
    $checkEmailQuery->execute([':mail' => $mail]);
    $resultat = $checkEmailQuery->fetch(PDO::FETCH_ASSOC);

    if ($resultat['count'] > 0) {
        // L'adresse e-mail existe déjà, vous pouvez afficher un message d'erreur
        exit("Cette adresse e-mail est déjà utilisée.");
    } 
        
    if ($_POST['mail'] != filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        exit("Adresse mail incorrect");    

    } else 

    // On vérifie que les mots de passe sont identique 
    $mdp             = $_POST['password']; 
    $cmdp            = $_POST['cpassword'];
    if ($mdp == $cmdp){  
        // On le hashe
        $hashedPassword = password_hash($mdp, PASSWORD_DEFAULT);
        
    } else {

        exit("Les mots de passe ne sont pas identiques.");
    }

    // On vérifie sa longueur
    if (strlen($mdp) < 12) {
        exit("Le mot de passe doit avoir au moins 13 caractères. <a href'page_inscription.php'>Revenir</a>");

    } else {
        // Vérification de la présence d'au moins une majuscule
        if (!preg_match('/[A-Z]/', $mdp)) {
            exit("Le mot de passe doit contenir au moins une majuscule.");

        } else {
            // Vérification de la présence d'au moins un chiffre
            if (!preg_match('/[0-9]/', $mdp)) {
                exit("Le mot de passe doit contenir au moins un chiffre.");

            } else {
                // Vérification de la présence d'au moins un caractère spécial
                if (!preg_match('/[^A-Za-z0-9]/', $mdp )) {
                    exit("Le mot de passe doit contenir au moins un caractère spécial.");

                } else {
                    // Toutes les conditions sont remplies
                }
            }
        }
    }

    /* Regex utilisé pour les adresses */ 
    $adresse   = strip_tags($_POST['adresse']);
    $patternAd = "/^[0-9]{1,5}\s[A-Za-z0-9\s\']{1,50}$/"; /* Regex utilisé pour les adresses */ 

    if (preg_match($patternAd, $adresse)) {
        // L'adresse postale est valide
        
    } else {
        // L'adresse postale est invalide
        exit("L'adresse postale est invalide.");
    }

    /* Regex utilisé pour les numéros de téléphones Français (autorise les espaces) */
    $tel       = $_POST['tel'];
    $pattern = "/^0[1-9](?:\s?\d{2}){4}$/"; 
    if (preg_match($pattern, $tel)) {
        // Le numéro est valide
    } else {
        exit("Le numéro est invalide"); 
    }


//   On dit que si le $_POST['ok'] (du name="ok") existe, on récupère les données en les mettants dans des variables. Ensuite on récupère la 
//   base de données pour créer une nouvelle requête SQL, qui va insérer les données récupérées dans notre base de données
    $requete = $db -> prepare("INSERT INTO clients (id, nom, prenom, email, mot_de_passe, confirm_mdp, adresse_livraison, telephone, created_at, updated_at) VALUES (0, :nom, :prenom, :mail, :mdp, :cmdp, :adresse, :tel, NOW(), NOW())");

    $requete->execute(
        array (
            "nom"       => $nom,
            "prenom"    => $prenom,
            "mail"      => $mail,
            "mdp"       => $hashedPassword,
            "cmdp"      => $hashedPassword,
            "adresse"   => $adresse,
            "tel"       => $tel,
        )
    );
    $reponse = $requete->fetchALL(PDO::FETCH_ASSOC);
    echo "<span style='color:green;'>Votre inscription est validée !";
    
    require "controllers/page_connexion.php";

} else {

    require "views/page_inscription.php";
}

       

?>