<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 27/01/2019
 * Time: 21:17
 */

class Login
{
    public $_id;
    public $_customerId;
    public $_username;
    public $_pwd;

    /**
     * Login constructor.
     * @param $_id
     * @param $_customerId
     * @param $_username
     * @param $_pwd
     */
    public function __construct($_id, $_customerId, $_username, $_pwd)
    {
        $this->_id = $_id;
        $this->_customerId = $_customerId;
        $this->_username = $_username;
        $this->_pwd = $_pwd;
    }


}