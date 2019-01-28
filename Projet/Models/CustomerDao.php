<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 27/01/2019
 * Time: 21:14
 */

require_once (PATH_MODELS.'Dao.php');
require_once (PATH_ENTITY.'Customer.php');

class CustomerDao extends Dao
{

    public function getCustomer($id){

        $data = $this->queryRow('SELECT * FROM customers WHERE id=?',array($id));
        return new Customer($data['id'], $data['forname'], $data['surname'], $data['add1'], $data['add2'],
            $data['postcode'], $data['phone'], $data['email'], $data['registered']);
    }

}