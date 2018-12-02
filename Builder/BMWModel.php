<?php


class BMWModel extends CarModel
{

    public function start()
    {
        echo "宝马车跑起来是这个样子的..." . "\n";
    }

    public function engineBoom()
    {
        echo "宝马车的引擎声是这样的..." . "\n";
    }

    public function alarm()
    {
        echo "宝马车鸣笛..." . "\n";
    }

    public function stop()
    {
        echo "宝马车停车..." . "\n";
    }

}