<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 27/01/2019
 * Time: 18:44
 */
require_once (PATH_MODELS.'CategorieDao.php');
require_once (PATH_ENTITY.'Categorie.php');

$catDao = new CategoriesDAO();
$categories = $catDao->getAllCategories();

require_once(PATH_VIEWS.'header.php');