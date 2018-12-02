<?php

abstract class HummerModel
{
    abstract public function start();

    abstract public function stop();

    abstract public function  alarm();

    abstract public function engineBoom();

    public function run()
    {
        //发动汽车
        $this->start();

        // 引擎开始轰鸣
        $this->engineBoom();

        // 遇到阻碍，按喇叭
        $this->alarm();

        // 到达目的地停车
        $this->stop();
    }

}