<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 25/01/2019
 * Time: 17:19
 */

session_start();

if(isset($_SESSION['isAdmin'])){
    require_once(PATH_CONTROLLERS.'headerAdmin.php');
}
else
    require_once(PATH_CONTROLLERS.'header.php');
require_once(PATH_VIEWS.'accueil.php');
require_once(PATH_VIEWS.'footer.php');