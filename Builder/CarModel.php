<?php


abstract class CarModel
{
    private $sequence = [];

    abstract protected function start();

    abstract protected function stop();

    abstract protected function alarm();

    abstract protected function engineBoom();

    public function run()
    {
        foreach ($this->sequence as $step){
            if ($step == 'start'){
                $this->start();
            } else if ($step == 'stop'){
                $this->stop();
            } else if ($step == 'alarm'){
                $this->alarm();
            } else if ($step == 'engine boom'){
                $this->engineBoom();
            }
        }
    }

    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
    }

}