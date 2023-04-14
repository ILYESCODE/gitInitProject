<?php include("./model/database.php") ?>
<?php include("./model/product.php") ?>

<?php
$db = db_connect();
$product_id = $_GET['id'];
product_delete($db, $product_id);
header('location:product_list_admin.php');
