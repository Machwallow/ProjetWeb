<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 28/01/2019
 * Time: 16:56
 */

require_once (PATH_MODELS.'ProductDao.php');
require_once (PATH_ENTITY.'ProdBasket.php');

session_start();

if(isset($_POST["qte"])){
    $prodDao = new ProductDao();
    $prod = $prodDao->getProductById($_GET["idP"]);
    $prodB = new ProdBasket($prod,$_POST["qte"]);
    $_SESSION["basket"][] = $prodB;
    header('Location: ./index.php?page=produits');
}

if(isset($_GET["idP"])){
    $prodDao = new ProductDao();
    $prod = $prodDao->getProductById($_GET["idP"]);
}
else
    header('Location: ./index.php?page=produits');

require_once (PATH_CONTROLLERS.'header.php');
require_once (PATH_VIEWS.'addProduct.php');
require_once (PATH_VIEWS.'footer.php');