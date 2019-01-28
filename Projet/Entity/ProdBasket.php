<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 28/01/2019
 * Time: 17:12
 */

class ProdBasket
{
    public $_prod;
    public $_qte;
    public $_totalCost;

    /**
     * ProdBasket constructor.
     * @param Product $prod
     * @param $qte
     */
    public function __construct($prod, $qte)
    {
        $this->_prod = $prod;
        $this->_qte = $qte;
        $this->_totalCost = $this->_prod->_price * $qte;
    }


}