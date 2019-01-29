<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 29/01/2019
 * Time: 19:24
 */

require_once (PATH_ENTITY.'DAddress.php');
require_once (PATH_MODELS.'Dao.php');

class DAddressDao extends Dao
{
    public function insertDAddress($firstname,$lastname,$add1,$add2,$city,$postcode,$phone,$email){

        $sql = 'SELECT * FROM delivery_addresses WHERE firstname= ? AND lastname = ? AND add1 = ? AND add2 = ? 
                AND city = ? AND postcode = ? AND phone = ? AND email = ?';
        if(!$this->queryRow($sql,array($firstname,$lastname,$add1,$add2,$city,$postcode,$phone,$email))){
            $sql = 'INSERT INTO delivery_addresses VALUES(NULL,?,?,?,?,?,?,?,?)';
            $this->queryRow($sql,array($firstname,$lastname,$add1,$add2,$city,$postcode,$phone,$email));
        }

    }

    public function getAllDAddresses(){
        $addrs = array();
        $sql = 'SELECT * FROM delivery_addresses';
        $datas = $this->queryAll($sql);
        foreach ($datas as $data) {
            $add= new DAddress($data['id'],$data['firstname'],$data['lastname'],$data['add1'],$data['add2'],
                $data['city'],$data['postcode'],$data['phone'],$data['email']);
            $addrs[] = $add;
        }
        return $addrs;
    }

    public function getLastDAdressId(){
        $sql = "SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'shopping' AND TABLE_NAME = 'delivery_addresses'";
        return $this->queryRow($sql)[0];
    }
}