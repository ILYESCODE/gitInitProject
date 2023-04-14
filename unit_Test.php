<?php 

include("./model/database.php");
include("./model/product.php");
include("./model/user.php");

$db = db_connect();
// $products = product_get_all($db);
// var_dump($products);

// product_add($db,"article66","d6",2000,12);

// product_update($db,19,"article77","d6",2000,12);

$connect = checkUser ($db,'client1','client1');
var_dump($connect);
