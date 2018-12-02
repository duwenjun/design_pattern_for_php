<?php


class BenzModel extends CarModel
{
    public function start()
    {
        echo "奔驰车跑起来是这个样子的..." . "\n";
    }

    public function engineBoom()
    {
        echo "奔驰车的引擎声是这样的..." . "\n";
    }

    public function alarm()
    {
        echo "奔驰车鸣笛..." . "\n";
    }

    public function stop()
    {
        echo "奔驰车跑停车..." . "\n";
    }
}