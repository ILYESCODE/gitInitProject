<?php include("./layout/header.php") ?>
<?php include("./layout/nav.php") ?>

<div class="content">
<h1>ajout d'un article</h1>
<form method="post" action="product_add_save.php">

<input type="text" name="product_name" placeholder="article" >
<input type="text" name="product_detail" placeholder="detail" >
<input type="text" name="product_price" placeholder="prix" >
<input type="number" name="product_qt" placeholder="quantité" >

<input type="submit" value="ajouter">

</form>

</div>
<?php include("./layout/footer.php") ?>
