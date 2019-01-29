<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 29/01/2019
 * Time: 19:51
 */

class DAddress
{

    public $_id;
    public $_firstname;
    public $_lastname;
    public $_add1;
    public $_add2;
    public $_city;
    public $_postcode;
    public $_phone;
    public $_email;

    /**
     * DAddress constructor.
     * @param $_id
     * @param $_firstname
     * @param $_lastname
     * @param $_add1
     * @param $_add2
     * @param $_city
     * @param $_postcode
     * @param $_phone
     * @param $_email
     */
    public function __construct($_id, $_firstname, $_lastname, $_add1, $_add2, $_city, $_postcode, $_phone, $_email)
    {
        $this->_id = $_id;
        $this->_firstname = $_firstname;
        $this->_lastname = $_lastname;
        $this->_add1 = $_add1;
        $this->_add2 = $_add2;
        $this->_city = $_city;
        $this->_postcode = $_postcode;
        $this->_phone = $_phone;
        $this->_email = $_email;
    }


}