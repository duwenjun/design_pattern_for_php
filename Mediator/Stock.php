<?php


class Stock extends AbstractColleague {

    private static $computer_number = 100;

    public function __construct($mediator)
    {
        parent::__construct($mediator);
    }

    public function increase($number)
    {
        self::$computer_number = self::$computer_number + $number;
        echo "库存数量：" . self::$computer_number . "\n";
    }

    public function decrease($number)
    {
        self::$computer_number = self::$computer_number - $number;
        echo "库存数量：" . self::$computer_number . "\n";
    }

    public function getStockNumber()
    {
        return self::$computer_number;
    }

    public function clearStock()
    {
        echo "清理库存数量为：" . self::$computer_number . "\n";
        $this->mediator->execute('stock.clear');
    }

}