<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 27/01/2019
 * Time: 21:56
 */

class Customer
{
    public $_id;
    public $_forname;
    public $_surname;
    public $_add1;
    public $_add2;
    public $_postcode;
    public $_phone;
    public $_email;
    public $_registered;

    /**
     * Customer constructor.
     * @param $_id
     * @param $_forname
     * @param $_surname
     * @param $_add1
     * @param $_add2
     * @param $_postcode
     * @param $_phone
     * @param $_email
     * @param $_registered
     */
    public function __construct($_id, $_forname, $_surname, $_add1, $_add2, $_postcode, $_phone, $_email, $_registered)
    {
        $this->_id = $_id;
        $this->_forname = $_forname;
        $this->_surname = $_surname;
        $this->_add1 = $_add1;
        $this->_add2 = $_add2;
        $this->_postcode = $_postcode;
        $this->_phone = $_phone;
        $this->_email = $_email;
        $this->_registered = $_registered;
    }


}