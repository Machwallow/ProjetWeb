<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 27/01/2019
 * Time: 20:49
 */

require_once (PATH_MODELS.'LoginDao.php');
require_once (PATH_MODELS.'CustomerDao.php');

session_start();

if (isset($_POST['username']) && isset($_POST['pwd'])) {

    try{
        $logDao = new LoginDao();
        $custDao = new CustomerDao();
        $login = $logDao->getLogin($_POST['username'],SHA1($_POST['pwd']));
        $customer = $custDao->getCustomer($login->_customerId);

        $_SESSION['username'] = $login->_username;
        $_SESSION['customerId'] = $login->_customerId;
        $_SESSION['id'] = $login->_id;
        $_SESSION['forname'] = $customer->_forname;
        $_SESSION['surname'] = $customer->_surname;
        $_SESSION['add1'] = $customer->_add1;
        $_SESSION['add2'] = $customer->_add2;
        $_SESSION['postcode'] = $customer->_postcode;
        $_SESSION['phone'] = $customer->_phone;
        $_SESSION['email'] = $customer->_email;
        $_SESSION['phone'] = $customer->_phone;

        header('Location:./index.php?page=accueil');

    }catch(Exception $e){

        $error = "Compte non reconnu";
    }

}

require_once(PATH_CONTROLLERS.'header.php');

require_once (PATH_VIEWS.'connexion.php');



