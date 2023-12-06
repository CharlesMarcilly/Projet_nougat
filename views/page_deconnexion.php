<?php
    // session_start();
    if(!isset($_SESSION["user"])){
        require "controllers/page_connexion.php";
        } else {

    // Suppression de la session
    unset($_SESSION["user"]);
    require "controllers/page_accueil.php";
        }
?>