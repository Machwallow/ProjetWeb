<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 28/01/2019
 * Time: 18:28
 */

require_once (PATH_ENTITY.'ProdBasket.php');
require_once (PATH_ENTITY.'Product.php');

session_start();

if(isset($_POST['idRemoveProd'])){
    if(isset($_SESSION['basket']))
        unset($_SESSION['basket'][$_POST['idRemoveProd']]);
}
if(isset($_SESSION['basket']))
    $productsBasket = $_SESSION['basket'];
else
    $productsBasket = null;

require_once (PATH_CONTROLLERS.'header.php');
require_once (PATH_VIEWS.'panier.php');
require_once (PATH_VIEWS.'footer.php');