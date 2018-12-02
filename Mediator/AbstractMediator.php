<?php


abstract class AbstractMediator
{
    protected $purchase;

    protected $sale;

    protected $stock;

    public function __construct()
    {
        $this->purchase = new Purchase($this);
        $this->sale = new Sale($this);
        $this->stock = new Stock($this);
    }

    abstract public function execute($request_str, $number);

}