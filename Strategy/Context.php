<?php


class Context
{
    private $strategy;

    public function __construct(IStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function operate()
    {
        $this->strategy->operate();
    }
}