<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 29/01/2019
 * Time: 19:24
 */

require_once (PATH_MODELS.'Dao.php');

class OrderItemsDao extends Dao
{
    public function insertOrderItem($orderId,$productId,$qte){
        $sql = 'INSERT INTO orderitems VALUES(NULL,?,?,?)';
        $this->queryRow($sql,array($orderId,$productId,$qte));
    }
}