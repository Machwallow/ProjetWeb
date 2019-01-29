<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 29/01/2019
 * Time: 10:02
 */

require_once (PATH_MODELS.'Dao.php');

class AdminDao extends Dao
{
    public function existAdmin($username,$pwd){

        return count( $this->queryAll('SELECT * FROM admin WHERE username=? AND password=?',array($username,$pwd))) > 0;
    }
}