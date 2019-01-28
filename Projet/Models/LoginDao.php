<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 27/01/2019
 * Time: 21:14
 */
require_once (PATH_MODELS.'Dao.php');
require_once (PATH_ENTITY.'Login.php');

class LoginDao extends Dao
{
    public function getAllLogins(){
        $logins = array();
        $datas = $this->queryAll('SELECT * FROM logins');
        foreach ($datas as $data) {
            $login = new Login($data['id'],$data['customer_id'],$data['username'],$data['password']);
            $logins[] = $login;
        }
        return $logins;
    }

    public function getLogin($username,$pwd){
        $sql = "SELECT * FROM logins WHERE username='$username'AND password='$pwd'";
        $pdos = Connexion::getInstance()->getBdd()->prepare($sql);// requête préparée
        $pdos->execute();
        $res = $pdos->fetch(PDO::FETCH_ASSOC);
        $pdos->closeCursor();
        return new Login($res['id'],$res['customer_id'],$res['username'],$res['password']);
    }

    public function insertLogin($custId,$username,$pwd){
      $sql = "INSERT INTO logins VALUES(NULL,?,?,?)";
      $pdos = Connexion::getInstance()->getBdd()->prepare($sql);// requête préparée
      $pdos->execute(array($custId,$username,$pwd));

    }
}
