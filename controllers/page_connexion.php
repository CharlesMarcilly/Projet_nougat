<?php 
$title = "Connexion";


    

if(isset($_POST['mail']) && isset($_POST['password']) || !empty($_POST['mail']) && !empty($_POST['password'])){

             require "views/page_connexion.php";
       } else {

        require "controllers/page_inscription.php"; 

       }



?>