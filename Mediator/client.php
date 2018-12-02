<?php

ini_set('display_errors', true);
error_reporting(E_ALL);
include('../autoload.php');


class client {

    public function __construct(){

        $mediator = new Mediator();

        echo "-----采购人员采购电脑----" . "\n";
        $purchase = new Purchase($mediator);
        $purchase->buyIBMcomputer(100);

        echo "------销售人员销售电脑------" . "\n";
        $sale = new Sale($mediator);
        $sale->sellIBMComputer(1);

        echo "-----库房管理人员清库处理------" . "\n";
        $stock = new Stock($mediator);
        $stock->clearStock();

    }
}

$worker = new client();