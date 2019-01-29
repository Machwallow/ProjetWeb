<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 29/01/2019
 * Time: 10:43
 */

require_once (PATH_ENTITY.'ProdBasket.php');

session_start();







if(isset($_SESSION['basket'])){
    $prixTotal = 0;
    foreach($_SESSION['basket'] as $prodB){
        $prixTotal += $prodB->_totalCost;
    }
}





require_once (PATH_CONTROLLERS.'header.php');
if(isset($_SESSION['id']))
    require_once (PATH_VIEWS.'payer.php');
else
    header('Location: ./index.php?page=connexion');
require_once (PATH_VIEWS.'footer.php');

