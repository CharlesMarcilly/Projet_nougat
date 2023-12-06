<?php 
// session_start();
$title = "Connexion";

    if(isset($_SESSION["user"])){
        require "controllers/page_profil.php";
        }

    if (!EMPTY($_POST)) {

        if(isset($_POST['mail'], $_POST['password'])
        && !empty($_POST['mail'] && !empty($_POST['password']))){

            if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
                die("Ce mail n'est pas valide");
            }
                
                $sql = "SELECT * FROM clients WHERE email = :mail";
                $query = $db->prepare($sql);
                $query->bindValue(":mail", $_POST['mail']); 
                $query->execute();
                $user = $query->fetch();

                if(!$user){
                    die("L'utilisateur et/ou le mot de passe est incorrect");
                }
                // Ici, l'utilisateur existe donc puisque on est rentré dans la boucle. on vérifie maintenant le mot de passe
                if(!password_verify($_POST["password"], $user['mot_de_passe'])){
                    die("L'utilisateur et/ou le mot de passe est incorrect");
                }
                // L'utilisateur et le mdp sont correct, on peut donc se connecter et démarrer une SESSION
                $_SESSION["user"] = [
                    "id"        => $user['id'],
                    "nom"       => $user['nom'],
                    "prenom"    => $user['prenom'],
                    "mail"      => $user['email'],
                    "adresse"   => $user['adresse_livraison'],
                    "tel"       => $user['telephone']
                ];

                // Le var_dump s'effectue quand on se connecte, sur la page_profil vu que le require nous y amène
                // var_dump($_SESSION);
        }


        require  "controllers/page_profil.php";
    } else {
        require "views/page_connexion.php";
    }



?>