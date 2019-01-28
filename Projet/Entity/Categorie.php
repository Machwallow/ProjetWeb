<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 25/01/2019
 * Time: 17:00
 */

class Categorie
{
    public $_id;
    public $_name;

    public function __construct($id,$name){
        $this->_id = $id;
        $this->_name = $name;
    }
}