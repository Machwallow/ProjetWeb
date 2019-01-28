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


    public function getProductsByCatId($id){
        $products = array();
        $datas = $this->queryAll('SELECT * FROM products WHERE cat_id = ?',array($id));
        foreach ($datas as $data) {
            $product = new Product($data['id'],$data['cat_id'],$data['name'],$data['description'],
                $data['image'],$data['price']);
            $products[] = $product;
        }
        return $products;
    }

    public function getProductById($id){
        $data = $this->queryRow('SELECT * FROM products WHERE id = ?',array($id));
            $product = new Product($data['id'],$data['cat_id'],$data['name'],$data['description'],
                $data['image'],$data['price']);
        return $product;
    }

}
