<?php include("./layout/header.php") ?>
<?php include("./layout/nav.php") ?>
<?php include("./model/database.php") ?>
<?php include("./model/product.php") ?>

<?php 
//traitement et recuperation de données
$db = db_connect(); //connexion à la base de données

$products = product_get_all($db);

$product = product_get_one($db,1);
var_dump($product);


// product_delete($db, 2);

?>


<?php foreach ($products as $product) { ?>
 <div class="content">
        <div class="article" id="testdiv1">
            <h2><?php echo $product ['product_name']?></h2>
            <img src="public/img/art1.jpg" alt="">
            <p><?php echo $product ['product_detail']?></p>
            <button>+</button>
            <a href="art_info.html">Detail</a>
        </div>

 <?php } ?>

    </div>


<?php include("./layout/footer.php") ?>


