<?php
session_start();
require "core/tools.php";
require "core/db.php"; /** METTRE IMPERATIVEMENT AVANT ROOTER.PHP. IL FAUT QUE LA BASE DE DONNEE SOIT ACCESSIBLE AVANT DACCEDER AUX VIEWS */
require "core/rooter.php";
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    
        <link href="styles/main.css" rel="stylesheet">
        <link href="styles/mediaquery.css" rel="stylesheet">
    </head>
    <body>
        
        <?php echo $content ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
    </body>
</html>