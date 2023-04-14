<?php include("./model/database.php") ?>
<?php include("./model/product.php") ?>
<?php include("./layout/header.php") ?>
<?php include("./layout/nav.php") ?>

<?php

$db = db_connect();
$product_id = $_GET['id'];
$product = product_get_one($db, $product_id);
?>

<div class="content">
    <h1>modifier un article</h1>
    <form method="post" action="product_update_save.php">

        <input type="text" name="product_id" value="<?php echo $product["product_id"] ?>" hidden>
        <input type="text" name="product_name" placeholder="article" value="<?php echo $product["product_name"] ?>">
        <input type="text" name="product_detail" placeholder="detail" value="<?php echo $product["product_detail"] ?>">
        <input type="text" name="product_price" placeholder="prix" value="<?php echo $product["product_price"] ?>">
        <input type="number" name="product_qt" placeholder="quantité" value="<?php echo $product["product_qt"] ?>">

        <input type="submit" value="modifier">

    </form>

</div>

<?php include("./layout/footer.php") ?>