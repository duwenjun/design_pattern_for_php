<?php


class Purchase extends AbstractColleague
{

    public function __construct($mediator)
    {
        parent::__construct($mediator);
    }

    public function buyIBMcomputer($number)
    {
        $this->mediator->execute('purchase.buy', $number);
    }

    public function refuseBuyIBM()
    {
        echo "不在采购IMB电脑" . "\n";
    }

}