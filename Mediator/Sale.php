<?php


class Sale extends AbstractColleague
{

    public function __construct($mediator)
    {
        parent::__construct($mediator);
    }

    public function sellIBMComputer($number)
    {
        $this->mediator->execute('sale.sell', $number);
        echo "销售IBM电脑" . $number . "台" . "\n";
    }

    public function getSaleStatus()
    {
        $saleStatus = mt_rand(0, 100);
        echo "IBM电脑的销售情况为：" . $saleStatus;
        return $saleStatus;

    }

    public function offSale()
    {
        $this->mediator->execute('sale.offsell');
    }

}