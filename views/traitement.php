<?php 

    if (isset($_POST['ok'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $numero = $_POST['numero'];
        $mdp = $_POST['password'];
    }

?>

<!DOCTYPE html>
<html lang="fr  ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page traitement</h1>
    <p>Bienvenue <?php echo$_POST["prenom"]?></p>
</body>
</html>