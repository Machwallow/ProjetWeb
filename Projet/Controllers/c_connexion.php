<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 27/01/2019
 * Time: 20:49
 */

require_once (PATH_MODELS.'LoginDao.php');
require_once (PATH_MODELS.'AdminDao.php');
require_once (PATH_MODELS.'CustomerDao.php');

session_start();
$error = null;

if (isset($_POST['username']) && isset($_POST['pwd'])) {

    if(!isset($_POST['isAdmin']) && $_POST['isAdmin']!= 'isAdmin'){
        $logDao = new LoginDao();
        $custDao = new CustomerDao();
        $login = $logDao->getLogin($_POST['username'],SHA1($_POST['pwd']));
        $customer = $custDao->getCustomer($login->_customerId);

        if(!is_null($login->_id)){

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
            $_SESSION['registered'] = $customer->_registered;

            header('Location:./index.php?page=accueil');
        }
        else
            $error = "Compte non reconnu";
    }
    else{
        $adDao = new AdminDao();
        if($adDao->existAdmin($_POST['username'],SHA1($_POST['pwd']))){
            $_SESSION['isAdmin'] = true;
            header('Location:./index.php?page=accueil');
        }
        else
            $error = "Compte admin inexistant";
    }

}

require_once(PATH_CONTROLLERS.'header.php');

require_once (PATH_VIEWS.'connexion.php');



