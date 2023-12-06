<?php
$title = "Mon profil";

if(!isset($_SESSION["user"])){
    require "controllers/page_connexion.php";
    } else {
        require "views/page_profil.php";
    }
?>