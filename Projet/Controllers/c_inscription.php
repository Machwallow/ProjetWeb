<?php

require_once(PATH_MODELS.'LoginDao.php');
require_once(PATH_MODELS.'CustomerDao.php');

if(isset($_POST['createUser'])){

    $username=$_POST["username"];
    $pwd=$_POST["pwd"];
    $forname=$_POST["forname"];
    $surname=$_POST["surname"];
    $add1=$_POST["add1"];
    $add2=$_POST["add2"];
    $postcode=$_POST["postcode"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $registered=1;

    $custDao = new CustomerDao();
    $logDao = new LoginDao();
    $custDao->insertCustomer($forname,$surname,$add1,$add2,$postcode,$phone,$email,$registered);


    $customer = $custDao->getCustomerInscription($forname,$surname);

    $logDao->insertLogin($customer->_id,$username,SHA1($pwd));

    header('Location:./index.php?page=connexion');

}

require_once(PATH_CONTROLLERS.'header.php');
require_once(PATH_VIEWS.'inscription.php');
