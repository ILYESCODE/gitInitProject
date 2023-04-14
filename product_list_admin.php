<?php include("./model/database.php") ?>
<?php include("./model/product.php") ?>
<?php include("./layout/header.php") ?>
<?php include("./layout/nav.php") ?>


<?php
//traitement et recuperation de données
$db = db_connect(); //connexion à la base de données
$products = product_get_all($db);

?>
<div class="content">
    <div class="arcticle">
        <h1>gestion des articles</h1>
        <a href="./product_add.php">ajouter article</a>

        <table border="1">
            <tr>
                <td>produits</td>
                <td>details</td>
                <td>prix</td>
                <td>quantite</td>
                <td></td>
            </tr>
            <?php foreach ($products as $product) { ?>

                <tr>

                    <td><?php echo $product['product_name'] ?></td>
                    <td><?php echo $product['product_detail'] ?></td>
                    <td><?php echo $product['product_price'] ?></td>
                    <td><?php echo $product['product_qt'] ?></td>
                    <td><a href="./product_update.php?id=<?php echo $product['product_id'] ?>">modifier</a></td>
                    <td><a href="./product_delete.php?id=<?php echo $product['product_id'] ?>">supprimer</a></td>
                </tr>

            <?php } ?>
        </table>

    </div>
</div>

<?php include("./layout/footer.php") ?>