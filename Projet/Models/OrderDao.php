<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 29/01/2019
 * Time: 19:24
 */

require_once (PATH_MODELS.'Dao.php');
require_once (PATH_ENTITY.'Order.php');

class OrderDao extends Dao
{

    function getAllOrders(){
        $orders = array();
        $sql = 'SELECT * FROM orders';
        $datas = $this->queryAll($sql);
        foreach ($datas as $data) {
            $order = new Order($data['id'],$data['customer_id'],$data['registered'],$data['delivery_add_id'],$data['payment_type']
            ,$data['date'],$data['status'],$data['total']);
            $orders[] = $order;
        }
        return $orders;
    }

    function getOrder($id){
        $sql = 'SELECT * FROM orders WHERE id = ?';
        $data = $this->queryRow($sql,array($id));
        return new Order($data['id'],$data['customer_id'],$data['registered'],$data['delivery_add_id'],$data['payment_type']
            ,$data['date'],$data['status'],$data['total']);
    }

    function changeStatus($id,$status){
        $pdos = Connexion::getInstance()->getBdd();
        $pdos->beginTransaction();
        $sql = 'UPDATE orders SET status = ? WHERE id = ?';
        $this->_requete($sql,array($status,$id));
        $pdos->commit();
    }

    function getLastOrderId(){
        $sql = 'SELECT AUTO_INCREMENT
                FROM  INFORMATION_SCHEMA.TABLES
                WHERE TABLE_SCHEMA = "shopping"
                AND   TABLE_NAME   = "orders"';
        return $this->queryRow($sql)[0];
    }

    function insertOrder($custId,$registered,$delAddId,$pType,$date,$status,$total){
        $sql = 'INSERT INTO orders VALUES (NULL,?,?,?,?,?,?,?)';
        $this->queryRow($sql,array($custId,$registered,$delAddId,$pType,$date,$status,$total));
    }
}