<?php

class Product
{
  public $_id;
  public $_catId;
  public $_name;
  public $_description;
  public $_image;
  public $_price;

  public function __construct($id,$catId,$name,$description,$image,$price){
    $this->_id = $id;
    $this->_catId = $catId;
    $this->_name = $name;
    $this->_description = $description;
    $this->_image = $image;
    $this->_price = $price;
  }

}
