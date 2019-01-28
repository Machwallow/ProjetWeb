<?php
require_once(PATH_MODELS.'ProductDao.php');
require_once (PATH_ENTITY.'ProdBasket.php');

session_start();
$prodDat = new ProductDao();

if (isset($_GET["cat"])) {

    $produits = $prodDat->getProductsByCatId($_GET["cat"]);
}
else
    $produits = $prodDat->getAllProducts();

if (isset($_GET["name"])){
    $nom=$_GET["name"];
}
else
    $nom = "Tous les produits";


require_once(PATH_CONTROLLERS.'header.php');
require_once(PATH_VIEWS.'produits.php');
require_once(PATH_VIEWS.'footer.php');
