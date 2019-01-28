<?php
require_once(PATH_MODELS.'Dao.php');
require_once(PATH_ENTITY.'Product.php');

class ProductDao extends Dao {

  public function getAllProducts(){
    $products = array();
    $datas = $this->queryAll('SELECT * FROM products');
    foreach ($datas as $data) {
        $product = new Product($data['id'],$data['cat_id'],$data['name'],$data['description'],
          $data['image'],$data['price']);
        $products[] = $product;
    }
    return $products;
  }

}
