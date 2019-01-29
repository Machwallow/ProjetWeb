<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 29/01/2019
 * Time: 19:49
 */

class Order
{
    public $_id;
    public $_custId;
    public $_registered;
    public $_dAddressId;
    public $_paymentType;
    public $_date;
    public $_status;
    public $_total;

    /**
     * Order constructor.
     * @param $_id
     * @param $_custId
     * @param $_registered
     * @param $_dAdressId
     * @param $_paymentType
     * @param $_date
     * @param $_status
     * @param $_total
     */
    public function __construct($_id, $_custId, $_registered, $_dAdressId, $_paymentType, $_date, $_status, $_total)
    {
        $this->_id = $_id;
        $this->_custId = $_custId;
        $this->_registered = $_registered;
        $this->_dAddressId = $_dAdressId;
        $this->_paymentType = $_paymentType;
        $this->_date = $_date;
        $this->_status = $_status;
        $this->_total = $_total;
    }


}