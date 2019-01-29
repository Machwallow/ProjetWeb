<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 29/01/2019
 * Time: 21:58
 */

require_once (PATH_MODELS.'OrderDao.php');
require_once (PATH_ENTITY.'Order.php');

session_start();

if(isset($_SESSION['isAdmin'])){

    $orderDao = new OrderDao();

    if(isset($_POST['idChangeOrder'])){
        $orderDao->changeStatus($_POST['idChangeOrder'],10);

    }
    $orders = $orderDao->getAllOrders();

    require_once (PATH_CONTROLLERS.'headerAdmin.php');
    require_once (PATH_VIEWS.'commande.php');
    require_once (PATH_VIEWS.'footer.php');
}