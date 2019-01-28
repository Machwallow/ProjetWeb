<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 25/01/2019
 * Time: 13:21
 */

// Initialisation des paramètres du site
require_once('./Config/config.php');
require_once('./Lib/baseFunc.php');
require_once(PATH_TEXT.LANG.'.php');


if(isset($_GET['page']))
{

    $page = htmlspecialchars($_GET['page']); // http://.../index.php?page=toto
    if(!is_file(PATH_CONTROLLERS.$_GET['page'].".php"))
    {
        $page = '404'; //page demandée inexistante
    }
}
else
    $page='accueil'; //page d'accueil du site - http://.../index.php

//appel du controller
require_once(PATH_CONTROLLERS.$page.'.php');

?>