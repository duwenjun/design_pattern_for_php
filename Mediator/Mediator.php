<?php


class Mediator extends AbstractMediator
{

    public function execute($request_str, $number = 0)
    {
        if ($request_str == 'purchase.buy'){
            $this->buyComputer($number);
        } else if ($request_str == 'sale.sell'){
            $this->sellComputer($number);
        } else if ($request_str == 'sale.offsell'){
            $this->offSell();
        } else if ($request_str == 'stock.clear'){
            $this->clearStock();
        }
    }

    private function buyComputer($number)
    {
        $saleStatus = $this->sale->getSaleStatus();

        if ($saleStatus > 80){
            echo "采购电脑" . $number . "台" . "\n";
            $this->stock->increase($number);
        } else {
            $buyNumber = $number / 2;
            echo "采购电脑" . $buyNumber . "台" . "\n";
            $this->stock->increase($buyNumber);
        }
    }

    private function sellComputer($number)
    {
        if ($this->stock->getStockNumber() < $number){
            $this->purchase->buyIBMcomputer($number);
        }
        $this->stock->decrease($number);
    }

    private function offSell()
    {
        echo "折价销售IBM电脑" . $this->stock->getStockNumber() . "台" . "\n";
    }

    private function clearStock()
    {
        $this->sale->offSale();
        $this->purchase->refuseBuyIBM();
    }

}