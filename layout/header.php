<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/structure.css">
    <title>Document</title>
</head>
<body>
<?php session_start(); ?>
    <header>

        <img src="public/img/art1.jpg" alt="">
        <h1>Titre du site</h1>

        <?php  
if (isset($_SESSION["username"])) {
    ?>


    <span class="connect_status">
        <span><?php echo $_SESSION['username'] ?></span>
        <a href="deconnexion.php">se deconnecter</a>
    </span>  

<?php } else { ?>
    <span class="connect_status">
    <a href="connexion.php">se connecter</a>
    </span>
<?php } ?>

        <button id="btnNav">Menu</button>
        <!-- <button id="btnBlock">Block</button> -->
        <!-- <button id="btnGrid">Grille</button> -->
    </header>