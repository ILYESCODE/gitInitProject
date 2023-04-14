<?php 

// ----------- fonction get all -------------------

function product_get_all($db){
    //préparation de la requte SQL
$requete = $db->prepare("select * from product");

//execution de la requete SQL
$requete->execute();

//convertir les données récupérées en tableau PHP
$products = $requete->fetchAll();


return $products;
}


// ------------ fonction get one ---------------


function product_get_one($db,$product_id){
    
    $sql= "select * from product where product_id = :product_id";

    $requete = $db->prepare($sql);
    $requete -> bindValue(":product_id",$product_id);
    $requete -> execute();
    $product = $requete->fetch(PDO::FETCH_ASSOC);


return $product;
}

// -------------- fonction delete ---------------------


function product_delete($db, $product_id){


    $sql= "DELETE FROM product WHERE product_id = :product_id";
    
    $requete = $db->prepare($sql);
    $requete -> bindValue(":product_id",$product_id);
    $requete -> execute();
    }

    // --------------- fonction add ----------------------

    function product_add ($db,$product_name,$product_detail,$product_price,$product_qt){
        $sql = "INSERT INTO product(product_name, product_detail, product_price, product_qt)
        VALUES (:product_name, :product_detail, :product_price, :product_qt)";

        $requete = $db->prepare($sql);
        $requete -> bindValue(":product_name",$product_name);
        $requete -> bindValue(":product_detail",$product_detail);
        $requete -> bindValue(":product_price",$product_price);
        $requete -> bindValue(":product_qt",$product_qt);

        $requete -> execute();

    }
    


    // --------------- fonction update ----------------------

    function product_update ($db,$product_id,$product_name,$product_detail,$product_price,$product_qt){
$sql = "update product set product_name = :product_name, product_detail = :product_detail, product_price = :product_price, product_qt = :product_qt where product_id = :product_id";


$requete = $db->prepare($sql);
$requete -> bindValue(":product_id",$product_id);
$requete -> bindValue(":product_name",$product_name);
$requete -> bindValue(":product_detail",$product_detail);
$requete -> bindValue(":product_price",$product_price);
$requete -> bindValue(":product_qt",$product_qt);

$requete -> execute();

    }
    