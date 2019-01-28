<?php
require_once(PATH_MODELS.'ProductDao.php');


session_start();
$prodDat = new ProductDao();

if (isset($_GET["cat"])) {

    $prodDat = new ProductDao();
    $produits = $prodDat->getProductsByCatId();
}

if (isset($_GET["name"])){
    $nom=$_GET["name"];
}

$produits = $prodDat->getAllProducts();

require_once(PATH_CONTROLLERS.'header.php');
require_once(PATH_VIEWS.'produits.php');
require_once(PATH_VIEWS.'footer.php');
