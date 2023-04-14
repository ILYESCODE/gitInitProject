<?php include("./layout/header.php") ?>
<?php include("./layout/nav.php") ?>
<?php include("./model/is_authenticated.php") ?>

<div class="content">

<h2>profil de <?php echo $_SESSION["username"]; ?></h2>
<a href="deconnexion.php">se deconnecter</a>

</div>
<?php include("./layout/footer.php") ?>