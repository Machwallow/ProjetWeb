<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 29/01/2019
 * Time: 10:43
 */

require_once (PATH_ENTITY.'ProdBasket.php');
require_once (PATH_ENTITY.'Product.php');
require_once (PATH_ENTITY.'Pdf.php');
require_once (PATH_MODELS.'DAddressDao.php');
require_once (PATH_MODELS.'OrderItemsDao.php');
require_once (PATH_MODELS.'OrderDao.php');

session_start();

if(isset($_SESSION['basket'])){
    $prixTotal = 0;
    foreach($_SESSION['basket'] as $prodB){
        $prixTotal += $prodB->_totalCost;
    }
}

if(isset($_POST['isPaid']) && (count($_SESSION['basket']) > 0)){

    $dAddDao = new DAddressDao();

    $adId = $dAddDao->getLastDAdressId();

    $dAddDao->insertDAddress($_SESSION['forname'],$_SESSION['surname'],$_SESSION['add1'],
        $_SESSION['add2'],$_POST['city'],$_SESSION['postcode'],$_SESSION['phone'],$_SESSION['email']);

    $orderDao = new OrderDao();
    $orderId = $orderDao->getLastOrderId();

    $orderDao->insertOrder($_SESSION['customerId'],$_SESSION['registered'],$adId,$_POST['moyenP'],date('Y-m-d H:i:s'),
    2,$prixTotal);

    $orderItemsDao = new OrderItemsDao();

    foreach($_SESSION['basket'] as $prodB){
        $orderItemsDao->insertOrderItem($orderId,$prodB->_prod->_id,$prodB->_qte);
    }


    $pdf = new Pdf();
    $header = array('Produits', 'Qte', 'Prix');

    foreach($_SESSION['basket'] as $prodB){
        $data[] = array($prodB->_prod->_name,$prodB->_qte,$prodB->_totalCost);
    }
    $pdf->createInfos($orderId);
    $pdf->Cell(60,10,$_POST['city']);
    $pdf->Ln(20);
    $pdf->SetFont('','B');
    $pdf->Cell(60,10,'Contenu de votre commande : ');
    $pdf->Ln(10);
    $pdf->SetFont('');
    $pdf->createTable($header,$data);
    $pdf->Cell(30,30,'Prix Total : '.$prixTotal.'euros');
    $pdf->Ln(20);
    $pdf->Cell(60,10,'Moyen de paiement : '.$_POST['moyenP']);

    unset($_SESSION['basket']);

    $pdf->Output();
}



require_once (PATH_CONTROLLERS.'header.php');
if(isset($_SESSION['id']))
    require_once (PATH_VIEWS.'payer.php');
else
    header('Location: ./index.php?page=connexion');
require_once (PATH_VIEWS.'footer.php');

